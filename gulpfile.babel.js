import { src, dest, watch, series, parallel } from 'gulp';
import yargs from 'yargs';
import sass from 'gulp-sass';
import cleanCss from 'gulp-clean-css';
import postcss from 'gulp-postcss';
import sourcemaps from 'gulp-sourcemaps';
import autoprefixer from 'autoprefixer';
import concat from 'gulp-concat';
import minify from 'gulp-minify';
import webpack from 'webpack-stream';
import imagemin from 'gulp-imagemin';
import browserSync from "browser-sync";

const PRODUCTION = yargs.argv.prod;
const server = browserSync.create();
export const serve = done => {
  server.init({
    proxy: "http://geoff.test"
  });
  done();
};
export const reload = done => {
  server.reload();
  done();
};

export const styles = () => {
  return src(['assets/scss/style.scss'])
    .pipe(sass().on('error', sass.logError))
    .pipe(postcss([ autoprefixer ]))
    .pipe(cleanCss({compatibility:'ie11'}))
    .pipe(sourcemaps.write())
    .pipe(dest('dist/assets/css'))
    .pipe(server.stream());
}

export const scripts = () => {
	var gulp = require('gulp')
	return gulp.src('src/js/**/*.js')
		.pipe(concat('scripts.js'))
		.pipe(gulp.dest('dist/assets/js'))
		.pipe(minify())
		.pipe(gulp.dest('dist/assets/js'))
}

export const images = () => {
  return src('assets/images/**/*.{jpg,jpeg,png,gif}')
    .pipe(imagemin())
    .pipe(dest('dist/images'));
}

// SVG Sprite
export const svg = () => {
	var svgSprite = require('gulp-svg-sprite');
	var gulp = require('gulp'),
	config = {
		shape: {
			dest: 'assets/dist/images'
		},
		mode: {
			dest: 'assets/dist/images',
			symbol: true,
			inline: true,
			bust: true
		},
		svg: {
			spriteWidth: 0,
			spriteHeight: 0,
			xmlDeclaration: false,
			doctypeDeclaration: false,
		},
	};
	return gulp.src('**/*.svg', { cwd: 'src/images/svg' })
  .pipe(svgSprite(config))
  .pipe(gulp.dest('.'));
}

export const watchForChanges = () => {
  watch('assets/scss/**/*.scss', series(styles, reload));
  watch('assets/images/**/*.{jpg,jpeg,png,gif}', series(images, reload));
	watch('assets/images/icons/**/*.{svg}', series(svg, reload));
	watch(['assets/**/*','!assets/{images,js,scss}','!src/{images,js,scss}/**/*'], series(reload));
  watch('assets/js/**/*.js', series(scripts, reload));
  watch("**/*.php", reload);
}

export const dev = series(parallel(styles, images, scripts), serve, watchForChanges, reload);

export const build = done => {
	series(parallel(styles, images, scripts));
	done();
};

export default dev;
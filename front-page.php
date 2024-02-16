<?php

/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme and one of the
 * two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Odin
 * @since 2.2.0
 */

get_header(); ?>

<main class="main-content" id="content">
	<section class="section">
		<p>Posso te ajudar em:</p>
		<ul>
			<li>Desenvolvimento de sites;</li>
			<li>Testes de acessibilidade;</li>
			<li>Avaliação de acessibilidade;</li>
			<li>Consultoria e Mentorias;</li>
			<li>Palestras.</li>
		</ul>

		<a href="#" class="button" aria-label="Saiba mais sobre meus serviços">Saiba mais</a>
	</section>
  <section class="container container-large" aria-labelledby="about-section">
		<h2 id="about-section">Artigos</h2>

		<?php
			$args = array(
				'post_type' => 'post',
				'posts_per_page' => 6,
				'order' => 'DESC',
				'tax_query' => array(
					'taxonomy' => 'categories',
					'field' => 'slug',
					'term' => 'letters',
					'operator' => 'NOT IN'
				)
			);

			$blog = new WP_Query( $args );

			if ( $blog->have_posts() ) :
				while ( $blog->have_posts() ) : $blog->the_post();
		?>
			<article class="article article-posts">
				<h3 class="post-title">
					<a href="<?php the_permalink(); ?>" rel="permalink"><?php the_title(); ?></a>
				</h3>
				<div class="post-meta">
					<time class="time" datetime="<?php echo get_the_date('Y-m-d'); ?>">
						<?php echo get_the_date('d/m/Y'); ?>
					</time>
				</div>
			</article>
      <?php endwhile; ?>
      <?php wp_reset_postdata(); ?>
      <?php endif; ?>
  </section>
</main><!-- #content -->
<?php
get_footer();

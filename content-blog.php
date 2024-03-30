
<?php
/**
 *
 * The template used for displaying page content.
 *
 * @package Odin
 * @since 2.2.0
 */
?>

<section class="container" id="blog" aria-labelledby="blog-section">
  <div class="row">
    <div class="col-md-12 text-center">
      <div class="headline">
        <h2>Artigos por tópicos</h2>
      </div>
      <?php get_search_form(); ?>
    </div>

    <div class="row g-4">
      <div class="col-md-6">
        <article class="c-card">
          <h3 class="c-card__title">
            <a href="<?php bloginfo('url'); ?>/category/a11y" class="c-card__link">Acessibilidade</a>
          </h3>

          <ul>
            <?php
              $args = array(
                'post_type'      => 'post',
                'posts_per_page' => 4,
                'category__in'   => array( get_cat_ID( $post->post_name ), get_cat_ID( 'acessibilidade' ) ),
                'order'          => 'DESC'
              );

              $blog = new WP_Query( $args );

              if ( $blog->have_posts() ) :
                while ( $blog->have_posts() ) : $blog->the_post();
            ?>
              <li><a href="<?php the_permalink(); ?>" rel="permalink"><?php the_title();?></a></li>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
            <?php endif; ?>
          </ul>
        </article>
      </div>

      <div class="col-md-6">
        <article class="c-card">
          <h3 class="c-card__title">
            <a href="<?php bloginfo('url'); ?>/category/carreira" class="c-card__link">Carreira</a>
          </h3>

          <ul>
            <?php
              $args = array(
                'post_type'      => 'post',
                'posts_per_page' => 4,
                'category__in'   => array( get_cat_ID( $post->post_name ), get_cat_ID( 'carreira' ) ),
                'order'          => 'DESC'
              );

              $blog = new WP_Query( $args );

              if ( $blog->have_posts() ) :
                while ( $blog->have_posts() ) : $blog->the_post();
            ?>
              <li><a href="<?php the_permalink(); ?>" rel="permalink"><?php the_title();?></a></li>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
            <?php endif; ?>
          </ul>
        </article>
      </div>

      <div class="col-md-6">
        <article class="c-card">
          <h3 class="c-card__title">
            <a href="<?php bloginfo('url'); ?>/category/frontend" class="c-card__link">Desenvolvimento web</a>
          </h3>
          <ul>
            <?php
              $args = array(
                'post_type'      => 'post',
                'posts_per_page' => 4,
                'category__in'   => array( get_cat_ID( $post->post_name ), get_cat_ID( 'Desenvolvimento web' ) ),
                'order'          => 'DESC'
              );

              $blog = new WP_Query( $args );

              if ( $blog->have_posts() ) :
                while ( $blog->have_posts() ) : $blog->the_post();
            ?>
              <li><a href="<?php the_permalink(); ?>" rel="permalink"><?php the_title();?></a></li>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
            <?php endif; ?>
          </ul>
        </article>
      </div>

      <div class="col-md-6">
        <article class="c-card">
          <h3 class="c-card__title">
            <a href="<?php bloginfo('url'); ?>/category/indicacoes" class="c-card__link">Indicações</a>
          </h3>

          <ul>
            <?php
              $args = array(
                'post_type'      => 'post',
                'posts_per_page' => 4,
                'category__in'   => array( get_cat_ID( $post->post_name ), get_cat_ID( 'indicacoes' ) ),
                'order'          => 'DESC'
              );

              $blog = new WP_Query( $args );

              if ( $blog->have_posts() ) :
                while ( $blog->have_posts() ) : $blog->the_post();
            ?>
              <li><a href="<?php the_permalink(); ?>" rel="permalink"><?php the_title();?></a></li>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
            <?php endif; ?>
          </ul>
        </article>
      </div>

      <div class="col-md-6">
        <article class="c-card">
          <h3 class="c-card__title entry-title blog__title">
            <a href="<?php bloginfo('url'); ?>/category/produtividade" class="c-card__link">Produtividade</a>
          </h3>

          <ul>
            <?php
              $args = array(
                'post_type'      => 'post',
                'posts_per_page' => 4,
                'category__in'   => array( get_cat_ID( $post->post_name ), get_cat_ID( 'produtividade' ) ),
                'order'          => 'DESC'
              );

              $blog = new WP_Query( $args );

              if ( $blog->have_posts() ) :
                while ( $blog->have_posts() ) : $blog->the_post();
            ?>
              <li><a href="<?php the_permalink(); ?>" rel="permalink" ><?php the_title();?></a></li>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
            <?php endif; ?>
          </ul>
        </article>
      </div>

      <div class="col-md-6">
        <article class="c-card">
          <h3 class="c-card__title entry-title blog__title">
            <a href="<?php bloginfo('url'); ?>/category/qualidade-de-software" class="c-card__link">Qualidade de software</a>
          </h3>

          <ul>
            <?php
              $args = array(
                'post_type'      => 'post',
                'posts_per_page' => 4,
                'category__in'   => array( get_cat_ID( $post->post_name ), get_cat_ID( 'Qualidade de Software' ) ),
                'order'          => 'DESC'
              );

              $blog = new WP_Query( $args );

              if ( $blog->have_posts() ) :
                while ( $blog->have_posts() ) : $blog->the_post();
            ?>
              <li><a href="<?php the_permalink(); ?>" rel="permalink"><?php the_title();?></a></li>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
            <?php endif; ?>
          </ul>
        </article>
      </div>
    </div>
  </div>
</section>

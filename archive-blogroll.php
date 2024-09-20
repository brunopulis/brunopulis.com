<?php
/**
 * Template Name: Blogroll
 *
 * The template for displaying Serviços page.
 *
 * @package Odin
 * @since 2.2.0
 */
get_header(); ?>

<main id="content">
  <div class="container">
    <div class="row mb-3"> 
      <?php odin_breadcrumbs(); ?>
      <h1 class="entry-title">Blogroll</h1>
      
      <p>Antes de os mecanismos de busca se tornarem uma coisa, os blogrolls eram bem comuns. Todo mundo tinha uma seção em seu site dedicada a compartilhar links que eles gostavam. Eu simplesmente adoro essa ideia de curadoria de links, por isso decidi criar por aqui.
      </p>
    </div>

    <ul class="blogroll__list">
      <?php
        $args = array(
          'post_type'      => 'blogrolls',
          'posts_per_page' => 12,
          'order'          => 'ASC'
        );

        $blogrolls = new WP_Query( $args );
        
        if ( $blogrolls->have_posts() ) :
          while ( $blogrolls->have_posts() ) : $blogrolls->the_post();
            $blogroll_url = get_field ( 'blogroll_url' );
      ?>
        <li class="blogroll__item">
          <div class="blogroll__body h-100">
            <h3 class="blogroll__title"><?php the_title(); ?></h3>

            <?php if( has_post_thumbnail() ): ?>
              <?php the_post_thumbnail('blogroll-thumbnail', array('class' => 'img-fluid blogroll__thumbnail')); ?>  
            <?php else: ?>
              <img src="" alt="">
            <?php endif; ?>
            <p><?php the_content(); ?></p>
            <a href="<?php echo $blogroll_url; ?>" class="blogroll__link">Se inscreva <span class="visually-hidden">no blog do <?php the_title(); ?></span></a>
          </div>
        </li>
        <?php endwhile; ?>
        <div class="pagination">
          
        </div>
        <?php wp_reset_postdata(); ?>
        <?php else: ?>
          <p>Nenhum favorito encontrado.</p>
        <?php endif; ?>  
    </ul>
  </div>
  <?php require_once('template-parts/newsletter.php'); ?>
</main><!-- #main -->

<?php
get_footer();

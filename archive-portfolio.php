<?php
/**
 * Template Name: Portfolio Archive
 *
 * @package Odin
 * @since 2.2.0
 */
get_header(); ?>

<main id="content">
  <section>
    <div class="container">
      <div class="row">
        <div class="d-flex justify-content-start align-items-baseline">
          <p style="padding-right: 10px">Você está em:</p>
          <?php odin_breadcrumbs(); ?>
        </div>
        <h1 class="entry-title">Portfólio</h1>
        <p>Confira alguns trabalhos que desenvolvi.</p>
      </div>
    </div>

    <div class="container">
      <div class="projects">
        <?php
          $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

          $args = array(
            'post_type'      => 'portfolio',
            'paged'          => $paged,
            'posts_per_page' => 2,
            'post_status'    => 'publish',
            'order'          => 'DESC',
            'orderby'        => 'date'
          );

          $projects = new WP_Query( $args );

          if ( $projects->have_posts() ) :
            while ( $projects->have_posts() ) : $projects->the_post();
        ?>
          <article class="project">
            <div class="content">
              <h2 class="project__name"><?php the_title(); ?></h2>
              <p><?php the_content(); ?></p>
              <?php
                $project_categories = get_the_terms(get_the_ID(), 'portfolio_attributes');
                if ($project_categories && !is_wp_error($project_categories)) :
              ?>
                <ul class="list">
                  <?php foreach ($project_categories as $category) : ?>
                    <li class="list__item">
                      <span class="list-badge list-badge--grey"><?php echo esc_html($category->name); ?></span>
                    </li>
                  <?php endforeach; ?>
                </ul>
              <?php endif; ?>
              
              <a href="<?php the_permalink(); ?>" class="project__link">
                Veja o projeto completo
                <svg aria-hidden="true" class="project__icon">
                  <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/svgs/solid.svg#chevron-right">
                </svg>
              </a>
            </div>
            <div class="justify-content-end d-flex">
              <?php the_post_thumbnail(); ?>
            </div>
          </article>
        <?php 
          endwhile; 
          
          
          // $total_pages = $projects->max_num_pages;

            

          //   if ($total_pages > 1){
          //     $current_page = max(1, get_query_var('paged'));
          //     //odin_debug($current_page);

          //     echo paginate_links(array(
          //       'base' => str_replace(999999999, '%#%', esc_url(get_pagenum_link(999999999))),
          //       'format' => '?paged=%#%',
          //       'current' => max(1, $paged),
          //       'total' => $total_pages,
          //       'prev_text' => __('« Anterior'),
          //       'next_text' => __('Próximo »'),
          //     ));
            
          //   }  
          // endif;
        ?>
        <div class="d-flex justify-content-start">
          <?php echo odin_pagination( 2, 1, false, $projects ); ?>
        </div>
        <?php
          wp_reset_postdata(); 
        endif;
        ?>
      </div>
    </div>
  </section>
  <?php require_once('template-parts/components/newsletter.php'); ?>
</main>
<?php
get_footer();

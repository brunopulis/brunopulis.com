<section  class="recent-blog-posts mt-5" aria-labelledby="letters-title">
  <div class="headline">
    <div class="container">
      <div class="row">
        <h2 id="letters-title">Pulis Letters</h2>
        <p class="lead">Insights valiosos sobre acessibilidade, Obsidian e organização digital.</p>
      </div>
    </div>
  </div>

  <div class="container">
    <ul class="row list-unstyled">
      <?php
        $args = array(
          'post_type'      => 'letters',
          'posts_per_page' => 3,
          'order'          => 'DESC'
        );

        $letters = new WP_Query( $args );

        if ( $letters->have_posts() ) :
          while ( $letters->have_posts() ) : $letters->the_post();
      ?>
        <li class="col-md-4 mb-5">
          <article class="c-card">
            <?php if( has_post_thumbnail($letters->ID) ):  ?>
              <?php $image = wp_get_attachment_url( get_post_thumbnail_id( $letters->ID ), 'letter-thumbnails' ); ?>
              <figure class="c-card__image" style="background-image: url('<?php echo $image; ?>')"></figure>
            <?php endif; ?>
            <div class="c-card__body">
              <h3 class="c-card__title">
                <a href="<?php the_permalink(); ?>" class="c-card__title">
                  <?php the_title(); ?>
                </a>
              </h3>
            </div>
          </article>
        </li>
      <?php endwhile; ?>
      <?php wp_reset_postdata(); ?>
      <?php endif; ?>
    </ul>

    <a href="<?php the_permalink(); ?>/category/letters" class="button button--letters btn btn-secondary">Leia outras edições</a>
  </div>
</section>

<?php
/**
 * The default template for displaying content.
 *
 * Used for both single and index/archive/author/catagory/search/tag.
 *
 * @package Odin
 * @since 2.2.0
 */
?>

<div>
  <article <?php post_class(); ?> id="post-<?php the_ID(); ?>" >
    <header class="entry-header" role="banner">
      <div class="row  mt-4">
        <div class="col-sm-12 col-md-6">
          <?php odin_breadcrumbs(); ?>
          <?php
            if ( is_single() ) :
              the_title( '<h1 class="entry-title">', '</h1>' );
            else :
              the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
            endif;
          ?>

          <div class="post-single__date">
            <p>Escrito a mão por <span class="p-author h-card"><?php echo get_the_author(); ?></span></p>
            <div>
            <time datetime="<?php echo get_the_date('Y-m-d g:i:s'); ?>" class="text-capitalize"><?php the_date( 'F j, Y' ) ?></time>
            </div>
          </div>

          <div class="post-meta__share">
            <p><strong>Compartilhe essa publicação</strong></p>

            <ul class="social__list">
              <li class="social__item">
                <a class="social__link" href="mailto:?subject=Seu%20amigo%20compartilhou%20um%20artigo%20com%20você.&body=<?php the_title(); ?>%20<?php the_permalink(); ?>" rel="nofollow noopener noreferrer" target="_blank">
                  <svg aria-hidden="true" class="social__icon">
                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/svgs/regular.svg#envelope">
                  </svg>
                  <span class="visually-hidden">E-mail</span>
                </a>
              </li>
              <li class="social__item">
                <a class="social__link" href="https://twitter.com/intent/tweet?url=<?php the_permalink();?>&text=<?php the_title();?>" rel="nofollow noopener noreferrer" target="_blank">
                  <svg aria-hidden="true" class="social__icon">
                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/svgs/brands.svg#x-twitter">
                  </svg>
                  <span class="visually-hidden">Twitter</span>
                </a>
              </li>
              <li class="social__item">
                <a class="social__link" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" rel="nofollow noopener noreferrer" target="_blank">
                  <svg aria-hidden="true" class="social__icon">
                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/svgs/brands.svg#facebook">
                  </svg>
                  <span class="visually-hidden">Facebook</span>
                </a>
              </li>
              
              <li class="social__item">
                <a class="social__link" href="https://www.threads.net/intent/post?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>" rel="nofollow noopener noreferrer" target="_blank">
                  <svg aria-hidden="true" class="social__icon">
                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/svgs/brands.svg#threads">
                  </svg>
                  <span class="visually-hidden">Threads</span>   
                </a>
              </li>
              <li class="social__item">
                <a class="social__link" href="https://toot.kytta.dev/?text=<?php the_title(); ?>%20por%20@brunopulis@mastodon.social%3A%0A%0A<?php the_permalink() ?>" rel="nofollow noopener noreferrer" target="_blank">
                  <svg aria-hidden="true" class="social__icon">
                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/svgs/brands.svg#mastodon">
                  </svg>
                  <span class="visually-hidden">Mastodon</span>   
                </a>
              </li>
              <li class="social__item">
                <a class="social__link" href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>&text=<?php the_title(); ?>" rel="nofollow noopener noreferrer" target="_blank">
                <svg aria-hidden="true" class="social__icon">
                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/svgs/brands.svg#linkedin">
                  </svg>
                  <span class="visually-hidden">Linkedin</span>
                </a>
              </li>
            </ul>
          </div>
        </div>

        <div class="col-sm-12 col-md-6">
          <?php
            if ( has_post_thumbnail() ) {
              the_post_thumbnail( 'single-thumbnail', array( 'width' => 636, 'height' => 358, 'class' => 'img-fluid'  ) );
            }
          ?>
        </div>
      </div>
    </header>

    <div class="row mt-5">
      <div class="col-sm-8">
        <div class="entry-content" style="margin: 0;">
          <?php the_content(); ?>
        </div>

        <div class="entry-meta">
          <?php if ( in_array( 'category', get_object_taxonomies( get_post_type() ) ) ) : ?>
            <span class="list-badge list-badge--grey"><?php echo __( '', 'odin' ) . ' ' . get_the_category_list( _x( ', ', 'Used between list items, there is a space after the comma.', 'odin' ) ); ?></span>
          <?php endif; ?>
          <?php the_tags( '<span class="list-badge list-badge--grey">' . __( 'Tags:', 'odin' ) . ' ', ', ', '</span>' ); ?>
        </div>
      </div>
      <div class="col-sm-4">
        <?php get_sidebar(); ?>
      </div>
    </div>

    <footer class="post-single__footer">
      <?php
        the_post_navigation( array(
          'prev_text'  => __( '<span aria-hidden="true">👈</span> Anterior' ),
          'next_text'  => __( 'Próximo <span aria-hidden="true">👉</span>' ),
          'in_same_term' => true,
          'taxonomy' => __( 'category' ),
        ) );
      ?>
    </footer>
  </article>

  <section class="comments mt-6 mb-6">
    <?php
      if ( comments_open() || get_comments_number() ):
        comments_template();
      endif;
    ?>
  </section>
  
  <section class="related-posts">
    <?php echo odin_related_posts( 'category', 4, '', true, 'post' ) ?>
  </section>
</div>

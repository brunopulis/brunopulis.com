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

<!-- max-width: 45rem +/- 710  -->
<div class="">
  <article <?php post_class(); ?> id="post-<?php the_ID(); ?>" >
    <div class="row">
      <?php odin_breadcrumbs(); ?>
      <div class="entry-header d-flex justify-content-between align-items-center">
        <div class="">
        <?php
          if ( is_single() ) :
            the_title( '<h1 class="entry-title">', '</h1>' );
          else :
            the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
          endif;
        ?>

        <div class="post-single__meta">
          <div class="post-single__date">
            <span aria-hidden="true">✏️</span> 
            <p>Escrito a mão por <span class="p-author h-card"><?php echo get_the_author(); ?></span></p>
            <time class="text-capitalize"><?php the_date( 'F j, Y' ) ?></time>
          </div>
          <div class="post-single__share">
            <ul>
              <li>Link</li>
              <li>Linkedin</li>
              <li>X</li>
              <!-- toot.kytta.dev/?text="<?php the_title(); ?>&instance=mastodon.social" 
                https://toot.kytta.dev/?text=Website Optimization Measures Part XXVI%2C%20by%20@j9t@mas.to%3A%0A%0Ahttps://meiert.com/en/blog/optimization-measures-26/ 
              
              -->
              <li><a href="https://toot.kytta.dev/?text=<?php the_title(); ?>%2C%20por%20@brunopulis@mastodon.social%3A%0A%0A<?php the_permalink(); ?>">Toot</a></li>
              <li>Facebook</li>
            </ul>
          </div> 
        </div>
           
        </div>

        <div class="">

        <?php the_post_thumbnail(); ?>
        </div>  
        <?php
          $category = get_the_category();
          $firstCategory = $category[0]->cat_name;
          $slugCategory  = $category[0]->category_nicename;
        ?>

        <!-- <ul class="post-category__list d-flex justify-content-center align-items-center">
          <li class="category post-category__item">
            <?php # the_category(' ', ' '); ?>
          </li>
          <li class="post-category__item">
            <time class="post-date time" datetime="<?php echo get_the_date('Y-m-d g:i:s'); ?>">
              <?php # echo get_the_date('F j, Y'); ?>
            </time>
          </li>
        </ul> -->
      </div>
    </div>

      <?php if ( is_search() ) : ?>
        <div class="entry-summary">
          <?php the_excerpt(); ?>
        </div><!-- .entry-summary -->
      <?php else : ?>
        <div class="entry-content">
          <?php
            the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'odin' ) );
            wp_link_pages( array(
              'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'odin' ) . '</span>',
              'after'       => '</div>',
              'link_before' => '<span>',
              'link_after'  => '</span>',
            ) );
          ?>
        </div><!-- .entry-content -->
      <?php endif; ?>

      <div class="entry-meta">
        <?php if ( in_array( 'category', get_object_taxonomies( get_post_type() ) ) ) : ?>
          <span class="cat-links"><?php echo __( 'Categoria:', 'odin' ) . ' ' . get_the_category_list( _x( ', ', 'Used between list items, there is a space after the comma.', 'odin' ) ); ?></span>
        <?php endif; ?>
        <?php the_tags( '<span class="tag-links">' . __( 'Tags:', 'odin' ) . ' ', ', ', '</span>' ); ?>
        <?php if ( ! post_password_required() && ( comments_open() || get_comments_number() ) ) : ?>
          <span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'odin' ), __( '1 Comment', 'odin' ), __( '% Comments', 'odin' ) ); ?></span>
        <?php endif; ?>
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
    </div>
    <aside class="col-md-4">
      <h2>Índice do artigos</h2>
    </aside>
  </article>
  <section class="comments">
    <?php 
      if ( comments_open() || get_comments_number() ):
        comments_template();
      endif;
    ?>
  </section>  
</div>

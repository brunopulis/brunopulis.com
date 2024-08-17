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

<div class="col-xs-12 col-sm-12 col-md-8">
  <article <?php post_class(); ?> id="post-<?php the_ID(); ?>" >
    <div class="entry-header">
      <p class="post-date">
        <time class="time" datetime="<?php echo get_the_date('Y-m-d'); ?>">
          <?php echo get_the_date('F j, Y'); ?>
        </time>
      </p>
      <?php
        if ( is_single() ) :
          the_title( '<h1 class="entry-title">', '</h1>' );
        else :
          the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
        endif;
      ?>
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

    <?php if (is_single()):  ?>
      <?php get_template_part( 'template-parts/coffee' ); ?>
      <?php get_template_part( 'template-parts/newsletter' ); ?>
    <?php endif; ?>
  </article>
</div>
<div class="col-xs-12 col-sm-12 col-md-4">
  <?php get_sidebar(); ?>
</div>

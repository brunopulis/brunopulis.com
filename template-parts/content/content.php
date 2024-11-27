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
    <div class="entry-header">
      <div class="row  mt-4">
        <div class="col-sm-12 col-md-6">    
            <?php
              if ( is_single() ) :
                the_title( '<h1 class="entry-title">', '</h1>' );
              else :
                the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
             endif;
            ?>
        
            <div class="post-single__date">
              <p>Escrito a mão por <span class="p-author h-card"><?php echo get_the_author(); ?></span></p>
              <time datetime="<?php echo get_the_date('Y-m-d g:i:s'); ?>" class="text-capitalize"><?php the_date( 'F j, Y' ) ?></time>
              <p><a href="https://github.com/brunopulis/brunopulis.com/issues/new?template=broken-page.yml&amp;amp;title=Página%20quebrada:%20Blog&amp;amp;url=https://<?php the_permalink();?>">Reportar bug</a></p>
            </div>
            
            <div class="post-meta__share">
                <p><strong>Compartilhe essa publicação</strong></p>
                <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>&text=<?php the_title(); ?>" rel="nofollow noopener noreferrer" target="_blank">LinkedIn</a>
                <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" rel="nofollow noopener noreferrer" target="_blank">Facebook</a>
                <a href="https://www.threads.net/intent/post?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>" rel="nofollow noopener noreferrer" target="_blank">Threads</a>
                <a href="https://toot.kytta.dev/?text=<?php the_title(); ?>%20por%20@brunopulis@mastodon.social%3A%0A%0A<?php the_permalink() ?>" rel="nofollow noopener noreferrer" target="_blank">Mastodon</a>
                <a href="mailto:?subject=Seu%20amigo%20compartilhou%20um%20artigo%20com%20você.&body=<?php the_title(); ?>%20<?php the_permalink(); ?>" rel="nofollow noopener noreferrer" target="_blank">E-mail</a>
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
  </article>
  <section class="comments">
    <details>
      <summary>Escrever comentário</summary>    
    <?php 
      if ( comments_open() || get_comments_number() ):
        comments_template();
      endif;
    ?>
    </details>
  </section>  
</div>

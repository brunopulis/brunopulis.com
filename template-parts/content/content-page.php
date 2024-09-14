<?php
/**
 * The template used for displaying page content.
 *
 * @package Odin
 * @since 2.2.0
 */
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>" >
	<div class="entry-content">
    <h1 class="entry-title"><?php the_title();  ?></h1>
		<?php
      
			the_content();
			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'odin' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
			) );
		?>
	</div>
</article>

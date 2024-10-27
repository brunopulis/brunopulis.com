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

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>" >
  <header class="entry-header" role="banner">
    <div class="row  mt-4">
      <div class="col-sm-12 col-lg-6">
        <?php odin_breadcrumbs(); ?>
        <h1 class="entry-title"><?php the_title(); ?></h1>
        <div class="post-single__date">
          <p>Escrito a mão por <span class="p-author h-card"><?php echo get_the_author(); ?></span></p>
          <time datetime="<?php echo get_the_date('Y-m-d g:i:s'); ?>" class="text-capitalize"><?php the_date( 'F j, Y' ) ?></time>
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

      <div class="col-sm-12 col-lg-6">
        <figure>
          <?php
            if ( has_post_thumbnail() ):
              the_post_thumbnail( 'letter-thumbnails', array( 'class' => 'img-fluid' ) );
            endif;
          ?>
        </figure>
      </div>
    </div>
  </header>
  
  <div class="row my-5">
    <div class="col-sm-8">
      <div class="entry-content" style="margin: 0;">
        <?php the_content(); ?>
      </div>
    </div>

    <div class="col-sm-4">
      <aside class="newsletter newsletter--square">
        <h2 class="newsletter__title">Assine a Pulis <span lang="en">Letters</span></h2>
        <div class="newsletter__intro">
          <p>
            Junte-se a mais de 300 assinantes e receba dicas sobre acessibilidade
            Obsidian e organização digital toda quinta-feira de manhã.
          </p>
        </div>
        <a href="https://pulisletters.substack.com" rel="external noopener noreferrer" target="_blank" class="button button--blue">Assinar a Pulis Letters</a>
      </aside>
    </div>
  </div>
</article>


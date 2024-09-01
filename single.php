<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Odin
 * @since 2.2.0
 */

get_header(); ?>


<main id="content">
  <div class="container">
    <div class="row">
      <?php
        while ( have_posts() ) : the_post();
          get_template_part( 'content' );
        endwhile;
      ?>

      <div class="col-xs-12 col-sm-12 col-md-9 mx-auto">
        <div class="reply-email">
          <h2>Responder por e-mail</h2>
          <p>Adoraria ouvir o que você achou. Mande um e-mail para <a href="mailto:hello@brunopulis.com?subject=Resposta%20ao%20artigo%20<?php the_title(); ?>"> hello@brunopulis.com</a>; não se esqueça de me informar se está satisfeito com o fato de seu comentário aparecer na Web!</p>
        </div>
      </div>
    </div>
  </div>

  <?php require_once('template-parts/newsletter.php'); ?>
</main>
<?php

get_footer();

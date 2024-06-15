<?php
/**
 * The sidebar containing the secondary widget area, displays on homepage, archives and posts.
 *
 * If no active widgets in this sidebar, it will shows Recent Posts, Archives and Tag Cloud widgets.
 *
 * @package Odin
 * @since 2.2.0
 */
?>

<aside class="sidebar" id="sidebar" role="complementary">
  <?php
		if ( ! dynamic_sidebar( 'main-sidebar' ) ) {
			the_widget( 'WP_Widget_Recent_Posts', array( 'number' => 10 ) );
			the_widget( 'WP_Widget_Archives', array( 'count' => 0, 'dropdown' => 1 ) );
			the_widget( 'WP_Widget_Tag_Cloud' );
		}
	?>

<article class="c-newsletter">
    <p class="c-newsletter__intro">
      <em>
        Junte-se a <strong>mais de 200 assinantes</strong> e receba dicas sobre acessibilidade, Obsidian e organização digital toda quinta-feira de manhã.
      </em>
    </p>
    <form class="c-newsletter__form" id="form-newsletter">
      <div class="c-newsletter-container">
        <div class="c-newsletter__form-field">
          <label for="email" class="visually-hidden">E-mail</label>
          <input type="email" id="email" name="fields[email]" required pattern="[^@\s]+@[^@\s]+\.[^@\s]+" placeholder="Seu melhor e-mail" class="form-control">
        </div>

        <div class="c-newsletter__form-field">
          <button class="c-newsletter__form-button btn btn-primary" type="submit">Assinar</button>
        </div>
      </div>
    </form>

    <div>
      <h3>Compartilhe o artigo</h3>

      <ul>
        <li>
          <a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php the_permalink(); ?>" rel="nofollow noopener" target="_blank">LinkedIn</a>
        </li>
        <li>
          <a href="https://twitter.com/intent/tweet?text=<?php the_title(); ?>&url=<?php the_permalink(); ?>" rel="nofollow noopener" target="_blank">X</a>
        </li>
        <li>
          <a href="<?php the_permalink(); ?>" onclick="event.preventDefault();window.open('mailto:?subject=' + decodeURIComponent('<?php the_title(); ?>').replace('&amp;', '%26') + '&amp;body=<?php the_permalink(); ?>', '_blank')" rel="nofollow noopener">
            E-mail
          </a>
        </li>
      </ul>
    </div>
  </article>
</aside>

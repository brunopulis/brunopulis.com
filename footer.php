<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main div element.
 *
 * @package Odin
 * @since 2.2.0
 */
?>

<footer class="site-footer">
  <div class="container">
    <div class="row">
      <?php if ( is_active_sidebar( 'footer-sidebar-1' ) ) : ?>
        <?php dynamic_sidebar( 'footer-sidebar-1' ); ?>
      <?php endif; ?>
    </div>
    
    <div class="row">
      <div class="footer-social">
        <a class="footer-social__title" href="/">Bruno Pulis</a>
        <ul class="footer-social__list">
          <li class="footer-social__item">
            <a class="footer-social__link" href="https://linkedin.com/in/pulis" rel="noopener noreferrer" target="_blank">
              <svg aria-hidden="true" class="footer-social__icon footer-social__icon--linkedin">
                <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/svgs/brands.svg#linkedin">
              </svg>
              <span class="visually-hidden">Linkedin</span>
            </a>
          </li>
          <li class="footer-social__item">
            <a class="footer-social__link" href="https://youtube.com/c/BrunoPulis" rel="noopener noreferrer" target="_blank">
              <svg aria-hidden="true" class="footer-social__icon footer-social__icon--youtube">
                <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/svgs/brands.svg#youtube">
              </svg>
              <span class="visually-hidden">Youtube</span>
            </a>
          </li>
          <li class="footer-social__item">
            <a class="footer-social__link" href="https://instagram.com/brunopulis" rel="noopener noreferrer" target="_blank">
              <svg aria-hidden="true" class="footer-social__icon footer-social__icon--instagram">
                <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/svgs/brands.svg#instagram">
              </svg>
              <span class="visually-hidden">Instagram</span>
            </a>
          </li>
          <li class="footer-social__item">
            <a class="footer-social__link" href="https://x.com/obrunopulis" rel="noopener noreferrer" target="_blank">
              <svg aria-hidden="true" class="footer-social__icon footer-social__icon--twitter">
                <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/svgs/brands.svg#x-twitter">
              </svg>
              <span class="visually-hidden">Twitter</span>
            </a>
          </li>
          <li class="footer-social__item">
            <a class="footer-social__link" href="<?php bloginfo('url') ?>/feed" rel="noopener noreferrer" target="_blank">
              <svg aria-hidden="true" class="footer-social__icon footer-social__icon--mastodon">
                <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/svgs/brands.svg#mastodon">
              </svg>
              <span class="visually-hidden">Mastodon</span>
            </a>
          </li>
          <li class="footer-social__item">
            <a class="footer-social__link" href="<?php bloginfo('url') ?>/feed" rel="noopener noreferrer" target="_blank">
              <svg aria-hidden="true" class="footer-social__icon footer-social__icon--rss">
                <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/svgs/solid.svg#square-rss">
              </svg>
              <span class="visually-hidden">RSS</span>
            </a>
          </li>
        </ul>
      </div>
    </div>

    <div class="row">
      <div class="footer-credits">
        <p>
          Feito com <span role="img" aria-label="amor">❤️</span> em BH, 2012 - 2024
          <span xmlns:cc="http://creativecommons.org/ns#" xmlns:dct="http://purl.org/dc/terms/">
            <a href="http://creativecommons.org/licenses/by-nc/4.0/?ref=chooser-v1" target="_blank" rel="license noopener noreferrer">CC BY-NC 4.0</a>
          </span>
        </p>
        <ul class="footer-credits__list">
          <li class="footer-credits__item"><a rel="external" class="footer-credits__link" href="https://a11y-webring.club/">a11y-webring.club</a></li>
          <li class="footer-credits__item"><a rel="external" class="footer-credits__link" referrerpolicy="strict-origin" href="https://a11y-webring.club/prev">site anterior</a></li>
          <li class="footer-credits__item"><a rel="external" class="footer-credits__link" referrerpolicy="strict-origin" href="https://a11y-webring.club/random">site aleatório</a></li>
          <li class="footer-credits__item"><a rel="external" class="footer-credits__link" referrerpolicy="strict-origin" href="https://a11y-webring.club/next">próximo website</a></li>
          <li class="footer-credits__item">
            <a href="https://notbyai.fyi" rel="external" target="_blank">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svgs/written-by-human.svg" alt="Escrito por humano não por IA" class="img-fluid" />
            </a>
          </li>
        </ul>
      </div>
  </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>

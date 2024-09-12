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
          <a class="footer-social__link" href="https://mastodon.social/@brunopulis" rel="me noopener noreferrer" target="_blank">
            <svg aria-hidden="true" class="footer-social__icon footer-social__icon--mastodon">
              <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/svgs/brands.svg#mastodon">
            </svg>
            <span class="visually-hidden">Mastodon</span>
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
        <p class="footer-other-links">Outros links do site:</p>

        <?php
          wp_nav_menu(
            array(
              'theme_location' => 'footer-menu',
              'depth'          => 2,
              'container'      => false,
              'menu_class'     => 'footer-credits__list',
              'fallback_cb'    => 'Odin_Bootstrap_Nav_Walker::fallback',
              'walker'         => new Odin_Bootstrap_Nav_Walker()
            )
          );
        ?>
        <!-- <ul id="menu-footer" class="footer-credits__list">
          <li class="footer-credits__item"><a href="#">Página Inicial</a></li>
          <li class="footer-credits__item"><a href="#">Portfólio</a></li>
          <li class="footer-credits__item"><a href="#">Serviços</a></li>
          <li class="footer-credits__item"><a href="#">Newsletter</a></li>
          <li class="footer-credits__item"><a href="#/">Blog</a></li>
          <li class="footer-credits__item"><a href="#">Sobre</a></li>
          <li class="footer-credits__item"><a href="#">Contato</a></li>
          <li class="footer-credits__item"><a href="#">Meu setup</a></li>
          <li class="footer-credits__item"><a href="#">Livro de visitas</a></li>
          <li class="footer-credits__item"><a href="#">Links</a></li>
        </ul> -->
        <a href="https://notbyai.fyi" rel="external" target="_blank">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svgs/written-by-human.svg" alt="Escrito por humano não por IA" class="img-fluid" width="131" height="42" />
        </a>
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
          <li class="footer-credits__item"><a rel="external" class="footer-credits__link" referrerpolicy="strict-origin" href="https://a11y-webring.club/prev">Site anterior</a></li>
          <li class="footer-credits__item"><a rel="external" class="footer-credits__link" referrerpolicy="strict-origin" href="https://a11y-webring.club/random">Site aleatório</a></li>
          <li class="footer-credits__item"><a rel="external" class="footer-credits__link" referrerpolicy="strict-origin" href="https://a11y-webring.club/next">Próximo website</a></li>
          <li class="footer-credits__item"><a class="footer-credits__link" href="<?php bloginfo('url'); ?>/declaracao-de-acessibilidade/">Declaração de Acessibilidade</a></li>
          <li class="footer-credits__item"><a class="footer-credits__link" href="<?php bloginfo('url'); ?>/politica-de-privacidade">Política de Privacidade</a></li>
        </ul>
      </div>
    </div>
  </div>
</footer>
<script src="https://tinylytics.app/embed/FziPycS5M-WzSzx6sBVm.js" defer></script>
<?php wp_footer(); ?>
</body>
</html>

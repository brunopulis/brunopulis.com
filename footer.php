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

<footer class="py-4 py-md-5">
  <div class="container py-4 py-md-5 px-4 px-md-3">
    <div class="row">
      <div class="col-md-3 mb-3">
        <a class="d-inline-flex align-items-center mb-2 text-decoration-none text-white" href="/">
          <span class="fs-5">Bruno Pulis</span>
        </a>
        <ul class="list-unstyled small">
          <li class="mb-2">2012 - <?php echo date('Y') ?> &copy Bruno Pulis.</li>
          <li class="mb-2">
            <a href="https://ko-fi.com/U7U4IDQTS" target="_blank">
              <img height='30'
                   style='border:0px;height:30px;'
                   src="<?php echo TEMPLATE_PATH;?>/assets/images/kofi-button.png"
                   class="support-me"
                   alt="Me apoie no Ko-fi"
                   loading="lazy" />
            </a>
          </li>
        </ul>
      </div>
      <div class="col-md-3 mb-3">
        <h2 class="footer__title">Links</h2>
        <ul class="list-unstyled">
          <li class="mb-2"><a href="<?php bloginfo('url') ?>/sitemap.xml">Mapa do site</a></li>
          <li class="mb-2"><a href="<?php bloginfo('url') ?>/acessibilidade">Acessibilidade</a></li>
          <li class="mb-2"><a href="<?php bloginfo('url') ?>/colophon">Meu setup</a></li>
          <li class="mb-2"><a href="<?php bloginfo('url') ?>/guestbook">Livro de Visitas</a></li>
        </ul>
      </div>
      <div class="col-md-3 mb-3">
        <h2 class="footer__title">a11y-webring.club</h2>
        <p class="small">Esse site é membro do <a rel="external" href="https://a11y-webring.club/">a11y-webring.club</a>.</p>
        <ul class="list-unstyled">
          <li class="mb-2">
            <a rel="external" referrerpolicy="strict-origin" href="https://a11y-webring.club/prev">
              <span class="rc-list-icon_icon">
                <svg fill="currentColor" class="emoji" aria-hidden="true" aria-label="" preserveAspectRatio="xMidYMid meet" height="1em" viewBox="0 0 100 166">
                  <path d="M4.9 94.7c-6.5-6.5-6.5-17 0-23.5L71.5 4.9C76.3.1 83.4-1.3 89.7 1.3 95.9 3.9 100 9.9 100 16.6v132.7c0 6.7-4.1 12.8-10.3 15.3-6.2 2.6-13.4 1.1-18.2-3.6L4.9 94.7z"></path>
                </svg>
              </span>
               Website anterior
            </a>
          </li>
          <li class="mb-2">
            <a rel="external" referrerpolicy="strict-origin" href="https://a11y-webring.club/random">
              <span class="rc-list-icon_icon">
                <svg fill="currentColor" class="emoji" aria-hidden="true" aria-label="" preserveAspectRatio="xMidYMid meet" height="1em" viewBox="0 0 100 87">
                  <path d="M78.9.5c2.3-1 5-.4 6.8 1.3l12.5 12.4c1.2 1.2 1.8 2.7 1.8 4.4s-.7 3.2-1.8 4.4L85.7 35.4a6.15 6.15 0 0 1-6.8 1.3c-2.3-1-3.9-3.2-3.9-5.7v-6.2h-6.2c-2 0-3.8.9-5 2.5l-8.3 11L47.6 28l6.1-8.1c3.5-4.7 9.1-7.5 15-7.5H75V6.2c0-2.5 1.5-4.8 3.9-5.7zM32 48.7 39.8 59l-6.1 8.1c-3.5 4.7-9.1 7.5-15 7.5H6.2c-3.5 0-6.2-2.8-6.2-6.2s2.8-6.2 6.2-6.2h12.5c2 0 3.8-.9 5-2.5l8.3-11zm53.6 36.5c-1.8 1.8-4.5 2.3-6.8 1.3S75 83.3 75 80.8v-6.2h-6.2c-5.9 0-11.5-2.8-15-7.5l-30-39.8c-1.2-1.6-3-2.5-5-2.5H6.2C2.7 24.8 0 22 0 18.6s2.8-6.2 6.2-6.2h12.5c5.9 0 11.5 2.8 15 7.5l30 39.8c1.2 1.6 3 2.5 5 2.5H75V56c0-2.5 1.5-4.8 3.9-5.7s5-.4 6.8 1.3L98.2 64c1.2 1.2 1.8 2.7 1.8 4.4s-.7 3.2-1.8 4.4L85.6 85.2z"></path>
                </svg>
              </span>
              Website aleatório
            </a>
          </li>
          <li class="mb-2"><a rel="external" referrerpolicy="strict-origin" href="https://a11y-webring.club/next">
            <span class="rc-list-icon_icon"><svg fill="currentColor" class="emoji" aria-hidden="true" aria-label="" preserveAspectRatio="xMidYMid meet" height="1em" viewBox="0 0 100 166"><path d="M95.1 71.3c6.5 6.5 6.5 17 0 23.5l-66.6 66.4c-4.8 4.8-11.9 6.2-18.2 3.6C4.1 162.1 0 156.1 0 149.4V16.6C0 9.9 4.1 3.9 10.3 1.3S23.7.2 28.5 4.9l66.6 66.4z"></path></svg></span> Próximo website</a></li>
        </ul>
      </div>
      <div class="col-md-3 mb-3">
        <h2 class="footer__title">Redes sociais</h2>
        <ul class="list-unstyled">
          <li class="mb-2"><a href="https://x.com/obrunopulis" rel="noopener noreferrer" target="_blank" aria-label="Twitter: link externo">Twitter</a></li>
          <li class="mb-2"><a href="https://linkedin.com/in/pulis" rel="noopener noreferrer" target="_blank" aria-label="LinkedIn: link externo">LinkedIn</a></li>
          <li class="mb-2"><a href="https://instagram.com/brunopulis" rel="noopener noreferrer" target="_blank" aria-label="Instagram: link externo">Instagram</a></li>
          <li class="mb-2"><a  href="https://youtube.com/c/BrunoPulis" rel="noopener noreferrer" target="_blank" aria-label="YouTube: link externo">YouTube</a></li>
          <li class="mb-2"><a href="<?php bloginfo('url') ?>/feed" rel="noopener noreferrer" target="_blank" aria-label="RSS: link externo">RSS</a></li>
        </ul>
      </div>
    </div>

    <div class="row">
      <p class="small text-center">
        Feito com <span role="img" aria-label="amor">❤️</span> em BH, usando
        <a href="http://wordpress.org/" rel="nofollow" target="_blank">WordPress</a>.
      </p>
    </div>
  </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>

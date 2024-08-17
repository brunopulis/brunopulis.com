<?php if( is_front_page() ): ?>
  <section class="c-hero">
    <div class="container">
      <div class="row d-flex align-items-center">
        <div class="col-xs-12 col-lg-6">
          <h1 class="c-hero__title">
            <span>Bruno Pulis</span>
          </h1>
          <p class="c-hero__lead p-note">
            Cidadão da web, Front-end Developer e Consultor de Acessibilidade.
            Tenho 15 anos de experiência em desenvolvimento web.
            Ajudo pessoas a construir, testar e prototipar interfaces acessíveis.
          </p>

          <a href="<?php bloginfo('url'); ?>/servicos" class="c-hero__link">Conheça meus serviços</a>
        </div>

        <div class="col-xs-12 col-lg-6">
          <figure class="c-hero__image">
            <img class="u-photo" src="<?php echo TEMPLATE_PATH; ?>/assets/images/profile.webp" alt="" width="400" height="400">
          </figure>
        </div>
      </div>
    </div>
  </section>
<?php endif; ?>

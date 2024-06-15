<?php if( is_front_page() ): ?>
  <section class="c-hero">
    <div class="container">
      <div class="row g-0">
        <div class="col-xs-12 col-lg-6">
          <h1 class="fw-bold">
            <span class="me" rel="me">Bruno Pulis</span> <span class="d-none d-md-block" aria-hidden="true">👋</span>
          </h1>
          <p class="lead">Front-end Developer, Accessibility Consultant</p>
          <p class="lead">
            <span lang="en">Front-end</span> com 15 anos de experiência,
            Ajudo pessoas a <strong>construir, testar e prototipar</strong> interfaces acessíveis.
          </p>

          <a href="<?php bloginfo('url'); ?>/servicos">Conheça meus serviços</a>
        </div>

        <div class="col-xs-12 col-lg-6 d-none d-md-block">
          <img src="<?php echo TEMPLATE_PATH; ?>/assets/images/profile.png" loading="lazy" alt="">
        </div>
      </div>
    </div>
  </section>
<?php endif; ?>

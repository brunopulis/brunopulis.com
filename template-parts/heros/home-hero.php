<?php if( is_front_page() ): ?>
<section class="u-full-width hero">
	<div class="container col-xxl-12 py-5">
		<div class="row align-items-center g-5">
      <div class="col-lg-6">
        <h1 class="c-hero__title">
          <span class="me" rel="me">
            Bruno Pulis
          </span>
        </h1>
        <p class="c-hero__lead">
          Referência brasileira em acessibilidade digital, com mais de 15 anos de experiência, 
          ofereço <strong>consultoria estratégica</strong> para criação de <strong>sites acessíveis</strong>, documentos e testes. 
        </p>

        <a href="<?php bloginfo('url'); ?>/servicos" class="c-hero__link">Conheça meus serviços</a>
			</div>
					
      <div class="col-lg-6">
        <figure class="c-hero__image">
          <img src="<?php echo TEMPLATE_PATH; ?>/assets/images/profile.png" loading="lazy" alt="">
        </figure>
      </div>
		</div>
	</div>
</section>
<?php endif; ?>

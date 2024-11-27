<?php if( is_front_page() ): ?>
<section class="hero">
	<div class="container col-xxl-12 py-5">
		<div class="row align-items-center g-5">
      <div class="col-lg-6">
        <h1 class="c-hero__title">
          Construo sites para pequenos e médios empreendedores
        </h1>
        <p class="c-hero__lead">
          Ajudo empreendedores a terem presença digital com sites <strong>rápidos, acessíveis e práticos</strong>.
        </p>

        <a href="<?php bloginfo('url'); ?>/servicos" class="button button--blue">Conheça meus serviços</a>
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

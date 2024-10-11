<section  class="section" aria-labelledby="services-title">
  <div class="container">
    <div class="row">
      <div class="d-flex align-items-center justify-content-between">
        <h2 class="section-title" id="services-title">Meus serviços</h2>
        <a href="<?php bloginfo( 'url' ) ?>/servicos" class="button">veja todos os serviços</a>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <article class="home-blog__item col-lg-4">
        <div class="card">
          <div class="card-body">
            <h3 class="card-title">Desenvolvimento web</h3>
            <div class="card-text mt-3">
              <p>Criação de websites acessíveis, desenvolvidos com foco na usabilidade para todos os usuários, incluindo pessoas com deficiência, garantindo uma presença online inclusiva.</p>
            </div>

            <a href="<?php the_permalink(); ?>" class="card-link">Leia o texto <span class="visually-hidden">sobre: <?php the_title();?></span></a>
          </div>
        </div>
      </article>

      <article class="home-blog__item col-lg-4">
        <div class="card">
          <div class="card-body">
            <h3 class="card-title">Consultorias e Mentorias</h3>
            <div class="card-text mt-3">
              <p>Orientação especializada para implementar políticas, práticas e padrões de acessibilidade, garantindo que seu negócio esteja alinhado com as normas e boas práticas.</p>
            </div>

            <a href="<?php the_permalink(); ?>" class="card-link">Leia o texto <span class="visually-hidden">sobre: <?php the_title();?></span></a>
          </div>
        </div>
      </article>

      <article class="home-blog__item col-lg-4">
        <div class="card">
          <div class="card-body">
            <h3 class="card-title">Palestras</h3>
            <div class="card-text mt-3">
              <p>Palestras inspiradoras e educativas sobre a importância da acessibilidade, sensibilizando seu público para a inclusão e o impacto positivo de práticas acessíveis..</p>
            </div>

            <a href="<?php the_permalink(); ?>" class="card-link">Leia o texto <span class="visually-hidden">sobre: <?php the_title();?></span></a>
          </div>
        </div>
      </article>
    </div>
  </div>
</section>

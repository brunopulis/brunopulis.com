<?php
/**
 * Template Name: Sites
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that other
 * 'pages' on your WordPress site will use a different template.
 *
 * @package Bruno_Pulis
 * @since 2.2.0
 */

get_header(); ?>

<main id="content">
  <section class="hero">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <h1>
            <?php echo get_field('primary_headline'); ?>
          </h1>
          <div class="c-hero__lead">
            <?php echo get_field('primary_headline_copiar'); ?>
          </div>
          <a href="<?php echo get_field('page'); ?>" class="button button--blue">
            <?php echo get_field( 'button_cta_label' ); ?>
          </a>
        </div>
        <div class="col-lg-6">
          <figure class="c-hero__image">
            <?php the_post_thumbnail(); ?>
          </figure>
        </div>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <figure>
            <img src="<?php echo TEMPLATE_PATH; ?>/assets/images/post-it.webp" class="img-fluid" loading="lazy" alt="">
          </figure>
        </div>
        <div class="col-lg-6">
          <h2>Tenha um site estratégico</h2>
          <div class="c-hero__lead">
            <p>Não basta ter um site bonito, ele precisa funcionar para seu cliente. Conseguimos isso através de um bom planejamento e uma boa execução.</p>
          </div>
          <a href="<?php echo get_field('page'); ?>" class="button button--blue">
            Quero um site estratégico
          </a>
        </div>
      </div>
    </div>
  </section>

  <section  class="section" aria-labelledby="portfolio-title">
    <header class="section__header" role="banner">
      <div class="container">
        <div class="section__wrap">
          <h2 class="section-title" id="portfolio-title">Últimos trabalhos</h2>
          <a href="<?php bloginfo( 'url' ) ?>/portfolio" class="button button--grey">todos projetos</a>
        </div>
      </div>
    </header>

    <div class="container">
      <div class="row">
        <?php
          $args = array(
            'post_type' => 'portfolio',
            'posts_per_page' => 6,
            'order' => 'DESC'
          );

          $project = new WP_Query( $args );

          if ( $project->have_posts() ) :
            while ( $project->have_posts() ) : $project->the_post();
        ?>
          <article class="home-blog__item col-lg-6">
            <div class="row">
              <div class="col-lg-6">
                <a href="<?php the_permalink() ?>" aria-label="<?php the_title(); ?>">
                  <?php if ( has_post_thumbnail() ): ?>
                    <?php the_post_thumbnail(); ?>
                  <?php endif; ?>
                </a>
              </div>
              <div class="col-lg-6">
                <h3><?php the_title(); ?></h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam dignissimos, error perspiciatis vero harum at accusamus mollitia tenetur suscipit. Dolores dolorum ipsa expedita nesciunt velit repudiandae optio error architecto corrupti?</p>
              </div>
            </div>
          </article>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
        <?php endif; ?>
      </div>
    </div>
  </section>

  <section  class="section section--blue" aria-labelledby="advantages-title">
    <header class="section__header" role="banner">
      <div class="container">
        <span class="tagline tagline--orange">Tudo o que vem no seu site</span>
        <h2 class="section-title" id="advantages-title">Vantagens</h2>
      </div>
    </header>

    <div class="container">
      <ul class="list-grid">
        <li>
          <article class="card h-100">
            <div class="card-body">              
              <h3 class="card-title">
                <svg aria-hidden="true" class="service__icon" width="24" height="24">
                  <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/svgs/brands.svg#accessible-icon"></use>
                </svg>
                Site acessível
              </h3>
              <div class="card-text mt-3">
                <p>
                  Seu site cumpre as normas da WCAG 2.1 AA, garantido um maior alcance da sua marca para todas as pessoas.
                </p>       
              </div>      
            </div>
          </article>
        </li>
        <li>
          <article class="card h-100">
            <div class="card-body">
              <h3 class="card-title">
                <svg aria-hidden="true" class="service__icon" width="24" height="24">
                  <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/svgs/solid.svg#pen-ruler"></use>
                </svg>
                Layout personalizado
              </h3>
              <div class="card-text mt-3">
                <p>52% das pessoas estão visualizando sites em um telefone. Eu sei que é mais do que apenas importante, então seu padrão é que cada página é responsiva.</p>       
              </div>      
            </div>
          </article>
        </li>
        <li>
          <article class="card h-100">
            <div class="card-body">
              <h3 class="card-title">
                <svg aria-hidden="true" class="service__icon" width="24" height="24">
                  <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/svgs/regular.svg#window-restore"></use>
                </svg>
                Otimizado para celulares
              </h3>
              <div class="card-text mt-3">
                <p>52% das pessoas estão visualizando sites em um telefone. Eu sei que é mais do que apenas importante, então seu padrão é que cada página é responsiva.</p>       
              </div>      
            </div>
          </article>
        </li>
        <li>
          <article class="card h-100">
            <div class="card-body">
              <h3 class="card-title">
                <svg aria-hidden="true" class="service__icon" width="24" height="24">
                  <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/svgs/solid.svg#gauge"></use>
                </svg>
                Velocidade Otimizada
              </h3>
              <div class="card-text mt-3">
                <p>52% das pessoas estão visualizando sites em um telefone. Eu sei que é mais do que apenas importante, então seu padrão é que cada página é responsiva.</p>       
              </div>      
            </div>
          </article>
        </li>
        <li>
          <article class="card h-100">
            <div class="card-body">
              <h3 class="card-title">
                <svg aria-hidden="true" class="service__icon" width="24" height="24">
                  <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/svgs/brands.svg#google"></use>
                </svg>
                Otimizado para o Google
              </h3>
              <div class="card-text mt-3">
                <p>52% das pessoas estão visualizando sites em um telefone. Eu sei que é mais do que apenas importante, então seu padrão é que cada página é responsiva.</p>       
              </div>      
            </div>
          </article>
        </li>
        <li>
          <article class="card h-100">
            <div class="card-body">
              <h3 class="card-title">
                <svg aria-hidden="true" class="service__icon" width="24" height="24">
                  <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/svgs/solid.svg#headset"></use>
                </svg>
                Suporte em todo projeto
              </h3>
              <div class="card-text mt-3">
                <p>52% das pessoas estão visualizando sites em um telefone. Eu sei que é mais do que apenas importante, então seu padrão é que cada página é responsiva.</p>       
              </div>      
            </div>
          </article>
        </li>
      </ul>
    </div>
  </section>

  <section class="section testimonials" aria-labelledby="testimonials-title">
    <header class="section__header" role="banner">
      <div class="container">
        <div class="section__wrap">
          <h2 class="section-title" id="testimonials-title">Confira quem aprova!</h2>
          <a href="<?php bloginfo( 'url' ) ?>/depoimentos" class="button button--grey">todos depoimentos</a>
        </div>
        <p>Veja como posso te ajudar.</p>
      </div>
    </header>

    <div class="container mt-5 mb-5">
      <div class="row g-2">
        <?php
          $args = array(
            'post_type'      => 'depoiments',
            'posts_per_page' => 3,
            'order'          => 'DESC'
          );

          $depoiments = new WP_Query( $args );

          if ( $depoiments->have_posts() ) :
            while ( $depoiments->have_posts() ) : $depoiments->the_post();
              $name_client = get_field( 'depoiments_name' );
              $job_title   = get_field( 'depoiments_job_title' );
        ?>
          <div class="col-md-4">
            <article class="testimonial__item">
              <div class="testimonial__rating" style="margin-bottom: 30px;">
                <?php for ($i=0; $i < 5; $i++): ?>
                  <svg aria-hidden="true" class="" width="20" height="18"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/svgs/regular.svg#star"></svg>
                <?php endfor; ?>
              </div>
              <blockquote class="testimonial__quote">
                <p><?php the_content(); ?></p>
              </blockquote>

              <div class="testimonial__container">
                <div class="d-flex">
                  <?php if ( has_post_thumbnail() ):  ?>
                    <div class="testimonial__client-image">
                      <img src="http://lorempixel.com.br/56/56" class="rounded-circle" width="56" height="56">
                    </div>
                  <?php endif; ?>

                  <div class="testimonial__client">
                    <p><?php echo $name_client; ?></p>
                    <p><?php echo $job_title; ?></p>
                  </div>
                  <?php if ( has_post_thumbnail() ):  ?>
                  <img src="http://lorempixel.com.br/120/48" width="120" height="48">
                  <?php endif; ?>
                </div>
              </div>
            </article>
          </div>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
        <?php endif; ?>
      </div>
    </div>
  </section>

  <section class="section section--grey" aria-labelledby="proccess-title">
    <header class="section__header" role="banner">
      <div class="container">
        <span class="tagline tagline--blue">Etapas para fazer um site comigo</span>
        <h2 class="section-title" id="proccess-title">Como é o processo?</h2>
      </div>
    </header>

    <div class="container mt-5 mb-5">
      <div class="row g-2">
        <div class="col-md-4">
          <article class="card h-100">
            <div class="card-body"> 
              <h3 class="card-title">
                <svg aria-hidden="true" class="service__icon" width="24" height="24">
                  <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/svgs/solid.svg#comments"></use>
                </svg>
                Discussão do website
              </h3>
              <div class="card-text mt-3">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus nesciunt odit, saepe error exercitationem adipisci fuga molestiae ducimus dolores labore debitis inventore, quae quos deleniti dolorum, iusto cupiditate. Asperiores, laudantium!</p>       
              </div>      
            </div>
          </article>
        </div>
        <div class="col-md-4">
          <article class="card h-100">
            <div class="card-body">
              <h3 class="card-title">
                <svg aria-hidden="true" class="service__icon" width="24" height="24">
                  <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/svgs/solid.svg#file"></use>
                </svg>
                Me envie o conteúdo
              </h3>
              <div class="card-text mt-3">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus nesciunt odit, saepe error exercitationem adipisci fuga molestiae ducimus dolores labore debitis inventore, quae quos deleniti dolorum, iusto cupiditate. Asperiores, laudantium!</p>
              </div>
            </div>
          </article>
        </div>
        <div class="col-md-4">
          <article class="card h-100">
            <div class="card-body">
              <h3 class="card-title">
                <svg aria-hidden="true" class="service__icon" width="24" height="24">
                  <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/svgs/regular.svg#handshake"></use>
                </svg>
                Revisão e lançamento
              </h3>
              <div class="card-text mt-3">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus nesciunt odit, saepe error exercitationem adipisci fuga molestiae ducimus dolores labore debitis inventore, quae quos deleniti dolorum, iusto cupiditate. Asperiores, laudantium!</p>
              </div>
            </div>
          </article>
        </div>
      </div>
    </div>
  </section>

  <section class="section" aria-labelledby="faq-title">
    <header class="section__header text-center" role="banner">
      <h2 class="section-title" id="faq-title">Perguntas frequentes</h2>
    </header>

    <div class="container mt-5 mb-5">
      <div class="row g-2">
        <div class="col-md-8 mx-auto">
          <div class="accordion" id="accordionFAQ">
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                  Quanto tempo vai demorar para fazer meu site?
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFAQ">
                <div class="accordion-body">
                  <p>Claro que isso depende do tamanho do seu site. Um site padrão de 5 páginas geralmente leva 2 semanas, e um site maior de 15 páginas pode levar 3-5 semanas. Posso trabalhar com você se você tiver um prazo específico que precisa ser cumprido.</p>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  Será difícil fazer minhas próprias atualizações/alterações?
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFAQ">
                <div class="accordion-body">
                  <p>Não! Eu faço todos os meus sites com o cliente em mente, tornando o site fácil e intuitivo para editar, atualizar e adicionar conteúdo. Se você não está confiante em suas capacidades técnicas, podemos sentar-se para um tutorial 1-on-1.</p>
                  <p>Além disso, se você mesmo quiser fazer atualizações, posso fazê-lo por você na minha taxa horária de R$80,00.</p>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                  O que acontece quando eu recebo meu site? Isso requer manutenção?
                </button>
              </h2>
              <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionFAQ">
                <div class="accordion-body">
                  <p>Seu site só precisa de alguns minutos de manutenção por mês. É comum que as pessoas até deixem seu site por 5 meses e tudo bem. Tudo o que seu site precisa é de atualizações de plugins e frameworks para mantê-lo funcionando com segurança, já que eu usei o WordPress para criar sites. I’ve também escreveu um artigo sobre manutenção de sites para ajudar os clientes.</p>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                  Quais são as condições de pagamento?
                </button>
              </h2>
              <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionFAQ">
                <div class="accordion-body">
                  <p>Seu site só precisa de alguns minutos de manutenção por mês. É comum que as pessoas até deixem seu site por 5 meses e tudo bem. Tudo o que seu site precisa é de atualizações de plugins e frameworks para mantê-lo funcionando com segurança, já que eu usei o WordPress para criar sites. I’ve também escreveu um artigo sobre manutenção de sites para ajudar os clientes.</p>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                  O que eu preciso para começar a criar um site?
                </button>
              </h2>
              <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionFAQ">
                <div class="accordion-body">
                  <p>Você precisará de algumas coisas para começar:</p>
                  
                  <ul>
                    <li>Um logotipo</li>
                    <li>Todo ou a maior parte do conteúdo do site (texto e imagens)</li>
                    <li>Uma ideia de quais cores você quer</li>
                  </ul>

                  <p>Para lançar o site, você precisará de:</p>
                  <ul>
                    <li>Um domínio (R$40 BRL por ano)</li>
                    <li>Hospedagem de Sites (R$ 10-60 por mês)</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                  Você trabalha sozinho?
                </button>
              </h2>
              <div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordionFAQ">
                <div class="accordion-body">
                  <p>Sim, trabalho sozinho. Eu faço todo o trabalho do site sozinho, não terceirizo nada. Eu faço parceria com um designer de logotipo (ela projetou meu logotipo!) quem eu sempre recomendo, bem como um copywriter se você precisar de ajuda para escrever conteúdo para o seu site. Se você está interessado em algum desses serviços, deixe-me saber!</p>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                  Qual é o processo de construção do site?
                </button>
              </h2>
              <div id="collapseEight" class="accordion-collapse collapse" data-bs-parent="#accordionFAQ">
                <div class="accordion-body">
                  <ol>
                    <li>Nós nos encontramos através de uma chamada de vídeo, ou um telefonema para discutir o seu site e o que você está procurando.</li>
                    <li>Eu construo o site com seu conteúdo com base em suas necessidades.</li>
                    <li>Eu lhe envio um link privado para o seu novo site construído para fora, e você pode enviar quaisquer revisões ou alterações que você quer que eu faça. Existem 2 conjuntos de revisões.</li>
                    <li>Uma vez aperfeiçoado, eu lanço o site!</li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php require_once('template-parts/components/newsletter.php'); ?>
</main>
<?php
get_footer();

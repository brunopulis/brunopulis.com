
<?php
/**
 *
 * The template used for displaying page content.
 *
 * @package Odin
 * @since 2.2.0
 */
?>

<section class="container" id="blog" aria-labelledby="blog-section">
  <div class="row">
    <div class="col-md-8 mx-auto">
      <div class="headline">
        <h2><?php the_title(); ?></h2>
      </div>

      <?php the_content(); ?>

      <article class="help-item">
        <header class="help-item__header">
          <h3 class="help-item__title">Auditoria de acessibilidade</h3>
          <p class="help-item__desc">
            Uma análise minuciosa e profissional de seu espaço digital, identificando
            barreiras e propondo soluções para torná-lo acessível a todos.
          </p>
          <p>Sigo as diretrizes internacionais e padrões nacionais.</p>
        </header>
      </article>

      <article class="help-item">
        <header class="help-item__header">
          <h3 class="help-item__title">Consultoria e Mentorias</h3>
          <p class="help-item__desc">
            Você tem um produto pronto e quer que eu me junte à sua equipe
            para ajudar a aprimorar a experiência do usuário, a acessibilidade ou o front-end?
          </p>
          <p>Ou você quer que aprender acessibilidade de maneira prática e descomplicada?</p>
          <p><a href="#" class="button button--wheat">Agendar horário</a></p>
        </header>
      </article>

      <article class="help-item">
        <header class="help-item__header">
          <h3 class="help-item__title">Treinamentos</h3>
          <p class="help-item__desc">
            Capacitação customizada para sua equipe, abordando aspectos práticos e
            teóricos da acessibilidade, promovendo uma cultura inclusiva e o conhecimento de ferramentas.
          </p>
        </header>
        <ul class="help-item__list">
          <li class="help-item__list__item">Treinamentos para QA's;</li>
          <li class="help-item__list__item">Treinamento para pessoas desenvolvedoras;</li>
          <li class="help-item__list__item">Treinamento para equipes de design.</li>
        </ul>
      </article>

      <article class="help-item">
        <header class="help-item__header">
          <h3 class="help-item__title">Palestras</h3>
          <p class="help-item__desc">
          Palestras inspiradoras e educativas sobre a importância da acessibilidade, sensibilizando seu público para a inclusão e o impacto positivo de práticas acessíveis.
          </p>
        </header>
      </article>

      <article class="help-item">
        <header class="help-item__header">
          <h3 class="help-item__title" lang="en">Front-end Web Development</h3>
          <p class="help-item__desc">
            Criação de websites acessíveis, desenvolvidos com foco na usabilidade para todos os usuários, incluindo pessoas com deficiência.
          </p>
        </header>

        <ol class="help-item__list">
          <li>Implementação de .PSD/.Skecth/Figma para páginas interativas;</li>
          <li>Web Design Responsivo;</li>
          <li>Correção de problemas com semântica,acessibilidade e CSS;</li>
          <li>Web Performance</li>
          <li>Arquitetura CSS</li>
          <li>Style guides e Patterns libraries</li>
        </ol>
      </article>

      <article class="help-item">
        <header class="help-item__header">
          <h3 class="help-item__title" lang="en">Organização Digital</h3>
          <p class="help-item__desc">
          Estratégias e ferramentas para organizar sua presença digital de forma acessível e eficiente, facilitando a navegação e o acesso a informações para todos os visitantes.</p>
        </header>
      </article>

      <p>Se estiver interessado em trabalhar comigo, sinta-se à vontade para enviar um e-mail para hello[at]brunopulis.com</p>
    </div>
  </div>
</section>

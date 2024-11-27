<?php
/**
 * Template Name: Projetos
 *
 * The template for displaying Projetos page.
 *
 * @package Odin
 * @since 2.2.0
 */
get_header(); ?>

<main id="content">
  <section class="services" id="blog" aria-labelledby="blog-section">
    <div class="container">
      <?php
        // ACF variables
        $project_url        = get_field( 'portfolio_project_url' );
        $project_date       = get_field( 'portfolio_project_date' );
        $project_category   = get_field( 'project_category' );
        $project_problem    = get_field( 'project_problem' );
        $project_solution   = get_field( 'project_solution' );
        $project_steps      = get_field( 'project_next_steps' );
        $project_conclusion = get_field( 'project_conclusion' );

        $date_object = DateTime::createFromFormat('d/m/Y', $project_date);
        $project_year = $date_object ? $date_object->format('Y') : '';

      ?>
      <div class="row">
        <div class="col-lg-6">
          <?php odin_breadcrumbs(); ?>
          <h1><?php the_title(); ?></h1>
          
          <div>
            <p><?php the_excerpt(); ?></p>
            <p>Data: <?php echo esc_html($project_year); ?></p>
            <p>Link: <a href="<?php echo $project_url['url']; ?>"><?php echo $project_url['url']; ?></a></p>
          </div>
          
          <?php
            $project_categories = get_the_terms(get_the_ID(), 'portfolio_attributes');
            if ($project_categories && !is_wp_error($project_categories)) :
          ?>
            <ul class="list">
              <?php foreach ($project_categories as $category) : ?>
                <li class="list__item">
                  <span class="list-badge list-badge--grey"><?php echo esc_html($category->name); ?></span>
                </li>
              <?php endforeach; ?>
            </ul>
          <?php endif; ?>
      </div>

      <article style="padding: 64px 0;">
        <div class="row">
          <div class="col-lg-6">
            <h2>Sobre o cliente</h2>

            <?php the_content(); ?>
          </div>
          <div class="col-lg-6">
            <?php the_post_thumbnail(); ?>
          </div>
        </div>
      </article>

      <article style="padding: 64px 0;">
        <div class="row">
          <div class="col-lg-6">
            <h2>O problema</h2>

            <?php echo $project_problem; ?>
          </div>
          <div class="col-lg-6">
            <h2>A solução</h2>
            <?php echo $project_solution; ?>
          </div>
        </div>
      </article>
    </div>
  </section>
  <?php require_once('template-parts/components/newsletter.php'); ?>
</main>
<?php
get_footer();

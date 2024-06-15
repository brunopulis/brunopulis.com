<?php
/**
 * The template for displaying Archive pages.
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each specific one. For example, Twenty Thirteen
 * already has tag.php for Tag archives, category.php for Category archives,
 * and author.php for Author archives.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Odin
 * @since 2.2.0
 */

 // Todo: Finish style

get_header(); ?>

<main id="content">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-8">
        <header class="page-header">
          <h1>Edições anteriores da Pulis Letters</h1>
          <p class="lead">Insights valiosos sobre acessibilidade, Obsidian e organização digital.</p>
        </header>

        <?php
          $args = array(
            'post_type'      => 'letters',
            'posts_per_page' => 12,
            'order'          => 'DESC'
          );

          $letters = new WP_Query( $args );

          if ( $letters->have_posts() ) :
            while ( $letters->have_posts() ) : $letters->the_post();
        ?>
          <article class="c-card--episode">
            <a href="<?php the_permalink(); ?>">
              <div class="c-card__episodies">
                <div class="c-card__hashtag">#</div>
                <div class="c-card__episode--number">
                  <?php
                    $episodie = get_field( 'letters_edition' );

                    echo $episodie;
                  ?>
                </div>
              </div>
            </a>
            <div>
              <h3 class="c-card__title entry-title blog__title">
                <a href="<?php the_permalink(); ?>" rel="permalink" class="c-card__link">
                  <?php the_title(); ?>
                </a>
              </h3>
              <p class="post-date">
                <time class="time" datetime="<?php echo get_the_date('Y-m-d'); ?>">
                  <?php echo get_the_date('j F, Y'); ?>
                </time>
              </p>
            </div>
          </article>
        <?php endwhile; ?>

        <?php wp_reset_postdata(); ?>
        <?php odin_paging_nav(); ?>
        <?php endif; ?>
      </div>

      <div class="col-md-4">
        <article class="c-newsletter">
          <p class="c-newsletter__intro">
            <em>
              Junte-se a <strong>mais de 200 assinantes</strong> e receba dicas sobre acessibilidade, Obsidian e organização digital toda quinta-feira de manhã.
            </em>
          </p>
          <form class="c-newsletter__form" id="form-newsletter">
            <div class="c-newsletter-container">
              <div class="c-newsletter__form-field">
                <label for="email" class="visually-hidden">E-mail</label>
                <input type="email" id="email" name="fields[email]" required pattern="[^@\s]+@[^@\s]+\.[^@\s]+" placeholder="Seu melhor e-mail" class="form-control">
              </div>

              <div class="c-newsletter__form-field">
                <button class="c-newsletter__form-button btn btn-primary" type="submit">Assinar</button>
              </div>
            </div>
          </form>
        </article>
      </div>
    </div>
  </div>
</main><!-- #main -->

<?php
get_footer();

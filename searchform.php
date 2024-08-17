<?php
/**
 * The template for displaying Search Form.
 *
 * @package Odin
 * @since 2.2.0
 */
?>

<form method="get" class="c-search" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
  <fieldset>
    <legend>Procure nos meus artigos</legend>

    <div class="row g-3">
      <div class="col-sm-7">
        <input
          type="search"
          name="s"
          class="form-control form-control-l"
          id="s"
          value="<?php echo get_search_query(); ?>"
          placeholder="Pesquise nesse site" />
        </span><!-- /input-group-btn -->
      </div><!-- /input-group -->
      <div class="col-sm-5">
        <button type="submit" class="btn btn-primary">Pesquisar</button>
      </div>
    </div>
  </fieldset>
</form>


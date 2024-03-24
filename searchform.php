<?php
/**
 * The template for displaying Search Form.
 *
 * @package Odin
 * @since 2.2.0
 */
?>

<p><strong>Procurando algo especifíco?</strong> Procure entre meus artigos, guias e ferramentas.</p>
<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
  <div class="grid">
    <input
      type="search"
      name="s"
      id="s"
      value="<?php echo get_search_query(); ?>"
      placeholder="Pesquise nesse site" />
    </span><!-- /input-group-btn -->
    </div><!-- /input-group -->
    <button>Pesquisar</button>
</form>


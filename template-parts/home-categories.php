<section class="categories">
  <div class="headline">
    <h2 class="display-4">Explore as categorias</h2>
  </div>

  <div class="container">
    <ul class="cluster list-unstyled">
      <?php
        $cat_args = array(
          'orderby' => 'name',
          'order' => 'ASC'
        );

        $categories = get_categories($cat_args);
        foreach($categories as $category):
          $args = array(
            'category__in' => array($category->term_id),
            'caller_get_posts'=> 1
          );

          $posts = get_posts($args);
          if ($posts):
        ?>
          <li>
            <a href="<?php echo get_category_link( $category->term_id ); ?>" class="pill"><?php echo $category->name; ?></a>
          </li>

      <?php
          endif; // if ($posts
        endforeach;
      ?>
    </ul>
  </div>
</section>

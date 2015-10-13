<div class="menu">
  <?php

  $nav_menu = wp_nav_menu(
    array(
      'container' => 'nav',
      'container_class' => 'main-menu',
      'items_wrap' => '<ul class="%2$s">%3$s</ul>',
      'theme_location' => 'main-menu',
      'fallback_cb' => '__return_false',
    )
  ); ?>

</div>

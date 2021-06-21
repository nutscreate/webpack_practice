  <?php
    echo '<nav id="js-header-nav" class="l-header-nav-fixed"><div class="l-header-nav-fixed__inner"><p class="l-header-nav-fixed__logo"><a href="' . esc_url(home_url()) . '">' . esc_html(get_bloginfo($name)) . '</p>';
    $defaults = array(
    'menu'            => $nav_menu,
    'menu_class'      => 'l-header-nav-fixed__list',
    'menu_id'         => '',
    'container'       => false ,
    'container_class' => '',
    'container_id'    => '',
    'fallback_cb'     => 'wp_page_menu',
    'before'          => '',
    'after'           => '',
    'link_before'     => '',
    'link_after'      => '',
    'echo'            => true,
    'depth'           => 0,
    //'walker'          => new Walker_Nav_Menu_Test(),
    'theme_location'  => 'global_nav',
    'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
    );
    wp_nav_menu( $defaults );
    echo '</div></nav>';
  ?>

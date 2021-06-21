<input type="checkbox" id="p-hamburger-menu__check"/>
<label for="p-hamburger-menu__check" class="p-hamburger-menu__open" id="js-p-hamburger-menu">
  <span class="p-hamburger-menu__line-menu"></span>
</label>

<!-- <label for="p-hamburger-menu__check" class="p-hamburger-menu__back"></label> -->

<aside class="p-hamburger-menu__inner">
  <?php
  echo '<nav>';
  $defaults = array(
  'menu'            => $nav_menu,
  'menu_class'      => 'p-hamburger-menu__cont',
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
  'theme_location'  => 'hamburger_nav',
  'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
  );
  wp_nav_menu( $defaults );
  echo '</nav>';
  ?>
</aside>

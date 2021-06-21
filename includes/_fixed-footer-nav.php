<?php
echo '<nav id="js-footer-nav" class="l-footer-nav-fixed">';
$defaults = array(
'menu'            => $nav_menu,
'menu_class'      => 'l-footer-nav-fixed__inner',
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
'theme_location'  => 'footer_nav-fixed',
'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
);
wp_nav_menu( $defaults );
echo '</nav>';
?>

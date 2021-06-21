<?php if ( wp_is_mobile() ) : ?>
  <?php get_template_part('includes/_hamburger'); ?>
  <?php get_template_part('includes/_fixed-footer-nav'); ?>
<?php endif; ?>

<footer class="l-footer">
<div class="l-footer__inner">
<p class="l-footer__copy">© <?php bloginfo('name'); ?></p>

<?php
echo '<nav class="l-footer__global-nav">';
$defaults = array(
'menu'            => $nav_menu,
'menu_class'      => 'l-footer__menu',
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
echo '</nav>';
?>

<?php
echo '<nav class="l-footer__cat-nav">';
$defaults = array(
'menu'            => $nav_menu,
'menu_class'      => 'l-footer__cat-menu',
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
'theme_location'  => 'gallery-cat_nav',
'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
);
wp_nav_menu( $defaults );
echo '</nav>';
?>

<p class="c-btn__insta"><a href="https://www.instagram.com/rabakuma/" target="_blank"></a></p>

</div>
</footer>

<?php wp_footer(); ?>
<!-- <script src="<?php echo get_template_directory_uri(); echo '/dist/js/main.js?' . filemtime( get_template_directory() . ''); ?>"></script> -->

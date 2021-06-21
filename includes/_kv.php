<?php if (is_home() && is_front_page() ) : ?>
<div id="js-header-nav__on" class="p-index-kv kv-animation">
  <header class="l-header">
    <?php if (wp_is_mobile()): ?>
      <?php else: ?>
      <?php get_template_part('includes/_fixed-header-nav'); ?>
    <?php endif; ?>
    <div class="l-header__inner">
      <h1 class="c-heading-logo -ta-center">KOICHI ONO<br>PHOTOGRAPHY</h1>

        <?php
        $menu_name = 'kv_nav';
          if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) :
            $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
            $menu_items = wp_get_nav_menu_items($menu->term_id);
            ?>
            <nav class="l-header__menu">
              <ul class="l-header__list c-flex -jc-c">
              <?php foreach ( (array) $menu_items as $key => $menu_item ) : ?>
              <li class="l-header__item"><a href="<?php echo esc_attr($menu_item->url); ?>" class="c-btn -sm -white-2 -en" ><?php echo esc_html($menu_item->title); ?></a></li>
              <?php endforeach; ?>
              </ul>
            </nav>

        <?php else: ?>
        <?php endif; ?>
      </div>

  </header>
  <div class="p-index-kv__inner">
    <div class="p-index-kv__item"></div>
    <div class="p-index-kv__item"></div>
    <div class="p-index-kv__item"></div>
    <div class="p-index-kv__item"></div>
    <div class="p-index-kv__item"></div>
  </div>
  <div class="p-index-kv__scr">scroll</div>
</div>
<?php else: ?>
<div id="js-header-nav__on" class="p-page-kv">
  <header class="l-header-page">
    <?php if (wp_is_mobile()): ?>
      <?php else: ?>
      <?php get_template_part('includes/_fixed-header-nav'); ?>
    <?php endif; ?>
  </header>
<?php if (have_posts()): ?>
  <?php while (have_posts()): the_post(); ?>
  <div class="p-page-kv__inner">
  <?php $pc = get_field('page_kv_pc'); ?>
  <?php $sp = get_field('page_kv_sp'); ?>
    <div class="p-page-kv__img">
      <picture>
      <?php if($pc): ?>
        <source media="(min-width: 769px)" srcset="<?php echo $pc['url']; ?>">
        <?php endif; ?>
        <?php if($sp): ?>
        <img src="<?php echo $sp['url']; ?>" alt="<?php echo $sp['alt'] ?>" />
        <?php endif; ?>
      </picture>
    </div>
  <h1 class="c-heading-1"><?php the_title(); ?></h1>
    <?php
    if ( function_exists('yoast_breadcrumb') ) {
      yoast_breadcrumb( '<div class="p-breadcrumbs"><div class="p-breadcrumbs__inner" vocab="http://schema.org/" typeof="BreadcrumbList">','</div></div>' );
    }
    ?>
  </div>
</div>
<?php endwhile; ?>
<?php endif; ?>
<?php endif; ?>

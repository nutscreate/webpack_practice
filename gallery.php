<?php
/*
Template Name: GALLERY
*/
 get_header(); ?>

<main class="l-main">

<?php
$parent_id = get_the_ID();//親ページのIDを取得して変数「$parent_id」に入れる
$args = array(
'posts_per_page' => -1,//子ページ全部を取得
'post_type' => 'page',//固定ページを取得
'orderby' => 'menu_order',//管理画面順で表示
'order' => 'ASC',//昇順表示
'post_parent' => $parent_id, //現在表示しているページの親ページのIDを取得
); ?>
<section class="p-gallery">
  <div class="p-gallery__inner">

<?php if (is_parent_slug() === 'gallery'): ?>
<?php else: ?>

  <div class="c-heading-3 -ta-left">
    <h2 class="c-heading-3-main">ギャラリーカテゴリー</h3>
    <!-- <p class="c-heading-3-sub">CATEGORY</p> -->
  </div>

  <?php endif; ?>

  <div class="p-gallery__cont-list c-photo-link c-grid -c2">

<?php $common_pages = new WP_Query( $args );
if( $common_pages->have_posts() ):
    while( $common_pages->have_posts() ): $common_pages->the_post();
?>

<?php get_template_part('includes/_photo-link'); ?>


<?php endwhile; wp_reset_postdata(); ?>
    </div>
  </div>
</section>
<?php endif;?>


</main>

<?php get_footer(); ?>

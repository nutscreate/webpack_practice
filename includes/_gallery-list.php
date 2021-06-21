<div class="p-gallery-list">
  <div class="p-gallery-list__inner">

    <div class="c-heading-3 -ta-left">
      <h3 class="c-heading-3-main">ギャラリーカテゴリー</h3>
      <!-- <p class="c-heading-3-sub">CATEGORY</p> -->
    </div>

    <?php
      $parent_id = get_the_ID();//親ページのIDを取得して変数「$parent_id」に入れる
      $args = array(
      'posts_per_page' => 6,//子ページ全部を取得
      'post_type' => 'page',//固定ページを取得
      //'page_id' => array(14,34,24,36,38,42),
      //'pagename' => array('gallery/celestial'),
      'orderby' => 'menu_order',//管理画面順で表示
      'order' => 'ASC',//昇順表示
      'post__not_in' => array(10,46,52),
      'post_parent' => 2, //現在表示しているページの親ページのIDを取得
    ); ?>

    <div class="c-photo-link c-grid -c2">
      <?php $common_pages = new WP_Query( $args );
        if( $common_pages->have_posts() ):
        while( $common_pages->have_posts() ): $common_pages->the_post();
      ?>
        <?php get_template_part('includes/_photo-link'); ?>
      <?php endwhile; wp_reset_postdata(); ?>
    </div>


    <div class="c-photo-link__btn">
      <a href="<?php echo esc_url(home_url('/gallery/')); ?>" class="c-btn -lg -blue -jpn -c-photo-link__btn">カテゴリーページへ</a>
    </div>
      <?php endif;?>
  </div>
</div>



























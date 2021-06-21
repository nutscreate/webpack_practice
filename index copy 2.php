<!DOCTYPE html>
<html lang="ja">
<head>
<?php get_header(); ?>
</head>
<body <?php body_class(); ?>>

<div id="js-header-nav__on" class="p-index-kv">

<?php get_template_part('includes/_header'); ?>


<div class="p-index-kv__webp">
  <?php if( have_rows('slideshow_wrap','option') ): ?>
    <div class="p-index-kv__inner">
    <?php while( have_rows('slideshow_wrap','option') ): the_row(); ?>
        <?php $pc = get_sub_field('slideshow_pc'); ?>
        <div class="p-index-kv__item" style="background-image: url(<?php echo $pc['url']; ?>)"></div>
      <?php endwhile; ?>
    </div>
  <?php endif; ?>
</div>

<div class="p-index-kv__no-webp">
  <?php if( have_rows('slideshow_wrap','option') ): ?>
    <div class="p-index-kv__inner">
    <?php while( have_rows('slideshow_wrap','option') ): the_row(); ?>
        <?php $sp = get_sub_field('slideshow_sp'); ?>
        <div class="p-index-kv__item" style="background-image: url(<?php echo $sp['url']; ?>)"></div>
      <?php endwhile; ?>
    </div>
  <?php endif; ?>
</div>













<!--
<?php if( have_rows('slideshow_wrap','option') ): ?>
  <div class="p-index-kv__inner">
    <?php while( have_rows('slideshow_wrap','option') ): the_row(); ?>
      <?php $pc = get_sub_field('slideshow_pc'); ?>
      <?php $sp = get_sub_field('slideshow_sp'); ?>

      <div class="p-index-kv__item">
          <picture>
          <?php if($pc): ?>
            <source media="(min-width: 769px)" srcset="<?php echo $pc['url']; ?>">
            <?php endif; ?>
            <?php if($sp): ?>
            <img src="<?php echo $sp['url']; ?>" alt="<?php echo $sp['alt'] ?>" />
            <?php endif; ?>
          </picture>
        </div>
    <?php endwhile; ?>
  </div>
<?php endif; ?>
 -->
<div class="p-index-kv__scr">scroll</div>
</div>

<main class="l-main">

  <section class="p-index-block">
    <div class="p-index-block__inner">
      <div class="c-heading-2 -ta-center">
        <h2 class="c-heading-2-main js-animation">GALLERY</h2>
        <p class="c-heading-2-sub js-animation">ギャラリー</p>
      </div>

      <div class="c-card">


      <?php $post_c = new wp_query(array('pagename'=> 'gallery/flower', 'posts_per_page'=>1, 'post_status'=>'publish', 'order' => 'desc',)); ?>
          <?php global $post; if ($post_c->have_posts()) : ?>
            <?php while ($post_c->have_posts()) : $post_c->the_post(); ?>
            <?php $page = get_post( get_the_ID() );
              $slug = $page->post_name;
            ?>
            <div class="c-card__item">
              <?php if(has_post_thumbnail()): ?>
              <div class="p-card__photo js-animation"><?php the_post_thumbnail(); ?></div>
              <?php else: ?>
              <?php endif; ?>

              <div class="p-card__details">
                <p class="p-card__ttl js-animation"><?php the_title(); ?></p>
                <p class="p-card__desc js-animation"><?php echo get_the_excerpt(); ?></p>
                <p class="p-card__bg-txt js-animation"><?php echo $slug; ?></p>
                <div class="c-card__btn js-animation">
                  <a href="<?php the_permalink(); ?>" class="c-btn -lg -blue -jpn -c-card__btn"><?php the_title(); ?>一覧ページへ</a>
                </div>
              </div>
            </div>

            <?php endwhile; ?>
          <?php else : ?>
        <?php endif; wp_reset_postdata(); ?>


        <?php $post_c = new wp_query(array('pagename'=> 'gallery/wildbird', 'posts_per_page'=>1, 'post_status'=>'publish', 'order' => 'desc',)); ?>
          <?php global $post; if ($post_c->have_posts()) : ?>
            <?php while ($post_c->have_posts()) : $post_c->the_post(); ?>
            <?php $page = get_post( get_the_ID() );
              $slug = $page->post_name;
            ?>
            <div class="c-card__item">
              <?php if(has_post_thumbnail()): ?>
              <div class="p-card__photo js-animation"><?php the_post_thumbnail(); ?></div>
              <?php else: ?>
              <?php endif; ?>

              <div class="p-card__details">
                <p class="p-card__ttl js-animation"><?php the_title(); ?></p>
                <p class="p-card__desc js-animation"><?php echo get_the_excerpt(); ?></p>
                <p class="p-card__bg-txt js-animation"><?php echo $slug; ?></p>
                <div class="c-card__btn js-animation">
                  <a href="<?php the_permalink(); ?>" class="c-btn -lg -blue -jpn -c-card__btn"><?php the_title(); ?>一覧ページへ</a>
                </div>
              </div>
            </div>

            <?php endwhile; ?>
          <?php else : ?>
        <?php endif; wp_reset_postdata(); ?>

        <?php $post_c = new wp_query(array('pagename'=> 'gallery/aviation', 'posts_per_page'=>1, 'post_status'=>'publish', 'order' => 'desc',)); ?>
          <?php global $post; if ($post_c->have_posts()) : ?>
            <?php while ($post_c->have_posts()) : $post_c->the_post(); ?>
            <?php $page = get_post( get_the_ID() );
              $slug = $page->post_name;
            ?>
            <div class="c-card__item">
              <?php if(has_post_thumbnail()): ?>
              <div class="p-card__photo js-animation"><?php the_post_thumbnail(); ?></div>
              <?php else: ?>
              <?php endif; ?>

              <div class="p-card__details">
                <p class="p-card__ttl js-animation"><?php the_title(); ?></p>
                <p class="p-card__desc js-animation"><?php echo get_the_excerpt(); ?></p>
                <p class="p-card__bg-txt js-animation"><?php echo $slug; ?></p>

                <div class="c-card__btn js-animation">
                  <a href="<?php the_permalink(); ?>" class="c-btn -lg -blue -jpn -c-card__btn"><?php the_title(); ?>一覧ページへ</a>
                </div>
              </div>
            </div>

            <?php endwhile; ?>
          <?php else : ?>
        <?php endif; wp_reset_postdata(); ?>

      </div>
    </div>

    <div class="p-index-block-bg">
      <div class="p-index-block-bg__inner">

        <div class="c-heading-3 -ta-left">
          <h3 class="c-heading-3-main js-animation">ギャラリーカテゴリー</h3>
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
          'post__not_in' => array(18,20,24),
          'post_parent' => 3, //現在表示しているページの親ページのIDを取得
        ); ?>

        <div class="c-photo-link c-grid -c2">
          <?php $common_pages = new WP_Query( $args );
            if( $common_pages->have_posts() ):
            while( $common_pages->have_posts() ): $common_pages->the_post();
          ?>
            <?php get_template_part('includes/_photo-link'); ?>
          <?php endwhile; wp_reset_postdata(); ?>
        </div>

        <div class="c-photo-link__btn js-animation">
          <a href="<?php echo esc_url(home_url('/gallery/')); ?>" class="c-btn -lg -blue -jpn -c-photo-link__btn">カテゴリーページへ</a>
        </div>
          <?php endif;?>
      </div>
    </div>
  </section>






<?php $post_c = new wp_query(array('pagename'=> 'profile', 'posts_per_page'=>1, 'post_status'=>'publish', 'order' => 'desc',)); ?>
<?php global $post; if ($post_c->have_posts()) : ?>
<?php while ($post_c->have_posts()) : $post_c->the_post(); ?>
<?php $profile_name = get_field('profile_name'); ?>
<?php $profile_ruby = get_field('profile_ruby'); ?>
<?php $profile_occupation = get_field('profile_occupation'); ?>

<section class="p-index-block">
  <div class="p-index-block__inner">
    <div class="c-heading-2 -ta-center">
      <h2 class="c-heading-2-main js-animation"><?php the_title(); ?></h2>
      <p class="c-heading-2-sub js-animation">プロフィール</p>
    </div>

    <div class="p-profile-card">

        <?php
        $image = get_field('profile_photo');
        if( !empty( $image ) ): ?>
              <div class="p-profile-card__img js-animation">
        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
        </div>
        <?php endif; ?>

      <div class="p-profile-card__details js-animation">
        <?php if( $profile_ruby ): ?>
          <p class="p-profile__ruby js-animation"><?php the_field('profile_ruby'); ?></p>
        <?php endif; ?>

        <?php if( $profile_name ): ?>
          <p class="p-profile__name js-animation"><?php the_field('profile_name'); ?></p>
        <?php endif; ?>

        <?php if( $profile_occupation ): ?>
        <p class="p-profile__occupation js-animation"><?php the_field('profile_occupation'); ?></p>
        <?php endif; ?>

        <div class="p-profile__btn">
          <a href="<?php echo esc_url(home_url('/profile/')); ?>" class="c-btn -lg -white -jpn -p-profile__btn js-animation">プロフィールページへ</a>
        </div>
      </div>

    </div>

  </div>
</section>

<?php endwhile; ?>
<?php else : ?>
<?php endif; wp_reset_postdata(); ?>

</main>


<?php get_template_part('includes/_footer'); ?>

<?php get_footer(); ?>
</body>
</html>

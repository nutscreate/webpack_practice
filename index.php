<?php get_header(); ?>

<main class="l-main">

  <section class="p-index-block">
    <div class="p-index-block__inner">

      <div class="c-heading-2 -ta-center">
        <h2 class="c-heading-2-main">GALLERY</h2>
        <p class="c-heading-2-sub">ギャラリー</p>
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
              <div class="p-card__photo"><?php the_post_thumbnail(); ?></div>
              <?php else: ?>
              <?php endif; ?>

              <div class="p-card__details">
                <p class="p-card__ttl"><?php the_title(); ?></p>
                <p class="p-card__desc"><?php echo get_the_excerpt(); ?></p>
                <p class="p-card__bg-txt"><?php echo $slug; ?></p>
                <div class="c-card__btn">
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
              <div class="p-card__photo"><?php the_post_thumbnail(); ?></div>
              <?php else: ?>
              <?php endif; ?>

              <div class="p-card__details">
                <p class="p-card__ttl"><?php the_title(); ?></p>
                <p class="p-card__desc"><?php echo get_the_excerpt(); ?></p>
                <p class="p-card__bg-txt"><?php echo $slug; ?></p>
                <div class="c-card__btn">
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
              <div class="p-card__photo"><?php the_post_thumbnail(); ?></div>
              <?php else: ?>
              <?php endif; ?>

              <div class="p-card__details">
                <p class="p-card__ttl"><?php the_title(); ?></p>
                <p class="p-card__desc"><?php echo get_the_excerpt(); ?></p>
                <p class="p-card__bg-txt"><?php echo $slug; ?></p>

                <div class="c-card__btn">
                  <a href="<?php the_permalink(); ?>" class="c-btn -lg -blue -jpn -c-card__btn"><?php the_title(); ?>一覧ページへ</a>
                </div>
              </div>
            </div>

            <?php endwhile; ?>
          <?php else : ?>
        <?php endif; wp_reset_postdata(); ?>

      </div>

    </div>

    <?php get_template_part('includes/_gallery-list'); ?>

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
        <h2 class="c-heading-2-main"><?php the_title(); ?></h2>
        <p class="c-heading-2-sub">プロフィール</p>
      </div>

      <div class="p-profile-card">

          <?php
          $image = get_field('profile_photo');
          if( !empty( $image ) ): ?>
          <div class="p-profile-card__img">
            <div class="p-profile-card__img-inner">
              <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
            </div>
          </div>

          <?php endif; ?>

        <div class="p-profile-card__details">
          <?php if( $profile_ruby ): ?>
            <p class="p-profile__ruby"><?php the_field('profile_ruby'); ?></p>
          <?php endif; ?>

          <?php if( $profile_name ): ?>
            <p class="p-profile__name"><?php the_field('profile_name'); ?></p>
          <?php endif; ?>

          <?php if( $profile_occupation ): ?>
          <p class="p-profile__occupation"><?php the_field('profile_occupation'); ?></p>
          <?php endif; ?>

          <div class="p-profile__btn">
            <a href="<?php echo esc_url(home_url('/profile/')); ?>" class="c-btn -lg -white -jpn -p-profile__btn">プロフィールページへ</a>
          </div>
        </div>

      </div>

    </div>
  </section>

  <?php endwhile; ?>
  <?php else : ?>
  <?php endif; wp_reset_postdata(); ?>

</main>

<?php get_footer(); ?>

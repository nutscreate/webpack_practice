<?php $page = get_post( get_the_ID() );
      $slug = $page->post_name;
    ?>
<a href="<?php the_permalink(); ?>" class="c-photo-link__item">
  <div class="c-photo-link__inner">

    <div class="c-photo-link__details c-flex -jc-sb">
      <div class="c-photo-link__ttl">
        <p class="c-photo-link__ttl-main"><?php the_title(); ?></p>
        <p class="c-photo-link__ttl-sub"><?php echo $slug; ?></p>
      </div>
      <div class="c-btn__circle -arrow"></div>
    </div>

    <?php if (has_post_thumbnail()) : ?>
      <?php the_post_thumbnail(); ?>
    <?php else: ?>
      <img alt=”” src=”<?php echo get_template_directory_uri(); ?>”>
    <?php endif; ?>
  </div>
</a>

<?php
/*
Template Name: GALLERY-CHILD
*/
 get_header(); ?>

<main class="l-main">
  <section class="p-gallery-child">
    <div class="p-gallery-child__inner">
      <div class="c-photo-popup c-grid -c2"> <?php $images = get_field('gallery'); if( $images ):?>
        <?php foreach( $images as $image ): ?>
          <a href="<?php echo $image['url']; ?>" class="c-photo-popup__item" data-lightbox="popup">
            <div class="photo-popup__inner">
              <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" >
              <div class="c-btn__circle -plus"></div>
            </div>
          </a>
        <?php endforeach; ?>
        <?php endif; ?>
      </div>
    </div>

    <?php get_template_part('includes/_gallery-list'); ?>

  </section>
</main>
<?php get_footer(); ?>

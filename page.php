<?php get_header(); ?>

<main class="l-main">

  <section class="p-page">
    <div class="p-page__inner">
    <?php if (have_posts()): ?>
      <?php while (have_posts()): the_post(); ?>
        <div class="p-editor"><?php the_content(); ?></div>
      <?php endwhile; ?>
    <?php endif; ?>

    </div>
  </section>

</main>

<?php get_footer(); ?>

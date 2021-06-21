<?php get_header(); ?>

<?php get_template_part('includes/_header'); ?>

<div id="js-header-nav__on" class="p-page-kv">

  <div class="p-page-kv__inner">

    <div class="p-page-kv__img">
      <picture>
        <source media="(min-width: 769px)" srcset="https://onophotography.com/wp/wp-content/uploads/2021/06/404-kv-pc.jpg">
        <img src="https://onophotography.com/wp/wp-content/uploads/2021/06/404-kv-sp.jpg" alt="エラーページ" />
      </picture>
    </div>

    <h1 class="c-heading-1">NOT FOUND</h1>
    <header class="l-header-page">
      <?php
      if ( function_exists('yoast_breadcrumb') ) {
        yoast_breadcrumb( '<div class="p-breadcrumbs"><div class="p-breadcrumbs__inner" vocab="http://schema.org/" typeof="BreadcrumbList">','</div></div>' );
      }
      ?>
    </header>
  </div>

</div>


<main class="l-main">
  <section class="p-page">
    <div class="p-page__inner">
        <div class="p-editor">
          <h2>お探しのページは見つかりませんでした</h2>
            <p>ページが移動または削除されたか、入力したURLが間違っている可能性がございます。下記ボタンから、サイトのトップページに移動していただき、目的のページをお探しください。</p>
              <div class="c-flex -jc-c p-editor__btn">
                  <a href="<?php echo esc_url(home_url('/')); ?>" class="c-btn -lg -blue -en">HOME</a>
              </div>
        </div>
    </div>
  </section>

</main>

<?php get_template_part('includes/_footer'); ?>

<?php get_footer(); ?>
</body>
</html>

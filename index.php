<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php bloginfo('template_url'); echo '/dist/css/main.css?' . filemtime( get_stylesheet_directory() . ''); ?>" />
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Teko:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <title>Document</title>
</head>
<body>



<div class="l-index-kv">
<header class="l-header">
    <h1 class="l-header__logo">KOICHI ONO PHOTOGRAPHY</h1>
     <nav class="l-header__menu">
       <ul class="l-header__list">
          <li class="l-header__item"><a href="#" title="GARALLEYページへ">GARALLEY</a></li>
          <li class="l-header__item"><a href="#" title="PROFILEページへ">PROFILE</a></li>
        </ul>
      </nav>
</header>
<div class="l-index-kv__slide">
  <img src="<?php echo get_template_directory_uri(); ?>/src/img/index_kv_img_1.jpg" alt="">
  <img src="<?php echo get_template_directory_uri(); ?>/src/img/index_kv_img_2.jpg" alt="">
  <img src="<?php echo get_template_directory_uri(); ?>/src/img/index_kv_img_3.jpg" alt="">
  <img src="<?php echo get_template_directory_uri(); ?>/src/img/index_kv_img_4.jpg" alt="">
  <img src="<?php echo get_template_directory_uri(); ?>/src/img/index_kv_img_5.jpg" alt="">
</div>


<div class="l-index-kv__scr">Scroll</div>
</div>

</body>
</html>

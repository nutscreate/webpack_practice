<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-QC4RP2CDVQ"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-QC4RP2CDVQ');
    </script>
    <?php wp_head(); ?>
  </head>
<body <?php body_class(); ?>>








<?php get_template_part('includes/_kv'); ?>
<div id="js-loading" class="js-loading js-loading__active"><p class="js-loading__item"></p></div>

<?php
global $siteUrl;
global $astUrl;
?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <!-- preconnect -->
  <link rel="preconnect" href="https://cdn.jsdelivr.net">
  <link rel="preconnect" href="https://cdn.jsdelivr.net" crossorigin>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <!-- preconnect -->
  <!-- viewport -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- /viewport -->
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="format-detection" content="telephone=no">
  <!-- SEO -->
  <!-- /SEO -->
  <!-- Font -->
  <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Zen+Kaku+Gothic+New&display=swap" rel="stylesheet">
  <!-- / Font -->
  <!-- stylesheet -->
  <?php if (is_home() || is_front_page()) : ?>
    <link href="<?php echo $astUrl; ?>assets/css/top.css<?php acd() ?>" rel="stylesheet">
  <?php elseif (is_page('about-us')) : ?>
    <link href="<?php echo $astUrl; ?>assets/css/aboutus.css<?php acd() ?>" rel="stylesheet">
  <?php elseif (is_page('business')) : ?>
    <link href="<?php echo $astUrl; ?>assets/css/business.css<?php acd() ?>" rel="stylesheet">
  <?php elseif (is_page('recruiter')) : ?>
    <link href="<?php echo $astUrl; ?>assets/css/recruiter.css<?php acd() ?>" rel="stylesheet">
  <?php elseif (is_page('company')) : ?>
    <link href="<?php echo $astUrl; ?>assets/css/company.css<?php acd() ?>" rel="stylesheet">
  <?php elseif (
    is_post_type_archive('post') ||
    get_post_type() == 'post' ||
    is_singular('post')
  ) : ?>
    <link href="<?php echo $astUrl; ?>assets/css/single.css<?php acd() ?>" rel="stylesheet">
  <?php elseif (is_page('contact')) : ?>
    <link href="<?php echo $astUrl; ?>assets/css/contact.css<?php acd() ?>" rel="stylesheet">
  <?php elseif (is_404()) : ?>
    <link href="<?php echo $astUrl; ?>assets/css/error.css<?php acd() ?>" rel="stylesheet">
  <?php elseif (is_page('privacy-policy') || is_page('sitemap')) : ?>
    <link href="<?php echo $astUrl; ?>assets/css/page.css<?php acd() ?>" rel="stylesheet">
  <?php endif; ?>
  <!-- /stylesheet -->
  <!-- script -->
  <script src="<?php echo $astUrl; ?>assets/js/util.js<?php acd() ?>" defer></script>
  <?php if (is_home() || is_front_page()) : ?>
    <script src="<?php echo $astUrl; ?>assets/js/top.js<?php acd() ?>" defer></script>
  <?php else : ?>
    <script src="<?php echo $astUrl; ?>assets/js/page.js<?php acd() ?>" defer></script>
  <?php endif; ?>
  <!-- /script -->
  <?php wp_head(); ?>
</head>

<body>
<?php
global $siteUrl;
global $astUrl;
?>
<?php get_header(); ?>

<div class="l-wrapper p-page p-sitemap">
  <?php get_file('headmenu'); ?>
  <main id="main" class="l-main l-main-page l-main-sitemap">

    <div class="l-mv-page l-mv-sitemap">
      <div class="l-mv-page__inner">
        <div class="l-mv-page__title">
          <h1 class="l-mv-page__titleJp">サイトマップ</h1>
          <p class="l-mv-page__titleEn">SITEMAP</p>
        </div>
      </div>
    </div>

    <!-- パンくず -->
    <?php echo custom_breadcrumbs(); ?>
    <!-- /パンくず -->

    <section class="p-sitemap-main">
      <div class="l-container--s">
        <ul>
          <li><a href="<?php echo $siteUrl; ?>">トップ</a></li>
          <li><a href="<?php echo $siteUrl; ?>about-us/">私たちについて</a></li>
          <li><a href="<?php echo $siteUrl; ?>business/">事業内容</a></li>
          <li><a href="<?php echo $siteUrl; ?>recruiter/">採用担当者様へ</a></li>
          <li><a href="<?php echo $siteUrl; ?>company/">会社案内</a></li>
          <li><a href="<?php echo $siteUrl; ?>news/">お知らせ</a></li>
          <li><a href="<?php echo $siteUrl; ?>contact/">お問い合わせ</a></li>
          <li><a href="<?php echo $siteUrl; ?>privacy-policy/">プライバシーポリシー</a></li>
        </ul>
      </div>
    </section>


  </main>
  <?php get_file('footmenu'); ?>
</div>
<?php get_footer(); ?>
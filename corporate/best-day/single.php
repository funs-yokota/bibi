<?php
global $siteUrl;
global $astUrl;
?>
<?php get_header(); ?>

<div class="l-wrapper p-page p-single">
  <?php get_file('headmenu'); ?>
  <main id="main" class="l-main l-main-page l-main-single">

    <div class="l-mv-page l-mv-single">
      <div class="l-mv-page__inner">
        <div class="l-mv-page__title">
          <h1 class="l-mv-page__titleJp">お知らせ</h1>
          <p class="l-mv-page__titleEn">NEWS</p>
        </div>
      </div>
    </div>

    <!-- パンくず -->
    <?php echo custom_breadcrumbs(); ?>
    <!-- /パンくず -->

    <section class="p-single-main">
      <div class="l-container--s">
        <p class="p-news-single-main__date"><?php the_time('Y.m.d'); ?></p>
        <h1 class="p-news-single-main__title"><?php the_title(); ?></h1>
        <div class="p-news-single-main__body">
          <?php the_content(); ?>
        </div>
        <div class="p-news-single-main__button">
          <a href="<?php echo $siteUrl; ?>news/">一覧へ戻る</a>
        </div>
      </div>
    </section>

  </main>
  <?php get_file('footmenu'); ?>
</div>
<?php get_footer(); ?>
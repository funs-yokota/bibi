<?php
global $siteUrl;
global $astUrl;
?>
<?php get_header(); ?>

<div class="l-wrapper p-page p-error">
  <?php get_file('headmenu'); ?>
  <main id="main" class="l-main l-main-page l-main-error">

    <div class="l-mv-page l-mv-error">
      <div class="l-mv-page__inner">
        <div class="l-mv-page__title">
          <p class="l-mv-page__titleEn">ページが見つかりませんでした</p>
        </div>
      </div>
    </div>

    <section class="p-error-main">
      <div class="l-container--s">
        <p class="p-error-main__title">お探しのページは見つかりませんでした。</p>
        <p class="p-error-main__text">お探しのページは見つかりませんでした。<br>URLをご確認の上再度読み込み頂くか、<a href="<?php echo $siteUrl; ?>">トップページ</a>へお戻りください。</p>
    </section>

  </main>
  <?php get_file('footmenu'); ?>
</div>
<?php get_footer(); ?>
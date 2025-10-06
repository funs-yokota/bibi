<?php
global $siteUrl;
global $astUrl;
?>
<?php get_header(); ?>

<div class="l-wrapper p-page p-contact">
  <?php get_file('headmenu'); ?>
  <main id="main" class="l-main l-main-page l-main-contact">

    <div class="l-mv-page l-mv-contact">
      <div class="l-mv-page__inner">
        <div class="l-mv-page__title">
          <h1 class="l-mv-page__titleJp">お問い合わせ</h1>
          <p class="l-mv-page__titleEn">CONTACT</p>
        </div>
      </div>
    </div>

    <!-- パンくず -->
    <?php echo custom_breadcrumbs(); ?>
    <!-- /パンくず -->

    <section class="p-contact-form">
      <div class="l-container--s">
        <?php echo apply_shortcodes('[contact-form-7 id="c476e0a" title="お問い合わせ"]'); ?>
      </div>
    </section>


  </main>
  <?php get_file('footmenu'); ?>
</div>
<?php get_footer(); ?>
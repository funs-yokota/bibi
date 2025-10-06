<?php

/**
 * ニュース一覧
 *
 * @package WordPress
 */

?>
<?php get_header(); ?>

<div class="l-container">

  <div class="p-news p-news-single">

    <?php
    get_file('headmenu');
    ?>

    <main id="main" class="l-main l-main-news">

      <div class="l-mv l-mv-under">
        <!-- <div class="l-mv__img">
          <picture class="l-mv__imgBk">
            <source srcset="<?php echo $astUrl; ?>assets/img/news/global/sp-mv.jpg" media="(max-width: 767px)">
            <img src="<?php echo $astUrl; ?>assets/img/news/global/mv.jpg" alt="">
          </picture>
          <h2 class="l-mv__imgTit">News</h2>
        </div> -->
      </div>

      <div class="l-pankuzu">
        <ol class="l-pankuzu__list">
          <li><a href="<?php echo $siteUrl; ?>en/">HOME</a></li>
          <li>></li>
          <li>News</li>
        </ol>
      </div>

      <div class="l-main__spacer">

        <section class="l-section p-news-single-doboz">

          <div class="l-section__inner l-section__inner-small">

          </div>

        </section>

      </div>

    </main>

    <?php
    get_file('footmenu');
    ?>

  </div>

</div>

<?php get_footer(); ?>



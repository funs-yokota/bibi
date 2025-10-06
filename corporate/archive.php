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
        <?php if (have_posts()) : ?>
          <ul class="l-news__list">
            <?php while (have_posts()) : the_post(); ?>
              <?php
              $link = get_the_permalink();
              $title = get_the_title();
              $date = get_the_time('Y.m.d');
              $cat = get_the_category();
              $cat = $cat[0];
              ?>
              <!-- 繰り返し -->
              <li class="l-news__listItem">
                <a href="<?php echo $link; ?>">
                  <div class="l-news__meta">
                    <p><?php echo $date; ?></p>
                    <ul class="l-news__cat">
                      <li class="l-news__catItem"><?php echo $cat->name; ?></li>
                    </ul>
                  </div>
                  <p class="l-news__title"><?php echo esc_html($title); ?></p>
                </a>
              </li>
              <!-- 繰り返し -->
            <?php endwhile; ?>
          </ul>
          <?php if (get_query_var('paged') > 1 || $wp_query->max_num_pages > 1): ?>
            <div class="pagination-wrap">
              <?php
              $args = array(
                'mid_size' => 3,
                'prev_text' => '＜',
                'next_text' => '＞',
              );
              the_posts_pagination($args);
              ?>
            </div>
          <?php endif; ?>
        <?php else : ?>
          <!-- 投稿が無い場合の処理 -->
        <?php endif; ?>
      </div>
    </section>

  </main>
  <?php get_file('footmenu'); ?>
</div>
<?php get_footer(); ?>
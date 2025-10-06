<?php

/**
 * 共通処理を記載していきます。
 */

/*━━━━━━━━━━━━━━━━━━━━━━━━━━
エディタ、Guternbergの幅変更
━━━━━━━━━━━━━━━━━━━━━━━━━━━*/
add_action('admin_head', function () {
  echo '<style>.wp-block{max-width: 800px !important}</style>' . "\n";
});

/*━━━━━━━━━━━━━━━━━━━━━━━━━━
自動絵文字機能無効化
━━━━━━━━━━━━━━━━━━━━━━━━━━━*/
function disable_emoji()
{
  remove_action('wp_head', 'print_emoji_detection_script', 7);
  remove_action('admin_print_scripts', 'print_emoji_detection_script');
  remove_action('wp_print_styles', 'print_emoji_styles');
  remove_action('admin_print_styles', 'print_emoji_styles');
  remove_filter('the_content_feed', 'wp_staticize_emoji');
  remove_filter('comment_text_rss', 'wp_staticize_emoji');
  remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
}
add_action('init', 'disable_emoji');

/*==========================================
一番親の固定ページ取得
==========================================*/
function is_subpage($post)
{
  if (is_page() && $post->post_parent) {
    $page = get_post($post->post_parent);
    return $page->post_name;
  } else {
    return false;
  }
}

/*==========================================
 * 投稿アーカイブの有効
==========================================*/

function post_has_archive($args, $post_type)
{
  if ('post' == $post_type) {
    $args['rewrite'] = true;
    $args['has_archive'] = 'news'; // 任意のURL
  }
  return $args;
}
add_filter('register_post_type_args', 'post_has_archive', 10, 2);

/*==========================================
 * 投稿アーカイブの件数
==========================================*/

function change_posts_per_page($query)
{
  if (is_admin() || ! $query->is_main_query())
    return;

  if ($query->is_archive()) { /* アーカイブページの時に表示件数を5件にセット */
    $query->set('posts_per_page', '10');
  }
}
add_action('pre_get_posts', 'change_posts_per_page');

/*==========================================
Contact Form 7で自動挿入されるPタグ、brタグを削除
p、br削除
==========================================*/
add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
function wpcf7_autop_return_false()
{
  return false;
}


/*==========================================
Contact Form 7　メールアドレス確認用
==========================================*/
function wpcf7_custom_email_validation_filter($result, $tag)
{
  if ('your-email-confirm' == $tag->name) {
    $your_email = isset($_POST['your-email']) ? trim($_POST['your-email']) : '';
    $your_email_confirm = isset($_POST['your-email-confirm']) ? trim($_POST['your-email-confirm']) : '';
    if ($your_email != $your_email_confirm) {
      $result->invalidate($tag, "メールアドレスが一致しません");
    }
  }
  return $result;
}
add_filter('wpcf7_validate_email', 'wpcf7_custom_email_validation_filter', 20, 2);
add_filter('wpcf7_validate_email*', 'wpcf7_custom_email_validation_filter', 20, 2);

/*==========================================
自動更新を無効にする
==========================================*/
add_filter('automatic_updater_disabled', '__return_true');


/*==========================================
パンくずリスト
==========================================*/
function custom_breadcrumbs()
{
  // ホームページのリンクを追加
  $breadcrumbs = '<a class="home" href="' . home_url() . '">' . 'トップ' . '</a>';

  // ページがworksカスタム投稿タイプの詳細ページの場合
  if (is_singular('works')) {
    // worksアーカイブページへのリンクを追加
    $breadcrumbs .= ' <span class="arrow"></span> <a href="' . get_post_type_archive_link('works') . '">' . '設計事例' . '</a>';

    // 投稿のタイトルを追加
    $breadcrumbs .= ' <span class="arrow"></span> ' . get_the_title();
  }

  // worksカスタム投稿タイプのアーカイブページの場合
  elseif (is_post_type_archive('works')) {
    $breadcrumbs .= ' <span class="arrow"></span> ' . '設計事例';
  }

  // works_categoryタクソノミーのアーカイブページの場合
  elseif (is_tax('works_category')) {
    // worksアーカイブページへのリンクを追加
    $breadcrumbs .= ' <span class="arrow"></span> <a href="' . get_post_type_archive_link('works') . '">' . '設計事例' . '</a>';

    // タームの情報を取得して追加
    $term = get_queried_object();
    $breadcrumbs .= ' <span class="arrow"></span> ' . $term->name;
  }

  // ページがカスタム投稿タイプの場合
  elseif (is_singular('custom_post_type')) {
    // カスタム投稿タイプのアーカイブページへのリンクを追加
    $breadcrumbs .= ' <span class="arrow"></span> <a href="' . get_post_type_archive_link('custom_post_type') . '">' . 'カスタム投稿タイプアーカイブ' . '</a>';

    // カスタム投稿タイプのタームがあれば表示
    $post_terms = get_the_terms(get_the_ID(), 'custom_taxonomy');
    if ($post_terms) {
      $post_term = array_pop($post_terms);
      $breadcrumbs .= ' <span class="arrow"></span> <a href="' . get_term_link($post_term) . '">' . $post_term->name . '</a>';
    }

    // 投稿のタイトルを追加
    $breadcrumbs .= ' <span class="arrow"></span> ' . get_the_title();
  }

  // カスタム投稿タイプのアーカイブページの場合
  elseif (is_post_type_archive('custom_post_type')) {
    // カスタム投稿タイプの名前を表示
    $post_type = get_post_type_object(get_post_type());
    $breadcrumbs .= ' <span class="arrow"></span> ' . $post_type->labels->singular_name;
  }

  // ページがカスタムタクソノミーのアーカイブページの場合
  elseif (is_tax('custom_taxonomy')) {
    // タームの情報を取得して追加
    $term = get_queried_object();
    $breadcrumbs .= ' <span class="arrow"></span> ' . $term->name;
  }

  // ページが通常の投稿ページの場合
  elseif (is_single()) {
    // カテゴリー情報を取得して追加
    $category = get_the_category();
    if ($category) {
      $breadcrumbs .= ' <span class="arrow"></span> <a href="' . home_url('/news/') . '">' . 'お知らせ' . '</a>';
    }

    // 投稿のタイトルを追加
    $breadcrumbs .= ' <span class="arrow"></span> ' . get_the_title();
  }

  // 固定ページの場合
  elseif (is_page()) {
    global $post;
    // 親ページがあれば追加
    if ($post->post_parent) {
      $parent_id = $post->post_parent;
      $breadcrumbs .= ' <span class="arrow"></span> <a href="' . get_permalink($parent_id) . '">' . get_the_title($parent_id) . '</a>';
    }

    // 固定ページのタイトルを追加
    $breadcrumbs .= ' <span class="arrow"></span> ' . get_the_title();
  }

  // ページがカテゴリーページの場合
  elseif (is_category()) {
    $category = get_the_category();
    if ($category) {
      $breadcrumbs .= ' <span class="arrow"></span> ' . $category[0]->cat_name;
    }
  }

  // ページがアーカイブページの場合
  elseif (is_archive()) {
    // タイトルを表示
    $breadcrumbs .= ' <span class="arrow"></span> ' . 'お知らせ';
  }

  // ページが検索結果ページの場合
  elseif (is_search()) {
    if (get_search_query()) {
      $breadcrumbs .= ' <span class="arrow"></span> ' . get_search_query();
    } else {
      $breadcrumbs .= ' <span class="arrow"></span> ' . 'キーワードなし';
    }
  }

  // 404エラーページの場合
  elseif (is_404()) {
    // 404ページのタイトルを表示
    $breadcrumbs .= ' <span class="arrow"></span> ' . '404 Not Found';
  }

  // パンくずリストを返す
  return '<div class="breadcrumbsWrap"><div class="breadcrumbs">' . $breadcrumbs . '</div></div>';
}
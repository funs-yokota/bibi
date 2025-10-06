<?php
/**
 * クエリに関わる処理を記載していきます。
 */

/*-----------------------------------------
メインクエリ条件変更
------------------------------------------*/
function custom_loop_rules($query)
{
  // 管理画面や、メインクエリ以外の処理に影響を及ぼさないように
  if (is_admin() || !$query->is_main_query()) {
    return;
  }
  // 投稿表示数変更
  // カテゴリーのアーカイブページ
  // タクソノミーのアーカイブページ
  // if (
  //   $query->is_post_type_archive('news')
  // ) {
  //   $query->set('posts_per_page', '-1');
  //   return;
  // }
}
add_action('pre_get_posts', 'custom_loop_rules');

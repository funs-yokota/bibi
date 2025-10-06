<?php
/**
 * アイキャッチに対応させる場合に利用します。
 */

/*━━━━━━━━━━━━━━━━━━━━━━━━━
アイキャッチ画像を有効化する
━━━━━━━━━━━━━━━━━━━━━━━━━━━*/
function twpp_setup_theme()
{
  add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'twpp_setup_theme');

/*━━━━━━━━━━━━━━━━━━━━━━━━━
アイキャッチ画像の定義と切り抜き
━━━━━━━━━━━━━━━━━━━━━━━━━━━*/
// add_action('after_setup_theme', 'baw_theme_setup');
// function baw_theme_setup()
// {
//   add_image_size('common_thumb', 436, 436, true);
// }

<?php
add_action('init', function () {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    register_nav_menus([
        'global_nav' => 'グローバルナビゲーション',
        // 'footer_nav' => 'フッターナビゲーション'
    ]);
});

// アイキャッチ画像がなければ標準画像にする
function get__eyecatch_width_default()
{
    if (has_post_thumbnail()):

        $id = get_post_thumbnail_id();

        $img = wp_get_attachment_image_src($id, 'large');
    else:
        $img = array(get_template_directory_uri() . '/assets/img/post-bg.jpg');

    endif;
    return $img;
}
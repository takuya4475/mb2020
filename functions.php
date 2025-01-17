<?php
function my_enqueue_scripts(){
  //jQueryを読み込むコード
  wp_enqueue_script('jquery');
  //jsを読み込むテンプレート
  wp_enqueue_script('main_js',get_template_directory_uri().'/main.js',array() );
  //cssをmy_styleにして、読み込むテンプレート
  wp_enqueue_style('my_styles', get_stylesheet_uri(),array(),
  filemtime(get_theme_file_path('style.css')) //キャッシュを削除する。
  );
  // fontをmy_fontにして、読み込むテンプレート
  wp_enqueue_style('my_font', 'https://fonts.adobe.com/fonts/futura-pt#fonts-section',array() );
  wp_enqueue_style('dashicons');
}
add_action('wp_enqueue_scripts','my_enqueue_scripts');

//wp_nav_menuにある子要素liのクラス名を追加する
function add_additional_class_on_li($classes, $item, $args) {
  if(isset($args->add_li_class)) {
      $classes[] = $args->add_li_class;
  }
  return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

//ヘッダー、フッターのカスタムメニュー化
register_nav_menus(
  array(
    'place_global'=> 'グローバル',
    'place_footer'=>'フッターナビ' //現在は使っていない。
  )
);
//アイキャッチ画像を表示出来るようにする
add_theme_support('post-thumbnails');

//カテゴリー用サイズ設定
add_image_size('archive', 500, 330, true);
//記事用のサイズ設定
add_image_size('single', 1620, 1156, true);
//サムネイルのサイズ設定
add_image_size('thumbnail', 100, 100, true);

//サブクエリを取得する関数
function get_child_pages($number = -1, $specified_id = null){
    $parent_id = get_the_ID();
  $args = array(
    'posts_per_page' => $number,
    'post_type' => 'page',
    'orderby' =>'menu_order',
    'order'=>'ASC',
    'post_parent'=>$parent_id,
  );
  $child_pages = new WP_Query( $args );
  return $child_pages;
}

//カテゴリーのURLを返す関数
function get_category_permalink($category_slug = 'news'){
  // 指定したカテゴリーの ID を取得
  $category_id = get_cat_ID('news');
  // このカテゴリーの URL を取得
  $category_link = get_category_link( $category_id );
  return $category_link;
}
// contact7のpやらbrタグを自動生成させない
add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
function wpcf7_autop_return_false() {
  return false;
}

//カスタムフィールドのurlを出力する。
function get_ticket_site_url(){
  echo SCF::get('ticket_site',10);
}
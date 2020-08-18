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
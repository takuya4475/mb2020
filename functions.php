<?php
function my_enqueue_scripts(){
  //jQueryを読み込むコード
  wp_enqueue_script('jquery');
  //jsを読み込むテンプレート
  wp_enqueue_script('main_js',get_template_directory_uri().'/main.js',array() );
  //cssをmy_styleにして、読み込むテンプレート
  wp_enqueue_style('my_styles', get_template_directory_uri().'/style.css',array() );
  // fontをmy_fontにして、読み込むテンプレート
  wp_enqueue_style('my_font', 'https://fonts.adobe.com/fonts/futura-pt#fonts-section',array() );
}
add_action('wp_enqueue_scripts','my_enqueue_scripts');

//ヘッダー、フッターのカスタムメニュー化
register_nav_menus(
  array(
    'place_global'=> 'グローバル',
    'place_footer'=>'フッターナビ'
  )
);
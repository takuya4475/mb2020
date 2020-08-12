<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo wp_get_document_title(); ?></title>
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <header>
    <span class="sp-nav-btn-backColor"></span>
    <span class="sp-nav-btn-frontColor1"></span>
    <span class="sp-nav-btn-frontColor2"></span>
    <span class="sp-nav-btn-frontColor3"></span>
    <nav class="nav-container sp-nav">
<?php
  wp_nav_menu(
    array(
      'theme_location' => 'place_global',
      'menu_class'=> 'flex-center',
      'container' => false,
    )
  );
?>
      <ul class="flex-center">
        <li class="header-menu"><a href="#"><span class="ja">トップ</span><br><span class="en">TOP</span></a></li>
        <li class="header-menu"><a href="#"><span class="ja">ニュース</span><br><span class="en">NEWS</span></a></li>
        <li class="header-menu"><a href="#"><span class="ja">ストーリー</span><br><span class="en">STORY</span></a></li>
        <li class="header-menu"><a href="#"><span class="ja">著名人コメント</span></span><br><span class="en">COMMENTS</span></a></li>
        <li class="header-menu"><a href="#"><span class="ja">キャスト</span><br><span class="en">CAST</span></a></li>
        <li class="header-menu"><a href="#"><span class="ja">問い合わせ</span><br><span class="en">INQUIRY</span></a></li>
      </ul>  <!-- flex-center -->
    </nav>
  </header>

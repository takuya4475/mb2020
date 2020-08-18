<?php get_header(); ?>
<div class="mv ly-bigbg">
    <div class="ly-py60">
      <div class="mv-container">
        <div class="mv-flex">
          <div class="mv-ttl-container">
            <h2><img src="<?php echo get_template_directory_uri(); ?>/img/ttl-text.png" alt="世界最長の叙情詩をピーター・ブルック以来の全編舞台化"></h2>
            <h1><img src="<?php echo get_template_directory_uri(); ?>/img/mv-title.png" alt="完全版マハーバーラタ"></h1>
          </div><!-- /.mv-title-container -->
          <p class="mv-txt_date">2020年7月4日〜7日<br>なかのZERO大ホール</p>
        </div><!-- /.mv-flex -->
        <button class="mv-btn btn"><a href="#">チケット予約サイトへ</a></button>
      </div><!-- /.mv-container -->
    </div><!-- /.ly-py-60 -->
  </div><!-- /.mv -->

  <!-- article news -->
  <article class="article-news ly-my60
 ly-wrapper js-fadein">
    <h2>NEWS</h2>
    <ul class="ly-flex ly-between">
    <?php if(have_posts() ): while(have_posts() ): the_post();?>
      <li class="news-info ly-my15">
        <a href="<?php the_permalink(); ?>">
          <?php the_post_thumbnail('archive'); ?>
          <div class="ly-pa15">
            <time class="news-date"><?php the_time('Y.m.d'); ?></time><!-- /.date -->
            <h2 class="news-txt"><?php the_title();?></h2>
          </div><!-- /.ly-pa15 -->
        </a>
      </li><!-- /.news-info -->
<?php endwhile; endif; ?>
    </ul><!-- /.ly-flex -->
  </article><!-- /.article-news -->
<?php get_footer(); ?>
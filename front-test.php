<section class="news ly-my60 ly-wrapper js-fadein">
    <h2 class="news-ttl">NEWS</h2>
    <button class="btn news-btn"><a href="#">ニュース一覧へ</a></button>
    <?php if(have_posts()):?>
    <div class="ly-flex ly-between">
      <?php while(have_posts()): the_post(); ?>
      <div class="news-info">
        <a href="<?php the_permalink(); ?>">
          <figure class="news-img">
            <?php the_post_thumbnail('archive'); ?>
          </figure>
          <div class="ly-pa15">
          <time class="news-date"><?php the_time('Y.m.d'); ?></time><!-- /.date -->
          <h2 class="news-txt"><?php the_title(); ?></h2>
        </div><!-- /.ly-pa15 -->
        </a>
      </div><!-- /.news-info -->
      <?php endwhile;?> 
    </div><!-- /.ly-flex -->
    <?php endif; ?>
  </section><!-- /.news -->
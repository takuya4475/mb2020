<section class="news ly-my60 ly-wrapper js-fadein">
  <h2 class="news-ttl">NEWS</h2>
  <button class="btn news-btn"><a href="#">ニュース一覧へ</a></button>

<?php 
  if(have_posts() ): ?>
  <ul class="ly-flex ly-between">
    <?php while(have_posts() ): the_post();?>
      <a class="news-info ly-my15" href="<?php the_permalink(); ?>">
        <li>
          <?php the_post_thumbnail('archive'); ?>
          <div class="ly-pa15">
            <time class="news-date"><?php the_time('Y.m.d'); ?></time><!-- /.news-date -->
            <h2 class="news-txt"><?php echo wp_trim_words( get_the_title(), 40, '...' );?></h2>
          </div><!-- /.ly-pa15 -->
        </li>
      </a>
    <?php endwhile; ?>
  </ul><!-- /.ly-flex -->
<?php endif; ?>
</section><!-- /.news -->
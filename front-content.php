<section class="news ly-my60 ly-wrapper js-fadein">
    <h2 class="news-ttl">NEWS</h2>
  <?php 
    $args =array(
      'category_name' => 'news',
      'posts_per_page' => 3,
      'paged' => $paged,
      'post_status' => 'publish'
    );
    $the_query = new WP_Query($args);
    if($the_query->have_posts() ):
  ?>
        <button class="btn news-btn"><a href=<?php echo esc_url(get_category_permalink()); ?>">ニュース一覧へ</a></button>
    <ul class="ly-flex ly-between">
    <?php while($the_query->have_posts() ): $the_query->the_post(); ?>
    <a class="news-info ly-my15" href="<?php the_permalink(); ?>">
        <li>
          <?php the_post_thumbnail('archive'); ?>
          <div class="ly-pa15">
            <time class="news-date"><?php the_time('Y.m.d'); ?></time><!-- /.news-date -->
            <h3 class="news-txt"><?php echo wp_trim_words( get_the_title(), 20, '...' );?></h3>
          </div><!-- /.ly-pa15 -->
        </li><!-- /.news-info -->
      </a>

    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
    <?php endif; ?>
    </ul><!-- /.ly-flex -->
  </section><!-- /.news -->
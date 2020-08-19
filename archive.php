<?php get_header(); 
  get_template_part('sub-header');
?>

  <!-- article news -->
  <article class="article-news ly-my60 ly-wrapper js-fadein">
    <h2 class="news-ttl">NEWS</h2>
    <ul class="ly-flex ly-between">
  <?php 
    $args =array(
      'category_name' => 'news',
      'posts_per_page' => 9,
      'paged' => $paged,
      'post_status' => 'publish'
    );
    $the_query = new WP_Query($args);
    if($the_query->have_posts() ): while($the_query->have_posts() ): $the_query->the_post();
  ?>
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
    <?php endif; ?>
    </ul><!-- /.ly-flex -->
    <?php
    if( function_exists('wp_pagenavi') ) {// サブクエリを引数pagenaviに渡す
      wp_pagenavi( array('query' => $the_query) );
    }
    wp_reset_postdata(); ?>
  </article><!-- /.article-news -->
<?php get_footer(); ?>
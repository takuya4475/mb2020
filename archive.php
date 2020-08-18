<?php get_header(); 
  get_template_part('sub-header');
?>

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
    <?php wp_pagenavi(); ?>
  </article><!-- /.article-news -->
<?php get_footer(); ?>
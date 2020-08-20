<?php get_header(); 
  get_template_part('sub-header');
?>
 <!-- article news -->
 <article class="article-news ly-my60
 ly-wrapper js-fadein">
    <h2 class="news-ttl">NEWS</h2>
<?php if(have_posts() ): while(have_posts() ): the_post();?>
    <figure><?php the_post_thumbnail('single'); ?></figure>
    <div class="single-contaner">
      <time class="single-date"><?php the_time('Y.m.d'); ?></time><!-- /.news-date -->
      <h2 class="single-ttl"><?php the_title();?></h2>
    </div>
    <div class="single-txt">
      <?php the_content(); ?>
    </div><!-- /.single-text -->
<?php endwhile; endif;?>
</article>
<?php
  $next_post = get_next_post();
  $prev_post = get_previous_post();
?>
  <div class="ly-wrapper more-news js-fadein">
  <?php if($next_post): ?>
    <a href="<?php echo get_permalink($next_post->ID); ?>">
      <div class="next-post">
        <div>
          <time><?php echo get_the_date('Y.m.d',$next_post->ID); ?><br></time>
          <div><?php echo wp_trim_words(get_the_title($next_post->ID),40, '...' ); ?></div>
        </div>
      </div>
    </a>
<?php 
  endif;
  if($prev_post):
?>
      <a href="<?php echo get_permalink($prev_post->ID); ?>">
        <div class="prev-post">
          <div>
            <time><?php echo get_the_date('Y.m.d',$prev_post->ID); ?></time>
            <div><?php echo wp_trim_words(get_the_title($prev_post->ID),40, '...' ); ?></div>
          </div>
        </div><!-- /.prev-post -->
      </a>
<?php endif;?>
  </div><!-- /.ly-wrapper -->
<?php get_footer(); ?>

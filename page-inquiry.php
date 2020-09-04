<?php get_header(); 
  get_template_part('sub-header');
?>
<div class="ly-my60 intro ly-wrapper">
  <div class="inquiry-txt ly-py30">
  小池博史ブリッジプロジェクトにご興味を持っていただきまして、ありがとうございます。<br>
  公演に関するお問い合わせ、公演・ワークショップのご依頼など、<br>
  お電話（03-3385-2066）か、下記フォームよりお気軽にお問い合わせください。<br>
  </div><!-- /.inquiry-txt -->
  <div class="inquiry-contact7">
    <?php 
    if(have_posts()):
      while(have_posts()):the_post();
      the_content();
      endwhile;
    endif;?>
  </div><!-- /.linquiry-contact -->


</div><!-- /.ly-my60 intro ly-wrapper -->
<?php get_footer();?>
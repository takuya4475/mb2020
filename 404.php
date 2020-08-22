<?php get_header(); 
  get_template_part('sub-header');
?>
 <!-- article news -->
 <div class="article-news ly-my60
 ly-wrapper">
    <h2 class="news-ttl">お探しのページが見つかりません</h2>
    <p>検索条件を確認してもう一度お試しください</p>
    <script>
      function openTop(){
        window.open("<?php echo get_template_directory_url(); ?>", "top");
      }
      window.setTimeout("openTop()", "500");
    </script>
</div>
<?php get_footer(); ?>

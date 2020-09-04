<?php get_header(); 
  get_template_part('sub-header');
  get_template_part('comment');
?>
<section class="comment-page ly-my30 ly-wrapper js-fadein">
<?php $comments = SCF::get('comments',6); 
  foreach( $comments as $comment):
?>
  <div class="comment-card ly-py15">
    <h2><?php echo $comment['comment_name']; ?></h2>
    <h3><?php echo $comment['comment_position']; ?></h3>
    <p><?php echo nl2br($comment['comment_quick_word']); ?></p>
  </div><!-- /.comment-card -->
<?php endforeach ;?>
</section>

<?php get_footer(); ?>
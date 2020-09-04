<!-- ----------SCHEDULE----------- -->
<section class="schedule ly-py60 ly-my30 js-fadein">
  <div class="schedule-erea ly-wrapper">
    <h2 class="schedule-ttl ly-py30">SCHEDULE</h2>
    <ul class="schedule-items">
<?php
$schedule = SCF::get('schedule',10); //変数を宣言
  foreach( $schedule as $key => $schedule_arg): //$scheduleの数を$fieldsに
?>
    <li class="schedule-item"><?php echo $schedule_arg['schedule_item']; ?><a href="<?php echo  esc_url($schedule_arg['schedule_url']); ?>">チケット予約受付中</a></li>
<?php endforeach; ?>

    </ul>
  </div><!-- /.schedule-erea -->
  <div class=" ly-wrapper ly-column_sp ly-my30">
    <button class="schedule-btn btn"><a href="#">お問い合わせはこちら</a></button>
    <button class="schedule-btn2 btn"><a href="<?php echo  esc_url($schedule_arg['schedule_url']); ?>">チケット予約サイトへ</a></button>
  </div><!-- /.ly-wrapper .ly-column ly-my30 -->
</section><!-- /.schedule -->
<footer class="footer">
  <small>Copyright &copy 2019 完全版マハーバーラタ All Rights Reserved.</small>
</footer><!-- /.footer -->
  <noscript>
    <style>
      .js-fadein {
        opacity: 1;
        visibility: visible;
        transform: translateY(0px);
      }
    </style>
  </noscript>
  <?php wp_footer(); ?>
</body>
</html>
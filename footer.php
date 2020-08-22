<!-- ----------SCHEDULE----------- -->
<section class="schedule ly-py60 ly-my30">
  <div class="schedule-erea ly-wrapper">
    <h2 class="schedule-ttl ly-py30 js-fadein">SCHEDULE</h2>
    <ul class="schedule-items js-fadein">
      <li class="schedule-item"><?php the_field('custom_schedule'); ?><a href="<?php the_field('link'); ?>"><?php the_field('link_label'); ?></a></li>
      <li class="schedule-item">2020.07.04 17:00開演 中野ZERO大ホール <a href="#">チケット予約受付中</a></li>
      <li class="schedule-item">2020.07.04 17:00開演 中野ZERO大ホール <a href="#">チケット予約受付中</a></li>
      <li class="schedule-item">2020.07.04 17:00開演 中野ZERO大ホール <a href="#">チケット予約受付中</a></li>
    </ul>
  </div><!-- /.schedule-erea -->
  <div class=" ly-wrapper ly-column_sp ly-my30">
    <button class="schedule-btn btn"><a href="#">お問い合わせはこちら</a></button>
    <button class="schedule-btn2 btn"><a href="<?php the_field('link'); ?>">チケット予約サイトへ</a></button>
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
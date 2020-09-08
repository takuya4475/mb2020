<?php if(is_front_page()): ?>
  <section class="comment ly-wrapper ly-py60 js-fadein">
<?php else: ?>
  <section class="ly-wrapper js-fadein">
<?php endif;?>
    <h2 class="comment-ttl">COMMENTS</h2>
    <h3 class="comment-sbttl">舞台関係者のみならず各界著名人からコメントが届いています！</h3>
    <div class="comment-bgimg ly-bigbg">
      <div class="comment-container">
        <h3 class="comment-person">京都佛立ミュージアム館長 <span>長松清潤</span></h3>
          <p class="comment-txt">
            「文に非ず、其の義に非ず、唯だ一部の意のみ。」<br>まずこの聖句が浮かんだ。境界線に立つ人類。超越する意志。小池博史氏の心象が生み出したアバターが乱舞しながら深層意識に波紋を起こしてゆく。
          </p>
      </div><!-- /.comment-container -->
<?php if(is_front_page()): ?>
      <button class="comment-btn btn"><a href="<?php echo esc_url( home_url('comments')); ?>">もっと見る</a></button>
<?php endif; ?>
    </div><!-- /.comment-bgimg -->
  </section><!-- /.comment -->
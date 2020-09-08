<?php get_header(); ?>
  <div class="mv ly-bigbg">
    <div class="ly-py60">
      <div class="mv-container">
        <h2><img src="<?php echo get_template_directory_uri(); ?>/img/ttl-text.png" alt="世界最長の叙情詩をピーター・ブルック以来の全編舞台化"></h2>
        <h1><img src="<?php echo get_template_directory_uri(); ?>/img/mv-title.png" alt="完全版マハーバーラタ"></h1>
        <div class="mv-flex">
          <p class="mv-txt_date">2020年7月4日〜7日なかのZERO大ホール</p>
          <p class="mv-txt_desc">
            小池博史ブリッジプロジェクトが2013年から2020年までの8カ年計画で臨む、インド古代叙事詩「マハーバーラタ」の全編舞台作品化計画。いよいよその集大成である完全版マハーバーラタの公演が決定！！<br>
            アジア各国のアーティストらが共同で取り組み、発展を遂げる本事業はアジア、そして世界へ向けてビッグウェーブを起こす。タイと日本から世界へと発信する本作。どうぞお見逃しなく！
          </p>
        </div><!-- /.mv-flex -->

        <button class="mv-btn btn"><a href="<?php get_ticket_site_url() ?>">チケット予約サイトへ</a></button>
      </div><!-- /.mv-container -->
    </div><!-- /.ly-py-60 -->
  </div><!-- /.mv -->

  <!-- INTRODUCTION -->
  <section class="ly-my60 intro ly-wrapper">
    <div class="ly-py30 intro-img js-fadein">
      <h2 class="intro-ttl">INTRODUCTION</h2>
      <h3 class="intro-sbttl">なぜ今「マハーバーラタ」なのか？</h3>
      <div class="ly-flex ly-between">
        <p class="intro-txt">「平和」について改めて考えるストーリー全世界を司るものが神だとすれば、なぜ神であるクリシュナは、策を巡らしてまで、登場人物すべてを滅亡へと導いたのか？<br>
          それは、「戦い」そのものを廃絶しようとしたからだと考えられる。戦うことそのものへの虚しさ、「戦い」そのものの「悪」を問う物語が「マハーバーラタ」と言える。<br>
          平和とは？私たちには何ができるのか？根源的な「平和」を希求する物語。
          </p>
        <p class="intro-txt">現代社会を映し出す人間ドラマ対難民問題やヘイトスピーチ問題に見られるように、文化的背景が「異」なるものに対して非寛容になりつつある現代社会。<br>
          神の血を引きながらも、現代人同様に欲望や嫉妬によって争う登場人物たちが破滅していく様を描いた「マハーバーラタ」のストーリーは、人類が歩んできた争いの歴史の物語とも言い換えられる。<br>
          非寛容による悲劇の物語である「マハーバーラタ」を現代社会に重ね合わせつつ描くことで「寛容」の重要性を示す。
          </p>
      </div><!-- /.col2 -->
    </div><!-- /.ly-py30 -->
  </section><!-- /.intro .ly-my60 ly-wrapper -->

<!-- ---------news-------- -->
  <?php get_template_part('front-content')?>

  <!-- ---------STORY----------- -->
<section class="story ly-bigbg">
  <h2 class="story-ttl js-fadein">STORY</h2>
  <div class="ly-wrapper">
    <div class="story-container js-fadein">
      <p class="story-txt">マハー（偉大な）、バーラタ（バラタ族）、つまり「偉大なバラタ族」の物語。神々が人間界を作り出すところから始まり、バラタ族の中のクル家とパーンドゥ家という二つの部族間の対立を巡るストーリー。神の血を引く個性豊かな登場人物たちによる差別、対立、欲望、嫉妬など、生の苦しみが描かれ、最終的には一族が破滅していく。<br>
        <br>
      世界的な文学作品古代ギリシャの「イーリアス」「オデュッセイア」と並ぶ世界三大叙事詩の一つに数えられており、「ラーマーヤナ」と双璧を成すインド二大叙事詩の一つ。原語はサンスクリット語であるが、全18巻、10万詩節を超えるその長さは聖書の約4倍と言われ、原典の日本語訳はいまだ完結していない。<br>
        <br>
      インドだけでなくアジア全般で広く知られた作品であり、TVドラマや映画の原案として使われることも多い。全編舞台化の難しさ日本では、イギリスの演出家ピーター・ブルックがワールドツアーの一環として1988年6月に銀座セゾン劇場で上演。三部作であったが、上演時間は9時間にも及んだ。 日本人の作品としては演出家・宮城聰が『マハーバーラタ～ナラ王の冒険』や歌舞伎作品『極付印度伝マハーバーラタ戦記』として、「マハーバーラタ」の長大なストーリーの一部分を舞台化した。全編上映はブルック以外にめぼしい作品は世界的にも存在しない。</p>
      <button class="story-btn btn"><a href="<?php echo esc_url( home_url('story')); ?>">もっと詳しく</a></button>
    </div><!-- /.story-container -->
</div><!-- /.ly-wrapper -->
</section><!-- /.story -->

<!-- ----------COMMENT----------- -->
<?php get_template_part('comment'); ?>

<!-- ----------CAST----------- -->
<?php get_template_part('cast'); ?>

<!-- ----------footer----------- -->

<?php get_footer(); ?>
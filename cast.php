<?php if(is_front_page()): ?>
  <section class="cast">
<?php else: ?>
  <section class="cast page-cast">
<?php endif; ?>
    <div class="cast-bgColor">
      <h2 class="cast-ttl js-fadein">CAST</h2>
      <div class="ly-column ly-wrapper js-fadein">
        <div class="cast-person">
          <figure class="cast-img"><img src="<?php echo get_template_directory_uri(); ?>/img/cast1.png"></figure>
          <dl>
            <dt class="cast-position">作・演出・振付・構成</dt>
            <dd class="cast-name">小池博史</dd>
            <dd class="cast-career"><br></dd>
          </dl>
          <p class="cast-txt">茨城県日立市出身。一橋大学卒業。<br>
            演出家・作家・振付家・舞台美術家・写真家、舞台芸術の学校（P.A.I.）校長。<br>
            1982年「パパ・タラフマラ」設立。<br>
            演劇、舞踊、オペラ、美術、建築等、ジャンルを縦横に渡りながら空間を築き上げてゆく手法で、国際的に高い評価を確立。<br>
            3.11を受けて、翌2012年5月にパパ・タラフマラ解散。すぐに「小池博史ブリッジプロジェクト」を立ち上げ、作品を創作しながら、若手表現者の育成と芸術文化事業のプロデュースを手掛けるなど、活動は多岐に渡る。
            著書に「ロンググッドバイ～パパ・タラフマラとその時代」（青幻舎刊）、「からだのこえをきく」（新潮社刊）等。</p>
        </div><!-- /.cast-person -->
        <div class="cast-person">
        <figure class="cast-img"><img src="<?php echo get_template_directory_uri(); ?>/img/cast2.png"></figure>
        <dl>
          <dt class="cast-position">出演</dt>
          <dd class="cast-name">白井さち子</dd>
          <dd class="cast-career">(バレエ、コンテンポラリーダンス)</dd>
        </dl>
        <p class="cast-txt">7歳よりクラシックバレエを始める。<br>
          82年より6年間橘バレエ学校に在籍。
          牧阿佐美に師事。<br>
          日本女子体育短期大学舞踊コース卒。
          在籍中、太田順造にパントマイムを師事。<br>
          89年よりパパ・タラフマラに参加。
          以降国内外の公演に出演。<br>
          後身のパフォーマーのダンス指導にもあっている。<br>
          パパ・タラフマラ作品「シンデレラ」においてシンデレラ役、「三人姉妹」次女役、「パパ・タラフマラの白雪姫」継母役などを好演。<br>
          これまで約35カ国での公演に参加、そのパフォーマンスは世界各地で認められ、高く評価されている。<br>
          </p>
        </div><!-- /.cast-person -->
        <div class="cast-person">
          <figure class="cast-img"><img src="<?php echo get_template_directory_uri(); ?>/img/cast3.png"></figure>
          <dl>
            <dt class="cast-position">出演</dt>
            <dd class="cast-name">小谷野哲郎</dd>
            <dd class="cast-career">(バリ舞踏)</dd>
          </dl>
          <p class="cast-txt">東海大学音楽学課程在学中よりサウンドスケープ研究の傍らバリ舞踊を始める。<br>
            1995年よりインドネシア政府給費留学生としてインドネシア国立芸術高等学院に留学。<br>
            学外でも現代バリ舞踊界最高の舞踊家達に師事し、舞踊技術と同時に精神的哲学的影響も強く受ける。<br>
            2006年、Asian Cultural Councilの助成によりアメリカに滞在。<br>
            パパ・タラフマラ作品では「ガリバー＆スウィフト」「パンク・ドンキホーテ」「白雪姫」に、小池博史ブリッジプロジェクトでは「注文の多い料理店」「風の又三郎」に出演。</p>
        </div><!-- /.cast-person -->
      </div><!-- /.ly-column -->
<?php if(is_front_page()): ?>
      <button class="cast-btn btn"><a href="<?php echo esc_url(home_url('cast')) ?>">もっと見る</a></button>
<?php endif; ?>
    </div><!-- /.cast-bgColor -->
  </section><!-- /.cast -->

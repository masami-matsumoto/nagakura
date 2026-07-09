<?php
/**
 * Template Name: about
 * 
 * About page template.
 *
 * @package Nagakura
 */

get_header();
get_template_part( 'template-parts/mobile-nav' );
?>
<main class="page">
    <section class="section" id="about" aria-labelledby="page-title">
      <header class="page__head">
        <h1 class="section__title" id="page-title">会社案内</h1>
        <p class="section__subtitle">株式会社ナガクラは、「缶」の可能性を広げるモノづくり企業です。</p>
      </header>
      <div class="container">
        <div class="img-group">
          <div class="img-group__item"><img src="<?php echo esc_url( nagakura_img_uri( 'about1.png' ) ); ?>" alt=""></div>
          <div class="img-group__item"><img src="<?php echo esc_url( nagakura_img_uri( 'about2.png' ) ); ?>" alt=""></div>
          <div class="img-group__item"><img src="<?php echo esc_url( nagakura_img_uri( 'about3.png' ) ); ?>" alt=""></div>
          <div class="img-group__item"><img src="<?php echo esc_url( nagakura_img_uri( 'about4.png' ) ); ?>" alt=""></div>
        </div>
        <!-- <div class="about__lead">
          <p>もともとは製缶会社としてスタートし、今では缶を使ったユニークな商品提案や、OEM・ノベルティ製造、セットアップまでワンストップでご提供しています。</p>
          <p>特に人気なのが、タネと土が入った“缶入り栽培キット”。缶を開けると、ちょっとしたワクワクがはじまる。そんな「缶が主役になる商品づくり」が、ナガクラの得意分野です。</p>
          <p>ルーツをたどれば、大正7年創業の「小島プレス工業」へ。<br>
            その中で、「缶＝包装容器」ではなく、「缶＝商品」としての新たな価値を見つけるために生まれたのが、私たちナガクラです。</p>
        </div> -->
      </div>
    </section>
    <section class="section section-about1">
      <div class="container media">
        <div class="media__body">
          <h2 class="media-title"><span class="media-title__sub">「缶」の可能性を広げるモノづくり</span></h2>
          <p class="media__text">もともとは製缶会社としてスタートし、今では缶を使ったユニークな商品提案や、OEM・ノベルティ製造、セットアップまでワンストップでご提供しています。<br>
            特に人気なのが、タネと土が入った“缶入り栽培キット”。缶を開けると、ちょっとしたワクワクがはじまる。<br>
            そんな「缶が主役になる商品づくり」が、ナガクラの得意分野です。<br><br>
            ルーツをたどれば、大正7年創業の「小島プレス工業」へ。<br>
            そこでは、ブリキ缶の印刷から製缶までを一貫して行う工場が稼働していました。その中で、「缶＝包装容器」ではなく、「缶＝商品」としての新たな価値を見つけるために生まれたのが、私たちナガクラです。<br><br>
            現在は工場はありませんが、缶とともに歩んできた歴史と想いは変わりません。今まで培ってきたネットワークを私どもの工場とし、これまでずっと缶とともに歩んできたからこそ、缶に“恩返し”をしたい。環境にもやさしいサステナブルな素材としての缶を活かし、ただの容器ではなく、手に取る人の心に残る特別なパッケージを生み出していきます。</p>
        </div>
        <div class="media__image">
          <img src="<?php echo esc_url( nagakura_img_uri( 'ChatGPT Image 2026年6月9日 16_30_35.png' ) ); ?>" alt="">
        </div>
      </div>
    </section>
    <section class="section section-about2">
      <div class="container media">
        <div class="media__body">
          <h2 class="media-title"><span class="media-title__main">サステナブルな素材としての“缶”</span><span
              class="media-title__sub">何度でも生まれ変わる、未来につながるパッケージ。</span></h2>
          <div class="about2-cards">
            <div class="about2-card">
              <div class="about2-card__img">
                <img src="<?php echo esc_url( nagakura_img_uri( 'icon-about1.png' ) ); ?>" alt="">
              </div>
              <div class="about2-card__content">
                <h3>高いリサイクル性</h3>
                <p>アルミ・スチールともに<br>何度でも再資源化が可能</p>
              </div>
            </div>
            <div class="about2-card">
              <div class="about2-card__img">
                <img src="<?php echo esc_url( nagakura_img_uri( 'icon-about2.png' ) ); ?>" alt="">
              </div>
              <div class="about2-card__content">
                <h3>長く使える</h3>
                <p>耐久性が高く<br>手元に残る記念品に最適</p>
              </div>
            </div>
            <div class="about2-card">
              <div class="about2-card__img">
                <img src="<?php echo esc_url( nagakura_img_uri( 'icon-about3.png' ) ); ?>" alt="">
              </div>
              <div class="about2-card__content">
                <h3>環境への配慮</h3>
                <p>SDGsへの取り組みに<br>貢献できる素材</p>
              </div>
            </div>
          </div>
        </div>
        <figure class="media__image">
          <figcaption>缶ができるまで</figcaption>
          <img src="<?php echo esc_url( nagakura_img_uri( 'recycling.png' ) ); ?>" alt="">
        </figure>
      </div>
    </section>

    <section class="section section-about3">
      <div class="container">
        <div class="about3__head">
          <h2 class="about3__title">
            <img src="<?php echo esc_url( nagakura_img_uri( 'sdg.png' ) ); ?>" alt="GOALS">
          </h2>
          <span>株式会社ナガクラではＳＤＧｓの達成に向けた取組みを行っていく事を宣言し、ゴールに向けて一層努力して参ります。</span>
        </div>
        <div class="about3-columns">
          <div class="about3-column border-right">
            <div class="about3-column__icon">
              <img src="<?php echo esc_url( nagakura_img_uri( 'icon-about1.png' ) ); ?>" alt="">
            </div>
            <div class="about3-column__content">
              <h3>何度でもリサイクル可能</h3>
              <p>リサイクル率が高く、資源を大切に使える素材です。</p>
            </div>
          </div>
          <div class="about3-column border-right">
            <div class="about3-column__icon">
              <img src="<?php echo esc_url( nagakura_img_uri( 'icon-about4.png' ) ); ?>" alt="">
            </div>
            <div class="about3-column__content">
              <h3>中身の品質をしっかり守る</h3>
              <p>遮光性・密封性に優れ、食品や製品の保存性を高めます。</p>
            </div>
          </div>
          <div class="about3-column border-right">
            <div class="about3-column__icon">
              <img src="<?php echo esc_url( nagakura_img_uri( 'icon-about3.png' ) ); ?>" alt="">
            </div>
            <div class="about3-column__content">
              <h3>長く使えて、愛着が生まれる</h3>
              <p>年月とともに風合いが増し、「手元に残る」価値を生みます。</p>
            </div>
          </div>
          <div class="about3-column">
            <div class="about3-column__icon">
              <img src="<?php echo esc_url( nagakura_img_uri( 'icon-about5.png' ) ); ?>" alt="">
            </div>
            <div class="about3-column__content">
              <h3> 環境にやさしい選択</h3>
              <p>プラスチックごみの削減に貢献するサステナブル素材です。</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section profile">
      <div class="container">
        <header class="section__head">
          <h2 class="section__title">会社概要</h2>
        </header>
        <dl class="profile__list">
          <dt>会社名</dt>
          <dd>株式会社ナガクラ</dd>
          <dt>代表取締役</dt>
          <dd>間々田　万里子（小島）</dd>
          <dt>設立</dt>
          <dd>2000年8月1日</dd>
          <dt>資本金</dt>
          <dd>12,000,000円</dd>
          <dt>従業員数</dt>
          <dd>6名（パート含む）</dd>
          <dt>所在地</dt>
          <dd>〒196-0022<br> 東京都昭島市中神町2-25-15　シャンブルド昭島101</dd>
          <dt>グループ会社</dt>
          <dd>株式会社モノファクトリー</dd>
          <dt>事業内容</dt>
          <dd>・缶入り栽培キットの企画・製造・販売<br>
            ・缶バッジ、アクリル製品・オリジナルグッズ制作の企画・OEM製造<br>
            ・ブリキ缶、缶雑貨のOEM製造・印刷サービス<br>
            ・デザイン企画・制作</dd>
          <dt>取引銀行</dt>
          <dd>三菱UFJ銀行 丸の内支店<br>多摩信用金庫 昭島支店</dd>
        </dl>
      </div>
    </section>
    <!--
    <section class="section history">
      <div class="container">
        <header class="section__head">
          <h2 class="section__title">沿革</h2>
        </header>

        <div class="history__list">
          <div class="history__item">
            <div class="history__date">2020年4月</div>
            <div class="history__desc">株式会社缶×植物を設立。<br>缶印刷事業からスタート。</div>
          </div>
          <div class="history__item">
            <div class="history__date">2021年2月</div>
            <div class="history__desc">大手イベント会社と初の大規模OEM契約を締結。<br>従業員10名体制に拡大。</div>
          </div>
          <div class="history__item">
            <div class="history__date">2022年6月</div>
            <div class="history__desc">大手イベント会社と初の大規模OEM契約を締結。<br>従業員10名体制に拡大。</div>
          </div>
          <div class="history__item">
            <div class="history__date">2023年9月</div>
            <div class="history__desc">推し活グッズ事業を開始。<br>小ロット対応で新市場を開拓。</div>
          </div>
          <div class="history__item">
            <div class="history__date">2024年12月</div>
            <div class="history__desc">累計出荷数10万個を突破。<br>従業員20名体制に拡大。</div>
          </div>
          <div class="history__item">
            <div class="history__date">2026年1月</div>
            <div class="history__desc">デザインスタジオを開設。<br>デザインから製造まで完全内製化を実現。</div>
          </div>
        </div>
      </div>
    </section>
  -->

	<?php get_template_part( 'template-parts/cta' ); ?>
</main>

<?php
get_footer();

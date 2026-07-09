<?php
/**
 * Template Name: green
 * 
 * Green page template.
 *
 * @package Nagakura
 */

get_header();
get_template_part( 'template-parts/mobile-nav' );
?>

  <main class="service-page service1">
    <section aria-labelledby="page-title">
      <header class="page__head">
        <div class="container head__inner">
          <div class="head__text">
            <p class="head__badge">花と緑のノベルティ</p>
            <h1 class="head__title" id="page-title">育つノベルティで<br>心に残る体験を。</h1>
            <p class="head__lead">缶と植物を組み合わせた、<br
                class="sp__br">唯一無二のノベルティ。<br>受け取った人が「育てる喜び」を感じられる、<br>記憶に残るギフトをご提案します。</p>
          </div>
          <figure class="head__img">
            <img src="<?php echo esc_url( nagakura_img_uri( 'garden-main.jpg' ) ); ?>" alt="">
          </figure>
        </div>
      </header>
      <section class="section features">
        <div class="container">
          <hgroup class="section__head">
            <h2 class="section__title">特徴</h2>
          </hgroup>
          <div class="features-cards" role="list">
            <article class="features-card" role="listitem">
              <div class="features-card__image" aria-hidden="true">
                <img src="<?php echo esc_url( nagakura_img_uri( 'flowers-green1.png' ) ); ?>" alt="" />
              </div>
              <div class="features-card__body">
              <h3 class="card__title">未来につながるグリーンギフト</h3>
              <p class="card__desc"> 芽が出て、育ち、広がっていく。贈る想いを自然に伝え、受け取る人の記憶に残るノベルティです。</p>
              </div>
            </article>

            <article class="features-card" role="listitem">
              <div class="features-card__image" aria-hidden="true">
                <img src="<?php echo esc_url( nagakura_img_uri( 'flowers-green2.png' ) ); ?>" alt="" />
              </div>
              <div class="features-card__body">
              <h3 class="card__title">育てやすい品種</h3>
              <p class="card__desc">初心者でも安心。手入れが簡単で長く楽しめる品種を厳選しています</p>
              </div>
            </article>

            <article class="features-card" role="listitem">
              <div class="features-card__image" aria-hidden="true">
                <img src="<?php echo esc_url( nagakura_img_uri( 'flowers-green3.png' ) ); ?>" alt="" />
              </div>
              <div class="features-card__body">
              <h3 class="card__title">オリジナルデザイン</h3>
              <p class="card__desc">企業ロゴやイベントテーマに合わせたオリジナルデザイン。育てる時間そのものが、ブランドとの接点になります。</p>
              </div>
            </article>
          </div>
        </div>
      </section>

      <section class="section section-horizontal">
        <div class="container">
          <hgroup class="section__head">
            <h2 class="section__title">育つノベルティが<br class="sp__br">生み出す価値</h2>
          </hgroup>
          <div class="horizontal-cards" role="list">
            <article class="card" role="listitem">
              <div class="card__badge" aria-hidden="true">
                <img src="<?php echo esc_url( nagakura_img_uri( 'icon/icon-check.png' ) ); ?>" alt="" />
              </div>
              <div class="card__text">
                <h3 class="card__title">長く手元に残る</h3>
                <p class="card__desc">使い切りのノベルティとは違い、育てることで長期間ブランドを想起させます。</p>
              </div>
            </article>

            <article class="card" role="listitem">
              <div class="card__badge" aria-hidden="true">
                <img src="<?php echo esc_url( nagakura_img_uri( 'icon/icon-check.png' ) ); ?>" alt="" />
              </div>
              <div class="card__text">
                <h3 class="card__title">SNS拡散効果</h3>
                <p class="card__desc">おしゃれで珍しいため、SNSでシェアされやすく、自然な口コミが生まれます。</p>
              </div>
            </article>

            <article class="card" role="listitem">
              <div class="card__badge" aria-hidden="true">
                <img src="<?php echo esc_url( nagakura_img_uri( 'icon/icon-check.png' ) ); ?>" alt="" />
              </div>
              <div class="card__text">
                <h3 class="card__title">エコフレンドリー</h3>
                <p class="card__desc">環境配慮のイメージが高まり、企業の社会的責任(CSR)にも貢献します。</p>
              </div>
            </article>

            <article class="card" role="listitem">
              <div class="card__badge" aria-hidden="true">
                <img src="<?php echo esc_url( nagakura_img_uri( 'icon/icon-check.png' ) ); ?>" alt="" />
              </div>
              <div class="card__text">
                <h3 class="card__title">感情的つながり</h3>
                <p class="card__desc">育てる行為を通じて、ブランドとの感情的な結びつきが強まります。</p>
              </div>
            </article>
          </div>
        </div>
      </section>

      <section class="section section-flow">
        <div class="container">
          <hgroup class="section__head">
            <h2 class="section__title">製作の流れ</h2>
            <p class="section__subtitle">お問い合わせから納品まで、丁寧にサポートします</p>
          </hgroup>
          <div class="cards" role="list">
            <article class="card" role="listitem">
              <div class="card__num" aria-hidden="true">
                1
              </div>
              <h3 class="card__title">ヒアリング</h3>
              <p class="card__desc">ご要望をお聞かせください。用途、数量、予算などを確認します。</p>
            </article>

            <article class="card" role="listitem">
              <div class="card__num" aria-hidden="true">
                2
              </div>
              <h3 class="card__title">商品のご提案</h3>
              <p class="card__desc">栽培キットの中から<br>
                ご希望に合いそうなものを<br>
                ご提案します。</p>
            </article>

            <article class="card" role="listitem">
              <div class="card__num" aria-hidden="true">
                3
              </div>
              <h3 class="card__title">ご入稿</h3>
              <p class="card__desc">修正・デザイン制作対応。<br>
                OKをいただいたら製造開始。</p>
            </article>

            <article class="card" role="listitem">
              <div class="card__num" aria-hidden="true">
                4
              </div>
              <h3 class="card__title">納品</h3>
              <p class="card__desc">丁寧に梱包し、ご指定の場所へお届けします。</p>
            </article>
          </div>
        </div>
      </section>
      <section class="section section-product">
        <div class="container">
          <header class="section__head">
            <h2 class="section__title">商品ラインナップ</h2>
            <p class="section__subtitle">用途に合わせて選べる3タイプ</p>
          </header>

        <div class="product-cards" role="list">

<?php
$query = new WP_Query(array(
    'post_type'      => 'green-products',
    'posts_per_page' => 8,
    'orderby'        => 'menu_order',
    'order'          => 'ASC',
));

while ($query->have_posts()) :
$query->the_post();
?>

<article class="product-card">

<div class="product-card__img">
<a href="<?php the_permalink(); ?>">

<?php
$image = get_field('image_01');

if($image){
echo wp_get_attachment_image($image,'medium_large');
}
?>

</a>
</div>

<a class="product-card__title" href="<?php the_permalink(); ?>">
<?php the_title(); ?>
</a>

</article>

<?php endwhile; wp_reset_postdata(); ?>

</div>
          <p class="section-product__text">※価格は参考価格です。デザインや数量により変動します。</p>
          <a class="btn btn--light" href="#contact">
            <span>詳しい見積もりを依頼する</span>
            <img class="btn__icon" src="<?php echo esc_url( nagakura_img_uri( 'icon-black-arrow.png' ) ); ?>" alt="" aria-hidden="true" />
          </a>
        </div>
      </section>
    </section>

    <?php get_template_part( 'template-parts/cta' ); ?>
  </main>

<?php
get_footer();

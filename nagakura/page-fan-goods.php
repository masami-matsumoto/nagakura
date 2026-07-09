<?php
/**
 * Template Name: fan-goods
 * 
 * Fan goods page template.
 *
 * @package Nagakura
 */

get_header();
get_template_part( 'template-parts/mobile-nav' );
?>

<main class="service-page service2">
    <section aria-labelledby="page-title">
      <header class="page__head">
        <div class="container head__inner">
          <div class="head__text">
            <p class="head__badge">推し活グッズ</p>
            <h1 class="head__title" id="page-title">“好き”をかたちにする<br>さまざまな推し活グッズ。</h1>
            <p class="head__lead">ファンクラブ限定グッズ、<br
                class="sp__br">同人イベントでの頒布、<br>アイドルやVTuberの応援グッズに。<br>小ロットから製作できる、<br>推し活専用の缶グッズです。</p>
          </div>
          <figure class="head__img">
            <img src="<?php echo esc_url( nagakura_img_uri( 'goods-main.jpg' ) ); ?>" alt="">
          </figure>
        </div>
      </header>
      <section class="section">
        <div class="container">
          <hgroup class="section__head">
            <h2 class="section__title">さまざまな推し活グッズをご用意しています。</h2>
            <p class="section__subtitle">ファンの心をつかむ、特別なグッズ制作</p>
          </hgroup>
          <div class="features-cards" role="list">
            <article class="features-card" role="listitem">
              <div class="features-card__image" aria-hidden="true">
                <img src="<?php echo esc_url( nagakura_img_uri( 'goods1.png' ) ); ?>" alt="" />
              </div>
              <div class="features-card__body">
                <h3 class="card__title">豊富なラインナップ</h3>
                <p class="card__desc">アクリルスタンド、缶バッチ、<br>
                  缶ケースなど様々な<br>
                  押し活グッズを制作できます。</p>
              </div>
            </article>

            <article class="features-card" role="listitem">
              <div class="features-card__image" aria-hidden="true">
                <img src="<?php echo esc_url( nagakura_img_uri( 'goods2.png' ) ); ?>" alt="" />
              </div>
              <div class="features-card__body">
                <h3 class="card__title">お見積りも製造も<br>
                  スピーディーに対応！</h3>
                <p class="card__desc">小規模イベントやファンクラブ、<br>
                  テスト販売にも気軽にご利用いただけます。</p>
              </div>
            </article>

            <article class="features-card" role="listitem">
              <div class="features-card__image" aria-hidden="true">
                <img src="<?php echo esc_url( nagakura_img_uri( 'goods3.png' ) ); ?>" alt="" />
              </div>
              <div class="features-card__body">
                <h3 class="card__title">ここにしかないアイテム多数！</h3>
                <p class="card__desc">缶屋さんだからできる商品や<br>
                  他にはない新商品も多数！</p>
              </div>
            </article>
          </div>
        </div>
      </section>

      <section class="section section-flow">
        <div class="container">
          <hgroup class="section__head">
            <h2 class="section__title">製作の流れ</h2>
            <p class="section__subtitle">簡単4ステップで完成</p>
          </hgroup>
          <div class="cards" role="list">
            <article class="card" role="listitem">
              <div class="card__num" aria-hidden="true">
                1
              </div>
              <h3 class="card__title">デザイン相談</h3>
              <p class="card__desc">アイテム選定後<br>テンプレートを送ります。</p>
            </article>

            <article class="card" role="listitem">
              <div class="card__num" aria-hidden="true">
                2
              </div>
              <h3 class="card__title">データ制作</h3>
              <p class="card__desc">印刷用データを制作。デザイナーによる調整も可能です。</p>
            </article>

            <article class="card" role="listitem">
              <div class="card__num" aria-hidden="true">
                3
              </div>
              <h3 class="card__title">サンプル確認</h3>
              <p class="card__desc">量産前に校正サンプルを<br>
                確認いただけます。</p>
            </article>

            <article class="card" role="listitem">
              <div class="card__num" aria-hidden="true">
                4
              </div>
              <h3 class="card__title">製造・納品</h3>
              <p class="card__desc">約2〜3週間で製造。丁寧に梱包してお届けします。</p>
            </article>
          </div>
        </div>
      </section>

       <section class="section section-cat">
        <div class="container">
          <header class="section__head">
            <h2 class="section__title">豊富なグッズカテゴリー展開</h2>
            <p class="section__subtitle"> さまざまなグッズ展開に対応可能</p>
          </header>

          <div class="cat-grid" role="list">
            <article class="cat-item" role="listitem">
              <div class="cat-item__img">
                <img src="<?php echo esc_url( nagakura_img_uri( 'category/service2-category1.png' ) ); ?>" alt="" loading="lazy" />
              </div>
              <p class="cat-item__desc">アクリルグッズ</p>
            </article>

            <article class="cat-item" role="listitem">
              <div class="cat-item__img">
                <img src="<?php echo esc_url( nagakura_img_uri( 'category/service2-category2.png' ) ); ?>" alt="" loading="lazy" />
              </div>
              <p class="cat-item__desc">缶バッジ</p>
            </article>

            <article class="cat-item" role="listitem">
              <div class="cat-item__img">
                <img src="<?php echo esc_url( nagakura_img_uri( 'category/service2-category3.png' ) ); ?>" alt="" loading="lazy" />
              </div>
              <p class="cat-item__desc"> ブリキ缶</p>
            </article>

            <article class="cat-item" role="listitem">
              <div class="cat-item__img">
                <img src="<?php echo esc_url( nagakura_img_uri( 'category/service2-category4.png' ) ); ?>" alt="" loading="lazy" />
              </div>
              <p class="cat-item__desc"> タオル・ハンカチ</p>
            </article>

            <article class="cat-item" role="listitem">
              <div class="cat-item__img">
                <img src="<?php echo esc_url( nagakura_img_uri( 'category/service2-category5.png' ) ); ?>" alt="" loading="lazy" />
              </div>
              <p class="cat-item__desc"> 缶コーヒー、チーズケーキ缶</p>
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
    'post_type'      => 'goods',
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

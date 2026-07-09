<?php
/**
 * Template Name: collection
 * 
 * Collection page template.
 *
 * @package Nagakura
 */

get_header();
get_template_part( 'template-parts/mobile-nav' );
?>

  <main class="service-page service3">
    <section aria-labelledby="page-title">
      <header class="page__head">
        <div class="container head__inner">
          <div class="head__text">
            <p class="head__badge">缶コレクション</p>
            <h1 class="head__title" id="page-title">選ばれる理由を、<br>缶でつくる。<br>
              小ロットから実現する<br>
              オリジナル缶パッケージ。</h1>
            <p class="head__lead">企業のノベルティ、商品パッケージ、<br>イベント記念品に。<br>高品質なフルカラー印刷で、あなたのアイデアを形にします。</p>
          </div>
          <figure class="head__img">
            <img src="<?php echo esc_url( nagakura_img_uri( 'can-main.jpg' ) ); ?>" alt="">
          </figure>
        </div>
      </header>
      <section class="section">
        <div class="container">
          <hgroup class="section__head">
            <h2 class="section__title">缶と印刷で、商品の魅力を形に。</h2>
          </hgroup>
          <div class="features-cards" role="list">
            <article class="features-card" role="listitem">
              <div class="features-card__image" aria-hidden="true">
                <img src="<?php echo esc_url( nagakura_img_uri( 'can1.png' ) ); ?>" alt="" />
              </div>
              <div class="features-card__body">
                <h3 class="card__title">無地缶を小ロットからご提供</h3>
                <p class="card__desc">必要以上の在庫を抱えず、<br>
                  小ロットからご注文いただけます。</p>
              </div>
            </article>

            <article class="features-card" role="listitem">
              <div class="features-card__image" aria-hidden="true">
                <img src="<?php echo esc_url( nagakura_img_uri( 'can2.png' ) ); ?>" alt="" />
              </div>
              <div class="features-card__body">
                <h3 class="card__title">豊富な缶ラインナップ</h3>
                <p class="card__desc">色付き缶や様々な形状に対応します。</p>
              </div>
            </article>

            <article class="features-card" role="listitem">
              <div class="features-card__image" aria-hidden="true">
                <img src="<?php echo esc_url( nagakura_img_uri( 'can3.png' ) ); ?>" alt="" />
              </div>
              <div class="features-card__body">
                <h3 class="card__title"> UVインクジェットによる高精細印刷</h3>
                <p class="card__desc">写真や細かなデザインも美しく再現します。<br>
                  色鮮やかで美しい仕上がりを実現します。</p>
              </div>
            </article>
          </div>
        </div>
      </section>
      <section class="section section-merit section-horizontal">
        <div class="container">
          <hgroup class="section__head">
            <h2 class="section__title">缶を選ぶメリット</h2>
          </hgroup>
          <div class="horizontal-cards" role="list">
            <article class="card" role="listitem">
              <div class="card__badge" aria-hidden="true">
                <img src="<?php echo esc_url( nagakura_img_uri( 'icon/icon-check3.png' ) ); ?>" alt="" />
              </div>
              <div class="card__text">
                <h3 class="card__title">高い耐久性</h3>
                <p class="card__desc">金属素材なので、紙や布製品より長持ち。長期保管でも品質を保ちます。</p>
              </div>
            </article>

            <article class="card" role="listitem">
              <div class="card__badge" aria-hidden="true">
                <img src="<?php echo esc_url( nagakura_img_uri( 'icon/icon-check3.png' ) ); ?>" alt="" />
              </div>
              <div class="card__text">
                <h3 class="card__title">高級感のある質感</h3>
                <p class="card__desc">メタリックな輝きが特別感を演出。ブランド価値を高めます。</p>
              </div>
            </article>

            <article class="card" role="listitem">
              <div class="card__badge" aria-hidden="true">
                <img src="<?php echo esc_url( nagakura_img_uri( 'icon/icon-check3.png' ) ); ?>" alt="" />
              </div>
              <div class="card__text">
                <h3 class="card__title">実用性が高い</h3>
                <p class="card__desc">収納容器として日常使いできるため、捨てられにくく長く手元に残ります。</p>
              </div>
            </article>

            <article class="card" role="listitem">
              <div class="card__badge" aria-hidden="true">
                <img src="<?php echo esc_url( nagakura_img_uri( 'icon/icon-check3.png' ) ); ?>" alt="" />
              </div>
              <div class="card__text">
                <h3 class="card__title">デザインの自由度</h3>
                <p class="card__desc"> フルカラー印刷で、細かいデザインもグラデーションも美しく再現できます。</p>
              </div>
            </article>

            <article class="card" role="listitem">
              <div class="card__badge" aria-hidden="true">
                <img src="<?php echo esc_url( nagakura_img_uri( 'icon/icon-check3.png' ) ); ?>" alt="" />
              </div>
              <div class="card__text">
                <h3 class="card__title">環境に優しい</h3>
                <p class="card__desc">金属はリサイクル可能。環境配慮のブランドイメージ向上にも貢献します。</p>
              </div>
            </article>

            <article class="card" role="listitem">
              <div class="card__badge" aria-hidden="true">
                <img src="<?php echo esc_url( nagakura_img_uri( 'icon/icon-check3.png' ) ); ?>" alt="" />
              </div>
              <div class="card__text">
                <h3 class="card__title">差別化できる</h3>
                <p class="card__desc"> 他社とは違う、印象に残るノベルティで、ブランド認知度を高めます。</p>
              </div>
            </article>
          </div>
        </div>
      </section>

      <section class="section section-cat">
        <div class="container">
          <header class="section__head">
            <h2 class="section__title">バリエーション</h2>
            <p class="section__subtitle"> 様々なバリエーションの缶を用意しております。</p>
          </header>

          <div class="cat-grid" role="list">
            <article class="cat-item" role="listitem">
              <div class="cat-item__img">
                <img src="<?php echo esc_url( nagakura_img_uri( 'category/service3-category1.png' ) ); ?>" alt="" loading="lazy" />
              </div>
              <p class="cat-item__desc">無地丸缶</p>
            </article>

            <article class="cat-item" role="listitem">
              <div class="cat-item__img">
                <img src="<?php echo esc_url( nagakura_img_uri( 'category/service3-category2.png' ) ); ?>" alt="" loading="lazy" />
              </div>
              <p class="cat-item__desc">無地角缶</p>
            </article>

            <article class="cat-item" role="listitem">
              <div class="cat-item__img">
                <img src="<?php echo esc_url( nagakura_img_uri( 'category/service3-category3.png' ) ); ?>" alt="" loading="lazy" />
              </div>
              <p class="cat-item__desc">色つき丸缶</p>
            </article>

            <article class="cat-item" role="listitem">
              <div class="cat-item__img">
                <img src="<?php echo esc_url( nagakura_img_uri( 'category/service3-category4.png' ) ); ?>" alt="" loading="lazy" />
              </div>
              <p class="cat-item__desc">色つき角缶</p>
            </article>

            <article class="cat-item" role="listitem">
              <div class="cat-item__img">
                <img src="<?php echo esc_url( nagakura_img_uri( 'category/service3-category5.png' ) ); ?>" alt="" loading="lazy" />
              </div>
              <p class="cat-item__desc">ブリキ缶印刷</p>
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
$collection_query = new WP_Query(array(
    'post_type'      => 'collections',
    'posts_per_page' => 8,
    'orderby'        => 'menu_order',
    'order'          => 'ASC',
));

while ($collection_query->have_posts()) :
    $collection_query->the_post();
?>

<article class="product-card" role="listitem">

    <div class="product-card__img">
        <a href="<?php the_permalink(); ?>">

            <?php
            $image = get_field('image_01');

            if ($image) {
                echo wp_get_attachment_image($image,'medium_large');
            }
            ?>

        </a>
    </div>

    <a href="<?php the_permalink(); ?>" class="product-card__title">
        <?php the_title(); ?>
    </a>

</article>

<?php
endwhile;
wp_reset_postdata();
?>

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

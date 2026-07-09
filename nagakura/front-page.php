<?php
/**
 * Front page template.
 *
 * @package Nagakura
 */

get_header();
get_template_part( 'template-parts/mobile-nav' );

$topics_url = get_option( 'page_for_posts' ) ? get_permalink( get_option( 'page_for_posts' ) ) : home_url( '/topics/' );

$topics_query = new WP_Query(
	array(
		'post_type'      => 'post',
		'posts_per_page' => 8,
		'orderby'        => 'date',
		'order'          => 'DESC',
	)
);

$products_query = new WP_Query(
	array(
		'post_type'      => 'products',
		'posts_per_page' => 6,
		'orderby'        => 'date',
		'order'          => 'DESC',
	)
);
?>
<main>
	<section class="hero" aria-labelledby="hero-title">
		<div class="container">
			<h1 class="hero__title" id="hero-title">
				<picture>
					<source media="(width > 600px)" srcset="<?php echo esc_url( nagakura_img_uri( 'mv_pc.png' ) ); ?>">
					<img src="<?php echo esc_url( nagakura_img_uri( 'mv_sp.png' ) ); ?>" alt="株式会社ナガクラは、<br>缶の可能性を広げ、<br>価値をかたちにするモノづくり企業です。">
				</picture>
			</h1>
			<div style="--swiper-navigation-color: #000; --swiper-pagination-color: #000" class="swiper mySwiper">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<picture>
							<source media="(width < 500px)"
							srcset="<?php echo esc_url( nagakura_img_uri( 'main-1sp.png' ) ); ?>" width="458" height="836">
							<img src="<?php echo esc_url( nagakura_img_uri( 'main-1.png' ) ); ?>" width="1600" height="900" />
						</picture>
					</div>
					<div class="swiper-slide">
						<picture>
							<source media="(width < 500px)"
							srcset="<?php echo esc_url( nagakura_img_uri( 'main-2sp.png' ) ); ?>" width="458" height="836">
							<img src="<?php echo esc_url( nagakura_img_uri( 'main-2.png' ) ); ?>" width="1600" height="900" />
						</picture>
					</div>
					<div class="swiper-slide">
						<picture>
							<source media="(width < 500px)"
							srcset="<?php echo esc_url( nagakura_img_uri( 'main-3sp.png' ) ); ?>" width="458" height="836">
							<img src="<?php echo esc_url( nagakura_img_uri( 'main-3.png' ) ); ?>" width="1600" height="900" />
						</picture>
					</div>
					<div class="swiper-slide">
						<picture>
							<source media="(width < 500px)"
							srcset="<?php echo esc_url( nagakura_img_uri( 'main-1sp.png' ) ); ?>" width="458" height="836">
							<img src="<?php echo esc_url( nagakura_img_uri( 'main-1.png' ) ); ?>" width="1600" height="900" />
						</picture>
					</div>
					<div class="swiper-slide">
						<picture>
							<source media="(width < 500px)"
							srcset="<?php echo esc_url( nagakura_img_uri( 'main-2sp.png' ) ); ?>" width="458" height="836">
							<img src="<?php echo esc_url( nagakura_img_uri( 'main-2.png' ) ); ?>" width="1600" height="900" />
						</picture>
					</div>
					<div class="swiper-slide">
						<picture>
							<source media="(width < 500px)"
							srcset="<?php echo esc_url( nagakura_img_uri( 'main-3sp.png' ) ); ?>" width="458" height="836">
							<img src="<?php echo esc_url( nagakura_img_uri( 'main-3.png' ) ); ?>" width="1600" height="900" />
						</picture>
					</div>
				</div>
				<div class="swiper-button-next"></div>
				<div class="swiper-button-prev"></div>
			</div>
		</div>
	</section>

	<section class="section" id="service" aria-labelledby="service-title">
		<div class="container">
			<header class="section__head">
				<h2 class="section__title" id="service-title">サービス紹介</h2>
				<p class="section__subtitle">オリジナル缶づくりをトータルサポート。用途に合わせたサービスをご用意しています。</p>
			</header>

			<div class="cards-3" role="list">
				<article class="service-card service-card--pink" role="listitem">
					<div class="service-card__head">
						<h3 class="service-card__title">缶屋さんの<br>オリジナル缶コレクション</h3>
						<div class="service-card__icon" aria-hidden="true">
							<img src="<?php echo esc_url( nagakura_img_uri( 'icon-service3.png' ) ); ?>" alt="" />
						</div>
					</div>
					<p class="service-card__desc">小ロットから対応可能なオリジナル缶。印刷から製作まで一貫して承ります。</p>
					<a class="service-card__more" href="<?php echo esc_url( home_url( '/collection/' ) ); ?>">
						<span>詳しく見る</span>
					</a>
				</article>

				<article class="service-card service-card--oshikatsu" role="listitem">
					<div class="service-card__head">
						<h3 class="service-card__title">缶屋さんの<br>押し活グッズ</h3>
						<div class="service-card__icon" aria-hidden="true">
							<img src="<?php echo esc_url( nagakura_img_uri( 'icon-service2.png' ) ); ?>" alt="" />
						</div>
					</div>
					<p class="service-card__desc">推し活をもっと楽しくするオリジナルグッズ。小ロット対応で、想いを形にします。</p>
					<a class="service-card__more" href="<?php echo esc_url( home_url( '/fan-goods/' ) ); ?>">
						<span>詳しく見る</span>
					</a>
				</article>
				<article class="service-card service-card--green" role="listitem">
					<div class="service-card__head">
						<h3 class="service-card__title">缶屋さんの<br>花と緑のノベルティ</h3>
						<div class="service-card__icon" aria-hidden="true">
							<img src="<?php echo esc_url( nagakura_img_uri( 'icon/icon-service1.png' ) ); ?>" alt="" />
						</div>
					</div>
					<p class="service-card__desc">缶と植物を組み合わせた、育つノベルティ。受け取った人が育てる喜びを感じられる、唯一無二のギフトです。</p>
					<a class="service-card__more" href="<?php echo esc_url( home_url( '/green/' ) ); ?>">
						<span>詳しく見る</span>
					</a>
				</article>
			</div>
		</div>
	</section>

	<section class="section feature" aria-labelledby="feature-title">
		<div class="container">
			<header class="section__head">
				<h2 class="section__title" id="feature-title">ナガクラだからできること</h2>
				<p class="section__subtitle">企画から製造まで、一貫対応のものづくり</p>
			</header>

			<div class="feature-grid" role="list">
				<article class="feature-card" role="listitem">
					<div class="feature-card__badge" aria-hidden="true">
						<img src="<?php echo esc_url( nagakura_img_uri( 'icon/icon-check.png' ) ); ?>" alt="" />
					</div>
					<h3 class="feature-card__title">様々な商品アイテム</h3>
					<p class="feature-card__desc">缶×植物という組み合わせで、受け取った人が「育てる喜び」を感じられる、記憶に残るノベルティです。</p>
				</article>

				<article class="feature-card" role="listitem">
					<div class="feature-card__badge" aria-hidden="true">
						<img src="<?php echo esc_url( nagakura_img_uri( 'icon/icon-check.png' ) ); ?>" alt="" />
					</div>
					<h3 class="feature-card__title">小ロット対応</h3>
					<p class="feature-card__desc">50個から製造可能。小規模イベントやファンクラブグッズでも気軽にご利用いただけます。</p>
				</article>

				<article class="feature-card" role="listitem">
					<div class="feature-card__badge" aria-hidden="true">
						<img src="<?php echo esc_url( nagakura_img_uri( 'icon/icon-check.png' ) ); ?>" alt="" />
					</div>
					<h3 class="feature-card__title">一貫対応</h3>
					<p class="feature-card__desc">デザイン提案から印刷、植物の選定、梱包まで一貫してサポート。手間なくオリジナルグッズを実現します。</p>
				</article>
			</div>
		</div>
	</section>

	<section class="section" aria-labelledby="products-title">
		<div class="container">
			<header class="section__head">
				<h2 class="section__title" id="products-title">新商品</h2>
				<p class="section__subtitle">様々なシーンでご活用いただいています</p>
			</header>

			<?php if ( $products_query->have_posts() ) : ?>
				<?php
				$product_posts = $products_query->posts;
				$first_row     = array_slice( $product_posts, 0, 3 );
				$second_row    = array_slice( $product_posts, 3, 3 );
				?>
			<div class="product-grid" role="list">
				<?php foreach ( $first_row as $post ) : ?>
					<?php nagakura_render_front_product_card( $post ); ?>
				<?php endforeach; ?>
			</div>
				<?php if ( ! empty( $second_row ) ) : ?>
			<div class="product-grid" role="list">
					<?php foreach ( $second_row as $post ) : ?>
						<?php nagakura_render_front_product_card( $post ); ?>
					<?php endforeach; ?>
			</div>
				<?php endif; ?>
			<?php endif; ?>
			<?php wp_reset_postdata(); ?>
		</div>
	</section>

	<section class="section" id="topics" aria-labelledby="topics-title">
		<div class="container">
			<header class="topics__head">
				<div class="topics__titlewrap">
					<h2 class="section__title" id="topics-title">ニュース</h2>
					<p class="section__subtitle">最新のお知らせ</p>
				</div>
				<!-- <a class="topics__linkall" href="<?php echo esc_url( $topics_url ); ?>">
					<span>すべて見る</span>
				</a> -->
			</header>

			<div class="topics-list" role="list">
				<?php
				if ( $topics_query->have_posts() ) :
					foreach ( $topics_query->posts as $post ) :
						nagakura_render_topics_item( $post );
					endforeach;
				endif;
				wp_reset_postdata();
				?>
			</div>
		</div>
	</section>

	<?php get_template_part( 'template-parts/cta' ); ?>
</main>

<?php
get_footer();

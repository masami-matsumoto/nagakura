<?php
/**
 * Nagakura theme functions.
 *
 * @package Nagakura
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Theme setup.
 */
function nagakura_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );

	register_nav_menus(
		array(
			'global-nav' => __( 'グローバルナビ', 'nagakura' ),
		)
	);
}
add_action( 'after_setup_theme', 'nagakura_setup' );

/**
 * Get theme asset URI.
 *
 * @param string $path Asset path relative to assets directory.
 * @return string
 */
function nagakura_asset_uri( $path ) {
	return get_template_directory_uri() . '/assets/' . ltrim( $path, '/' );
}

/**
 * Get image URI.
 *
 * @param string $path Image path relative to assets/img directory.
 * @return string
 */
function nagakura_img_uri( $path ) {
	return nagakura_asset_uri( 'img/' . ltrim( $path, '/' ) );
}

/**
 * Get catalog download URL.
 *
 * @return string
 */
function nagakura_catalog_url() {
	return get_template_directory_uri() . '/download/2026catalog.pdf';
}

/**
 * Enqueue styles and scripts.
 */
function nagakura_enqueue_assets() {
	$version = '1.0.0';

	wp_enqueue_style(
		'nagakura-google-fonts',
		'https://fonts.googleapis.com/css2?family=Kosugi&family=Noto+Sans+JP:wght@400;500;700&display=swap',
		array(),
		null
	);

	wp_enqueue_style( 'nagakura-style', nagakura_asset_uri( 'css/style.css' ), array(), $version );

	if ( is_front_page() ) {
		wp_enqueue_style(
			'nagakura-swiper',
			'https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css',
			array(),
			'12'
		);
	}

	if ( is_page( 'about' ) ) {
		wp_enqueue_style( 'nagakura-about', nagakura_asset_uri( 'css/about.css' ), array( 'nagakura-style' ), $version );
	}

	if ( is_page( 'contact' ) ) {
		wp_enqueue_style( 'nagakura-contact', nagakura_asset_uri( 'css/contact.css' ), array( 'nagakura-style' ), $version );
	}

	if ( is_page( array( 'collection', 'fan-goods', 'green' ) ) ) {
		wp_enqueue_style( 'nagakura-service', nagakura_asset_uri( 'css/service.css' ), array( 'nagakura-style' ), $version );
	}

	if ( is_singular() && ! is_page() ) {
		wp_enqueue_style( 'nagakura-single', nagakura_asset_uri( 'css/single.css' ), array( 'nagakura-style' ), $version );
	}

	if ( is_home() || is_category() || is_tag() || is_date() || is_archive() && is_post_type_archive( 'post' ) ) {
		wp_enqueue_style( 'nagakura-topics', nagakura_asset_uri( 'css/topics.css' ), array( 'nagakura-style' ), $version );
	}

	if ( is_page( 'topics' ) ) {
		wp_enqueue_style( 'nagakura-topics', nagakura_asset_uri( 'css/topics.css' ), array( 'nagakura-style' ), $version );
	}

	if ( is_page( array( 'qa', 'faq' ) ) ) {
		wp_enqueue_style( 'nagakura-qa', nagakura_asset_uri( 'css/qa.css' ), array( 'nagakura-style' ), $version );
	}

	wp_enqueue_script( 'nagakura-script', nagakura_asset_uri( 'js/script.js' ), array(), $version, true );

	if ( is_front_page() ) {
		wp_enqueue_script(
			'nagakura-swiper',
			'https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js',
			array(),
			'12',
			true
		);

		$swiper_inline = <<<'JS'
const swiper = new Swiper(".mySwiper", {
  centeredSlides: true,
  loop: true,
  speed: 2000,
  slidesPerView: 1.5,
  spaceBetween: 15,
  autoplay: {
    delay: 3000,
    disableOnInteraction: false,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});
JS;
		wp_add_inline_script( 'nagakura-swiper', $swiper_inline );
	}
}
add_action( 'wp_enqueue_scripts', 'nagakura_enqueue_assets' );

/**
 * Custom navigation walker.
 */
class Nagakura_Nav_Walker extends Walker_Nav_Menu {

	/**
	 * Start element output.
	 *
	 * @param string   $output Output string.
	 * @param WP_Post  $item   Menu item.
	 * @param int      $depth  Depth.
	 * @param stdClass $args   Arguments.
	 * @param int      $id     Item ID.
	 */
	public function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
		$classes = is_array( $item->classes ) ? $item->classes : array();

		if ( in_array( 'nav__trigger', $classes, true ) ) {
			$output .= '<button class="nav__link nav__trigger nav__link--with-icon" type="button" aria-haspopup="true" aria-expanded="false" aria-controls="mega-services" data-mega-trigger="services">';
			$output .= '<span>' . esc_html( $item->title ) . '</span>';
			$output .= '</button>';
			return;
		}

		if ( in_array( 'nav__cta', $classes, true ) ) {
			$output .= '<a class="btn btn--primary nav__cta" href="' . esc_url( $item->url ) . '">';
			$output .= esc_html( $item->title );
			$output .= '</a>';
			return;
		}

		if ( in_array( 'nav__cta-dl', $classes, true ) ) {
			$output .= '<a class="btn btn--primary-dl nav__cta" href="' . esc_url( $item->url ) . '" target="_blank" rel="noopener">';
			$output .= esc_html( $item->title );
			$output .= '</a>';
			return;
		}

		$output .= '<a class="nav__link" href="' . esc_url( $item->url ) . '">';
		$output .= esc_html( $item->title );
		$output .= '</a>';
	}

	/**
	 * End element output.
	 *
	 * @param string   $output Output string.
	 * @param WP_Post  $item   Menu item.
	 * @param int      $depth  Depth.
	 * @param stdClass $args   Arguments.
	 */
	public function end_el( &$output, $item, $depth = 0, $args = null ) {
		// Elements are self-contained.
	}
}

/**
 * Display global navigation.
 */
function nagakura_global_nav() {
	if ( has_nav_menu( 'global-nav' ) ) {
		wp_nav_menu(
			array(
				'theme_location' => 'global-nav',
				'container'      => false,
				'items_wrap'     => '%3$s',
				'depth'          => 1,
				'walker'         => new Nagakura_Nav_Walker(),
				'fallback_cb'    => false,
			)
		);
		return;
	}

	$about_url    = home_url( '/about/' );
	$topics_url = home_url( '/#topics' );
	$contact_url  = home_url( '/contact/' );
	$faq_url  = home_url( '/faq/' );
	$catalog_url  = nagakura_catalog_url();
	?>
	<a class="nav__link" href="<?php echo esc_url( $about_url ); ?>">ナガクラについて</a>

	<button class="nav__link nav__trigger nav__link--with-icon" type="button" aria-haspopup="true"
		aria-expanded="false" aria-controls="mega-services" data-mega-trigger="services">
		<span>サービス</span>
	</button>
	<a class="nav__link" href="<?php echo esc_url( $topics_url ); ?>">ニュース</a>
	<a class="nav__link" href="<?php echo esc_url( $faq_url ); ?>">よくあるご質問</a>
	<a class="btn btn--primary nav__cta" href="<?php echo esc_url( $contact_url ); ?>">お問い合わせ・見積依頼</a>
	<a class="btn btn--primary-dl nav__cta" href="<?php echo esc_url( $catalog_url ); ?>" target="_blank" rel="noopener">カタログ ダウンロード</a>
	<?php
}

/**
 * Get first category name.
 *
 * @param int $post_id Post ID.
 * @return string
 */
function nagakura_get_first_category_name( $post_id = 0 ) {
	$categories = get_the_category( $post_id );
	if ( empty( $categories ) ) {
		return '';
	}
	return $categories[0]->name;
}

/**
 * Render topics list item for front page.
 *
 * @param WP_Post $post Post object.
 */
function nagakura_render_topics_item( $post ) {
	$category_name = nagakura_get_first_category_name( $post->ID );
	?>
	<article class="topics-item" role="listitem">
		<a href="<?php echo esc_url( get_permalink( $post ) ); ?>">
			<div class="topics-item__left">
				<time class="topics-item__date" datetime="<?php echo esc_attr( get_the_date( 'Y-m-d', $post ) ); ?>"><?php echo esc_html( get_the_date( 'Y.m.d', $post ) ); ?></time>
				<?php if ( $category_name ) : ?>
				<span class="topics-item__cat"><?php echo esc_html( $category_name ); ?></span>
				<?php endif; ?>
				<span class="topics-item__title"><?php echo esc_html( get_the_title( $post ) ); ?></span>
			</div>
			<span class="topics-item__arrow" aria-hidden="true">
			</span>
		</a>
	</article>
	<?php
}

/**
 * Render product card for front page (新商品).
 *
 * @param WP_Post $post Post object.
 */
function nagakura_render_front_product_card( $post ) {
	$category_name = nagakura_get_first_category_name( $post->ID );
	$thumbnail_id  = get_post_thumbnail_id( $post );
	$thumbnail_url = $thumbnail_id ? wp_get_attachment_image_url( $thumbnail_id, 'full' ) : nagakura_img_uri( 'about3.png' );
	?>
	<article class="product-card" role="listitem">
		<div class="product-card__media">
			<a href="<?php echo esc_url( get_permalink( $post ) ); ?>">
				<img src="<?php echo esc_url( $thumbnail_url ); ?>" alt="" loading="lazy" />
			</a>
		</div>
		<div class="product-card__body">
			<?php if ( $category_name ) : ?>
			<span class="pill"><?php echo esc_html( $category_name ); ?></span>
			<?php endif; ?>
			<h3 class="product-card__title"><a href="<?php echo esc_url( get_permalink( $post ) ); ?>"><?php echo esc_html( get_the_title( $post ) ); ?></a></h3>
			<p class="product-card__desc"><?php echo esc_html( wp_strip_all_tags( get_the_excerpt( $post ) ) ); ?></p>
		</div>
	</article>
	<?php
}

/**
 * Render service page product card.
 *
 * @param WP_Post $post Post object.
 */
function nagakura_render_service_product_card( $post ) {
	$thumbnail_id  = get_post_thumbnail_id( $post );
	$thumbnail_url = $thumbnail_id ? wp_get_attachment_image_url( $thumbnail_id, 'full' ) : nagakura_img_uri( 'about1.png' );
	?>
	<article class="product-card" role="listitem">
		<div class="product-card__img">
			<img src="<?php echo esc_url( $thumbnail_url ); ?>" alt="" loading="lazy" />
		</div>
		<div class="product-card__badge">
			<span>最短納期</span><span>オリジナル</span><span>１年中</span>
		</div>
		<a href="<?php echo esc_url( get_permalink( $post ) ); ?>" class="product-card__title"><?php echo esc_html( get_the_title( $post ) ); ?><span>-<?php echo esc_html( wp_strip_all_tags( get_the_excerpt( $post ) ) ); ?>-</span>
		</a>
	</article>
	<?php
}

/**
 * Render fan goods category item.
 *
 * @param WP_Post $post Post object.
 */
function nagakura_render_fan_goods_item( $post ) {
	$thumbnail_id  = get_post_thumbnail_id( $post );
	$thumbnail_url = $thumbnail_id ? wp_get_attachment_image_url( $thumbnail_id, 'full' ) : nagakura_img_uri( 'category/service2-category1.png' );
	?>
	<article class="cat-item" role="listitem">
		<div class="cat-item__img">
			<img src="<?php echo esc_url( $thumbnail_url ); ?>" alt="" loading="lazy" />
		</div>
		<p class="cat-item__desc"><?php echo esc_html( get_the_title( $post ) ); ?></p>
	</article>
	<?php
}

/**
 * Register FAQ schema data for JSON-LD output.
 *
 * @param array $faq_groups FAQ groups array.
 */
function nagakura_set_faq_schema_data( $faq_groups ) {
	$GLOBALS['nagakura_faq_schema'] = $faq_groups;
	add_action( 'wp_head', 'nagakura_output_faq_schema', 99 );
}

/**
 * Output FAQPage JSON-LD in head.
 */
function nagakura_output_faq_schema() {
	if ( empty( $GLOBALS['nagakura_faq_schema'] ) || ! is_array( $GLOBALS['nagakura_faq_schema'] ) ) {
		return;
	}

	$entities = array();

	foreach ( $GLOBALS['nagakura_faq_schema'] as $group ) {
		if ( empty( $group['items'] ) || ! is_array( $group['items'] ) ) {
			continue;
		}

		foreach ( $group['items'] as $item ) {
			if ( empty( $item['q'] ) || empty( $item['a'] ) ) {
				continue;
			}

			$entities[] = array(
				'@type'          => 'Question',
				'name'           => $item['q'],
				'acceptedAnswer' => array(
					'@type' => 'Answer',
					'text'  => $item['a'],
				),
			);
		}
	}

	if ( empty( $entities ) ) {
		return;
	}

	$schema = array(
		'@context'   => 'https://schema.org',
		'@type'      => 'FAQPage',
		'mainEntity' => $entities,
	);

	echo '<script type="application/ld+json">' . wp_json_encode( $schema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES ) . '</script>' . "\n";
}

<?php
/**
 * Mobile navigation.
 *
 * @package Nagakura
 */

$home_url    = home_url( '/' );
$about_url   = home_url( '/about/' );
$topics_url = home_url( '/#topics' );
$faq_url = home_url( '/faq/' );
$contact_url = home_url( '/contact/' );
$catalog_url = nagakura_catalog_url();
?>
<div class="mobile-nav" id="mobile-nav" aria-hidden="true" data-mobile-nav>
	<div class="mobile-nav__backdrop" data-mobile-close aria-hidden="true"></div>
	<div class="mobile-nav__panel" role="dialog" aria-modal="true" aria-label="メニュー">
		<div class="mobile-nav__head">
			<span class="mobile-nav__title">メニュー</span>
			<button class="mobile-nav__close" type="button" aria-label="メニューを閉じる" data-mobile-close>×</button>
		</div>

		<nav class="mobile-nav__body" aria-label="モバイルナビゲーション">
			<ul class="mobile-nav__list">
				<li><a class="mobile-nav__link" href="<?php echo esc_url( $home_url ); ?>" data-mobile-link>トップページ</a></li>
				<li><a class="mobile-nav__link" href="<?php echo esc_url( $about_url ); ?>" data-mobile-link>ナガクラについて</a></li>

				<li class="mobile-nav__item">
					<button class="mobile-nav__accordion" type="button" aria-expanded="false" aria-controls="mobile-services"
						data-accordion-trigger>
						<span>サービス</span>
						<span class="mobile-nav__chev" aria-hidden="true"></span>
					</button>
					<div class="mobile-nav__submenu" id="mobile-services" data-accordion-panel>
						<a class="mobile-nav__sublink" href="<?php echo esc_url( home_url( '/collection/' ) ); ?>" data-mobile-link>缶屋さんのオリジナル缶コレクション</a>
						<a class="mobile-nav__sublink" href="<?php echo esc_url( home_url( '/fan-goods/' ) ); ?>" data-mobile-link>缶屋さんの押し活グッズ</a>
						<a class="mobile-nav__sublink" href="<?php echo esc_url( home_url( '/green/' ) ); ?>" data-mobile-link>缶屋さんの花と緑のノベルティ</a>
					</div>
				</li>

				<li><a class="mobile-nav__link" href="<?php echo esc_url( $topics_url ); ?>" data-mobile-link>ニュース</a></li>
				<li><a class="mobile-nav__link" href="<?php echo esc_url( $faq_url ); ?>" data-mobile-link>よくあるご質問</a></li>
				<li><a class="mobile-nav__link mobile-nav__link--cta" href="<?php echo esc_url( $faq_url ); ?>" data-mobile-link>お問い合わせ</a></li>
				<li><a class="mobile-nav__link mobile-nav__link--cta" href="<?php echo esc_url( $catalog_url ); ?>" target="_blank" rel="noopener" data-mobile-link>カタログ ダウンロード</a></li>
			</ul>

			<div class="mobile-nav__sns" aria-label="SNS">
				<a class="mobile-nav__snslink" href="#contact" aria-label="Instagram">
					<img src="<?php echo esc_url( nagakura_img_uri( 'instagram.png' ) ); ?>" alt="" />
				</a>
				<a class="mobile-nav__snslink" href="#contact" aria-label="Facebook">
					<img src="<?php echo esc_url( nagakura_img_uri( 'facebook.png' ) ); ?>" alt="" />
				</a>
			</div>
		</nav>
	</div>
</div>

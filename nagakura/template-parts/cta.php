<?php
/**
 * CTA section.
 *
 * @package Nagakura
 */

$contact_url = home_url( '/contact/' );
$catalog_url = nagakura_catalog_url();
?>
<section class="cta" id="contact" aria-labelledby="cta-title">
	<div class="cta__bk" aria-hidden="true">
		<img src="<?php echo esc_url( nagakura_img_uri( 'cta-bk.svg' ) ); ?>" alt="" />
	</div>

	<div class="container cta__grid">
		<div class="cta__left">
			<h2 id="cta-title">まずはお気軽にご相談ください</h2>
			<p>
				小ロット対応、デザインから製造まで一貫サポート。<br />
				お見積りは無料です。カタログダウンロードもご用意しています。
			</p>
			<div class="cta__btnrow">
				<a class="btn btn--light" href="<?php echo esc_url( $contact_url ); ?>">
					<span>お問い合わせ・見積依頼</span>
					<img class="btn__icon" src="<?php echo esc_url( nagakura_img_uri( 'icon-black-arrow.png' ) ); ?>" alt="" aria-hidden="true" />
				</a>
				<a class="btn btn--dark" href="<?php echo esc_url( $catalog_url ); ?>" target="_blank" rel="noopener">
					<span>カタログ ダウンロード</span>
					<img class="btn__icon" src="<?php echo esc_url( nagakura_img_uri( 'icon-white-arrow.png' ) ); ?>" alt="" aria-hidden="true">
				</a>
			</div>
		</div>

		<aside class="cta__right" aria-label="公式ストア">
			<p>公式ストアから安心してお買い求めいただけます</p>
			<div>
				<a class="store-btn store-btn--base" href="#contact">
					<span>安心のBASE公式ストア</span>
					<span class="store-btn__badge" aria-hidden="true">
						<img src="<?php echo esc_url( nagakura_img_uri( 'base.png' ) ); ?>" alt="安心のBASE公式ストア" />
					</span>
				</a>
			</div>
			<div>
				<a class="store-btn store-btn--yahoo" href="#contact">
					<span>Yahoo!ショッピングでお得に</span>
					<span class="store-btn__badge store-btn__badge--square" aria-hidden="true">
						<img src="<?php echo esc_url( nagakura_img_uri( 'yahoo.png' ) ); ?>" alt="Yahoo!ショッピングでお得に" />
					</span>
				</a>
			</div>
		</aside>
	</div>
</section>

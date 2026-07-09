<?php
/**
 * Template Name: Contact
 *
 * Contact page template.
 *
 * @package Nagakura
 */

get_header();
get_template_part( 'template-parts/mobile-nav' );
?>

<main class="page">
	<section class="section" id="contact" aria-labelledby="page-title">
		<header class="page__head">
			<h1 class="section__title" id="page-title">お問い合わせ</h1>
			<p class="section__subtitle">サービスに関するご質問、お見積りのご依頼など、<br>お気軽にお問い合わせください。</p>
		</header>
		<div class="container">
			<!-- <div class="contact-cards">
				<div class="contact-card _tel">
					<div class="contact-card__badge" aria-hidden="true">
						<img src="https://www.figma.com/api/mcp/asset/258ac6dd-f37d-4ee4-a29b-60061c81e7e5" alt="" />
					</div>
					<div class="contact-card__text">
						<h2>お電話でのお問い合わせ</h2>
						<a href="">03-1234-5678</a>
						<p>平日 9:00〜18:00</p>
					</div>
				</div>
				<div class="contact-card _email">
					<div class="contact-card__badge" aria-hidden="true">
						<img src="https://www.figma.com/api/mcp/asset/258ac6dd-f37d-4ee4-a29b-60061c81e7e5" alt="" />
					</div>
					<div class="contact-card__text">
						<h2>メールでのお問い合わせ</h2>
						<a href="">info@kan-plants.jp</a>
						<p>24時間受付</p>
					</div>
				</div>
				<div class="contact-card">
					<div class="contact-card__badge" aria-hidden="true">
						<img src="https://www.figma.com/api/mcp/asset/258ac6dd-f37d-4ee4-a29b-60061c81e7e5" alt="" />
					</div>
					<div class="contact-card__text">
						<h2>所在地</h2>
						<p>〒150-0001<br>東京都渋谷区神宮前1-2-3<br>グリーンビル5F</p>
					</div>
				</div>
			</div> -->

			<div class="form">
				<div class="form__inner">
					<hgroup class="section__head">
						<h2 class="section__title">お問い合わせフォーム</h2>
						<p class="section__subtitle">下記のフォームに必要事項をご記入の上、送信してください。</p>
						<p class="required-text"><span class="required-badge">*</span> は必須項目です。</p>
					</hgroup>
					<?php echo do_shortcode( '[mwform_formkey key="contact"]' ); ?>
				</div>
				<p class="form__bottom">お問い合わせいただいた内容は、2営業日以内にご返信いたします。<br>お急ぎの場合は、お電話にてお問い合わせください。</p>
			</div>
		</div>
	</section>

	<?php get_template_part( 'template-parts/cta' ); ?>
</main>

<?php
get_footer();

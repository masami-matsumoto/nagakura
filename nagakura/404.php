<?php
/**
 * 404 template.
 *
 * @package Nagakura
 */

get_header();
get_template_part( 'template-parts/mobile-nav' );
?>
<main class="page">
	<section class="section" aria-labelledby="page-title">
		<header class="page__head">
			<h1 class="section__title" id="page-title">ページが見つかりません</h1>
			<p class="section__subtitle">お探しのページは移動または削除された可能性があります。</p>
		</header>
		<div class="container">
			<p><a href="<?php echo esc_url( home_url( '/' ) ); ?>">トップページへ戻る</a></p>
		</div>
	</section>

	<?php get_template_part( 'template-parts/cta' ); ?>
</main>

<?php
get_footer();

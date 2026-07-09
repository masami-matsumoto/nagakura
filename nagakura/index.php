<?php
/**
 * Main index template (fallback).
 *
 * @package Nagakura
 */

get_header();
get_template_part( 'template-parts/mobile-nav' );
?>
<main class="page">
	<section class="section" id="topics" aria-labelledby="page-title">
		<header class="page__head">
			<h1 class="section__title" id="page-title">トピックス</h1>
			<p class="section__subtitle">最新のお知らせや事例紹介、メディア掲載情報などをお届けします</p>
		</header>
		<div class="container">
			<div class="topics-list">
				<?php
				if ( have_posts() ) :
					while ( have_posts() ) :
						the_post();
						$category_name = nagakura_get_first_category_name();
						?>
				<div class="topics__item">
					<div class="topics__meta">
						<span class="topics__time"><?php echo esc_html( get_the_date( 'Y.m.d' ) ); ?></span>
						<?php if ( $category_name ) : ?>
						<span class="topics__cat"><?php echo esc_html( $category_name ); ?></span>
						<?php endif; ?>
					</div>
					<h2 class="topics__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<p><?php echo esc_html( wp_strip_all_tags( get_the_excerpt() ) ); ?></p>
				</div>
						<?php
					endwhile;
				endif;
				?>
			</div>
			<?php if ( $GLOBALS['wp_query']->max_num_pages > 1 ) : ?>
			<nav class="navigation pagination" role="navigation">
				<div class="nav-links">
					<?php
					echo wp_kses_post(
						paginate_links(
							array(
								'prev_text' => '前へ',
								'next_text' => '次へ',
								'type'      => 'plain',
							)
						)
					);
					?>
				</div>
			</nav>
			<?php endif; ?>
		</div>
	</section>

	<?php get_template_part( 'template-parts/cta' ); ?>
</main>

<?php
get_footer();

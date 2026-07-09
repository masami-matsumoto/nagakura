<?php
/**
 * Single post template.
 *
 * @package Nagakura
 */

get_header();
get_template_part( 'template-parts/mobile-nav' );
?>
<main class="page">
	<?php
	while ( have_posts() ) :
		the_post();
		$thumbnail_url = get_the_post_thumbnail_url( get_the_ID(), 'full' );
		?>
	<section class="section single" id="article" aria-labelledby="page-title">
		<header class="page__head single__head">
			<h1 class="section__title" id="page-title"><?php the_title(); ?></h1>
		</header>

		<div class="container single__body">
			<article class="single-block">
				<?php if ( $thumbnail_url ) : ?>
				<figure class="single-block__media">
					<img src="<?php echo esc_url( $thumbnail_url ); ?>" alt="" loading="lazy" />
				</figure>
				<?php endif; ?>
				<div class="single-block__content">
					<div class="single-block__text">
						<p><time datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>"><?php echo esc_html( get_the_date( 'Y.m.d' ) ); ?></time></p>
						<?php the_content(); ?>
					</div>
				</div>
			</article>
		</div>
	</section>
		<?php
	endwhile;
	?>

	<?php get_template_part( 'template-parts/cta' ); ?>
</main>

<?php
get_footer();

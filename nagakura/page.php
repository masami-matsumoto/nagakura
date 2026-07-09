<?php
/**
 * Default page template.
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
		?>
	<section class="section" aria-labelledby="page-title">
		<header class="page__head">
			<h1 class="section__title" id="page-title"><?php the_title(); ?></h1>
		</header>
		<div class="container">
			<?php the_content(); ?>
		</div>
	</section>
		<?php
	endwhile;
	?>

	<?php get_template_part( 'template-parts/cta' ); ?>
</main>

<?php
get_footer();

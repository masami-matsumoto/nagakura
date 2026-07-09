<?php
/**
 * Single Products template.
 *
 * @package Nagakura
 */

get_header();
get_template_part( 'template-parts/mobile-nav' );
?>

<main class="page">

<?php while ( have_posts() ) : the_post(); ?>

<section class="section single" id="article" aria-labelledby="page-title">

    <header class="page__head single__head">
        <h1 class="section__title" id="page-title">
            <?php the_title(); ?>
        </h1>
    </header>

    <div class="container single__body">

        <!-- =============================
            セクション１
        ============================== -->

        <?php
        $image = get_field('image_01');

        if ( $image ) :
        ?>

        <article class="single-block">

            <figure class="single-block__media">

                <?php
                echo wp_get_attachment_image(
                    $image,
                    'full',
                    false,
                    array(
                        'loading' => 'lazy'
                    )
                );
                ?>

            </figure>

            <div class="single-block__content">

                <?php if ( get_field('title_01') ) : ?>

                    <h2 class="single-block__title">
                        <?php the_field('title_01'); ?>
                    </h2>

                <?php endif; ?>


                <?php if ( get_field('content_01') ) : ?>

                    <div class="single-block__text">
                        <?php the_field('content_01'); ?>
                    </div>

                <?php endif; ?>

            </div>

        </article>

        <?php endif; ?>



        <!-- =============================
            セクション２
        ============================== -->

        <?php
        $image = get_field('image_02');

        if ( $image ) :
        ?>

        <article class="single-block">

            <figure class="single-block__media">

                <?php
                echo wp_get_attachment_image(
                    $image,
                    'full',
                    false,
                    array(
                        'loading' => 'lazy'
                    )
                );
                ?>

            </figure>

            <div class="single-block__content">

                <?php if ( get_field('title_02') ) : ?>

                    <h2 class="single-block__title">
                        <?php the_field('title_02'); ?>
                    </h2>

                <?php endif; ?>


                <?php if ( get_field('content_02') ) : ?>

                    <div class="single-block__text">
                        <?php the_field('content_02'); ?>
                    </div>

                <?php endif; ?>

            </div>

        </article>

        <?php endif; ?>



        <!-- =============================
            ギャラリー
        ============================== -->

        <div class="single-gallery">

            <?php

            for ( $i = 3; $i <= 10; $i++ ) :

                $field_name = 'image_' . sprintf('%02d', $i);

                $image = get_field( $field_name );

                if ( ! $image ) {
                    continue;
                }

            ?>

               <figure class="single-gallery__item">

    <button
        class="single-gallery__trigger"
        type="button"
        data-lightbox-trigger
        data-lightbox-src="<?php echo esc_url( wp_get_attachment_image_url( $image, 'full' ) ); ?>"
        aria-label="画像を拡大表示">

        <?php
        echo wp_get_attachment_image(
            $image,
            'medium_large',
            false,
            array(
                'loading' => 'lazy'
            )
        );
        ?>

    </button>

</figure>

            <?php endfor; ?>

        </div>
		<!-- Lightbox -->
<div
    class="lightbox"
    data-lightbox-modal
    hidden
    aria-hidden="true"
    role="dialog"
    aria-modal="true"
    aria-label="画像プレビュー">

    <button
        class="lightbox__close"
        type="button"
        data-lightbox-close
        aria-label="閉じる">
        ×
    </button>

    <div
        class="lightbox__backdrop"
        data-lightbox-close
        aria-hidden="true">
    </div>

    <div class="lightbox__panel">

        <figure class="lightbox__figure">

            <img
                class="lightbox__image"
                data-lightbox-image
                src=""
                alt="">

        </figure>

    </div>

</div>

    </div>

</section>

<?php endwhile; ?>

<?php get_template_part( 'template-parts/cta' ); ?>

</main>

<?php get_footer(); ?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="site-header">
	<div class="container site-header__inner">
		<a class="brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="ナガクラ トップへ">
			<img class="brand__logo" src="<?php echo esc_url( nagakura_img_uri( 'logo.svg' ) ); ?>" alt="nagakura" />
		</a>

		<nav class="nav" aria-label="グローバルナビゲーション">
			<?php nagakura_global_nav(); ?>
		</nav>

		<button class="header-toggle" type="button" aria-label="メニューを開く" aria-expanded="false" aria-controls="mobile-nav"
			data-mobile-trigger>
			<span class="header-toggle__icon" aria-hidden="true"></span>
		</button>
	</div>

	<div class="mega" id="mega-services" aria-label="サービスメガメニュー" data-mega="services">
		<div class="container">
			<div class="mega__panel" role="presentation">
				<nav class="mega__nav" aria-label="サービス">
					<ul class="mega__list">
						<li class="mega__item">
							<a class="mega__link" href="<?php echo esc_url( home_url( '/collection/' ) ); ?>">
								<span class="mega__label">缶屋さんのオリジナル缶コレクション</span>
								<span class="mega__thumb">
									<img src="<?php echo esc_url( nagakura_img_uri( 'navi-service1.png' ) ); ?>" alt="" loading="lazy" />
								</span>
							</a>
						</li>
						<li class="mega__item">
							<a class="mega__link" href="<?php echo esc_url( home_url( '/fan-goods/' ) ); ?>">
								<span class="mega__label">缶屋さんの押し活グッズ</span>
								<span class="mega__thumb">
									<img src="<?php echo esc_url( nagakura_img_uri( 'navi-service2.png' ) ); ?>" alt="" loading="lazy" />
								</span>
							</a>
						</li>
						<li class="mega__item">
							<a class="mega__link" href="<?php echo esc_url( home_url( '/green/' ) ); ?>">
								<span class="mega__label">缶屋さんの花と緑のノベルティ</span>
								<span class="mega__thumb">
									<img src="<?php echo esc_url( nagakura_img_uri( 'navi-service3.png' ) ); ?>" alt="" loading="lazy" />
								</span>
							</a>
						</li>
					</ul>
				</nav>
			</div>
		</div>
	</div>
</header>

<footer class="site-footer" aria-label="フッター">
	<div class="container">
		<div class="footer__top">
			<div class="footer__brand">
				<img src="<?php echo esc_url( nagakura_img_uri( 'logo-wh.png' ) ); ?>" alt="nagakura" />
				<p>缶×植物の、育つノベルティ。<br />小ロット対応・一貫サポート。</p>
			</div>

			<div class="footer__cols">
				<nav class="footer__col" aria-label="サービス">
					<h3>サービス</h3>
					<ul class="footer__links">
						<li><a href="<?php echo esc_url( home_url( '/collection/' ) ); ?>">缶屋さんのオリジナル缶コレクション</a></li>
						<li><a href="<?php echo esc_url( home_url( '/fan-goods/' ) ); ?>">缶屋さんの押し活グッズ</a></li>
						<li><a href="<?php echo esc_url( home_url( '/green/' ) ); ?>">缶屋さんの花と緑のノベルティ</a></li>
					</ul>
				</nav>

				<nav class="footer__col" aria-label="企業情報">
					<h3>企業情報</h3>
					<ul class="footer__links">
						<li><a href="<?php echo esc_url( home_url( '/about/' ) ); ?>">会社案内</a></li>
						<li><a href="<?php echo esc_url( home_url( '/faq/' ) ); ?>">よくあるご質問</a></li>
						<li><a href="<?php echo esc_url( get_option( 'page_for_posts' ) ? get_permalink( get_option( 'page_for_posts' ) ) : home_url( '/#topics' ) ); ?>">ニュース</a></li>
					</ul>
				</nav>
				<div class="footer__sns" aria-label="SNS">
					<a href="https://www.instagram.com/?hl=ja" aria-label="Instagram">
						<img src="<?php echo esc_url( nagakura_img_uri( 'instagram.png' ) ); ?>" alt="" />
					</a>
					<a href="https://www.facebook.com/nagakura.co/" aria-label="Facebook">
						<img src="<?php echo esc_url( nagakura_img_uri( 'facebook.png' ) ); ?>" alt="" />
					</a>
				</div>
			</div>
		</div>

		<div class="footer__bottom">© <?php echo esc_html( gmdate( 'Y' ) ); ?> Nagakura co.,ltd All rights reserved.</div>
	</div>
</footer>
<?php wp_footer(); ?>
</body>

</html>

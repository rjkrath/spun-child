<?php
$spun_facebook = get_theme_mod( 'jetpack-facebook' );
$spun_twitter = get_theme_mod( 'jetpack-twitter' );
$spun_tumblr = get_theme_mod( 'jetpack-tumblr' );
$spun_linkedin = get_theme_mod( 'jetpack-linkedin' );
?>
	</div>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<?php if ( $spun_facebook || $spun_twitter || $spun_tumblr || $spun_linkedin ) : ?>
			<div class="social-links">
			<?php if ( $spun_facebook ) : ?>
				<a href="<?php echo esc_url( $spun_facebook ); ?>" class="facebook-link" data-icon="&#xF204;">
					<span class="screen-reader-text"><?php esc_html_e( 'Facebook', 'spun' ); ?></span>
				</a>
			<?php endif; ?>
			<?php if ( $spun_twitter ) : ?>
				<a href="<?php echo esc_url( $spun_twitter ); ?>" class="twitter-link" data-icon="&#xF202;">
					<span class="screen-reader-text"><?php esc_html_e( 'Twitter', 'spun' ); ?></span>
				</a>
			<?php endif; ?>
			<?php if ( $spun_tumblr ) : ?>
				<a href="<?php echo esc_url( $spun_tumblr ); ?>" class="tumblr-link" data-icon="&#xF214;">
					<span class="screen-reader-text"><?php esc_html_e( 'Tumblr', 'spun' ); ?></span>
				</a>
			<?php endif; ?>
			</div>
		<?php endif; ?>
	</footer>
</div>

<?php wp_footer(); ?>

</body>
</html>
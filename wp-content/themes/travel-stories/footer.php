<?php /**
 * The footer template
 *
 * @subpackage Travel Stories
 * @since      Travel Stories 1.0
 */ ?>
<div class="clear"></div>
<footer class="travel-stories-footer">
	<aside class="travel-stories-footer-block">
		<?php get_sidebar( 'footer' ); ?>
		<div class="clear"></div>
	</aside>
	<div class="copyright">
		<p><?php echo __( 'Designed with love by', 'travel-stories' ) . '&nbsp;'; ?>
			<a href="<?php echo esc_url( wp_get_theme()->get( 'AuthorURI' ) ); ?>"><?php _e( 'BestWebSoft', 'travel-stories' )?></a><?php echo '&nbsp;' . __( 'and', 'travel-stories' ) . '&nbsp;'; ?>
			<a href="<?php echo esc_url( 'http://wordpress.org/' ); ?>" target="_blank"><?php _e( 'WordPress', 'travel-stories' )?></a><?php echo '&nbsp;&copy;&nbsp;' . date( 'Y' ) . '&nbsp;'; ?>
			<a href="<?php echo esc_url( home_url() ); ?>"><?php bloginfo( 'name' ); ?></a></p>
	</div>
</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>
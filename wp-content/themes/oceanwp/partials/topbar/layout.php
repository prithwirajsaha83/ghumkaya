<?php
/**
 * Topbar layout
 *
 * @package OceanWP WordPress theme
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Add container class if the top bar is not full width
$class = '';
if ( true != get_theme_mod( 'ocean_top_bar_full_width', false ) )  {
	$class = ' container';
} ?>

<?php do_action( 'ocean_before_top_bar' ); ?>

<div id="top-bar-wrap" class="<?php echo esc_attr( oceanwp_topbar_classes() ); ?>">

	<?php do_action( 'ocean_before_top_bar_inner' ); ?>

	<div id="top-bar" class="clr<?php echo esc_attr( $class ); ?>">

		<div id="top-bar-inner" class="clr">

			<?php
			// Get content
			get_template_part( 'partials/topbar/content' );

			// Get social
			if ( true == get_theme_mod( 'ocean_top_bar_social', true ) )  {
				get_template_part( 'partials/topbar/social' );
			} ?>

		</div><!-- #top-bar-inner -->

	</div><!-- #top-bar -->

	<?php do_action( 'ocean_after_top_bar_inner' ); ?>

</div><!-- #top-bar-wrap -->

<?php do_action( 'ocean_after_top_bar' ); ?>
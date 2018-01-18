<?php /**
 * The search widget template
 *
 * @subpackage Travel Stories
 * @since      Travel Stories 1.0
 */ ?>
<form id="searchform" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<input id="travel-stories-search-box" class="textbox" type="text" name="s" value="<?php echo get_search_query(); ?>">
</form><!-- .searchform -->
<?php
/**
 * The sidebar containing the agenda widget area
 *
 * Displays on homepage pages.
 *
 * If no active widgets are in this sidebar, hide it completely.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

if ( is_active_sidebar( 'sidebar-agenda' ) ) : ?>
	<div id="agenda" class="sidebar-container" role="complementary">
			<div class="widget-area">
				<?php dynamic_sidebar( 'sidebar-agenda' ); ?>
			</div><!-- .widget-area -->
	</div><!-- #agenda -->
<?php endif; ?>
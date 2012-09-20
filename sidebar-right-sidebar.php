<?php
/**
 * Right Sidebar widget area
 *
 * @package Viking
 * @since Viking 1.0
 */
?>
		<div id="secondary" class="widget-area" role="complementary">
			<?php do_action( 'before_sidebar' ); ?>
			<?php if ( ! dynamic_sidebar( 'right-sidebar' ) ) : ?>
                <?php get_sidebar('find-a-store'); ?>
			<?php endif; // end sidebar widget area ?>
		</div><!-- #secondary .widget-area -->

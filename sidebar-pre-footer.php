<?php
/**
 * Pre-Footer widget area
 *
 * @package Viking
 * @since Viking 1.0
 */
?>
		<div class="crossStitch"></div>
		
		<div id="secondary" class="widget-area" role="complementary">
			<?php do_action( 'before_sidebar' ); ?>
			<?php if ( ! dynamic_sidebar( 'pre-footer' ) ) : ?>

				<aside id="brandBar">
    				<a href="http://www.husqvarnaviking.com/us" target="_blank"><img src="<?php echo get_template_directory_uri()?>/images/brandBar_husqvarnaViking.png" alt="Husqvarna Viking" /></a>
    				<a href="http://www.singerco.com" target="_blank"><img src="<?php echo get_template_directory_uri()?>/images/brandBar_singer.png" alt="Singer" /></a>
    				<a href="http://www.husqvarnaviking.com/us/6712.htm" target="_blank"><img src="<?php echo get_template_directory_uri()?>/images/brandBar_inspira.png" alt="inspira" /></a>
    				<a href="http://www.truembroidery.com" target="_blank"><img src="<?php echo get_template_directory_uri()?>/images/brandBar_trueEmbroidery.png" alt="True Embroidery" /></a>
				</aside>

			<?php endif; // end sidebar widget area ?>
		</div><!-- #secondary .widget-area -->

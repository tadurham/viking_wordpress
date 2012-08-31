<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Viking
 * @since Viking 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-content">
        <h3><?php echo get_post_meta($post->ID, 'wpcf-short-title', true); ?></h3>
        <div class="coreContent">
            <div class="thumbnail">
                <?php the_post_thumbnail('full'); ?>
            </div>
            <div class="copy">
                <div class="title"><?php the_title(); ?></div>
        		<div class="description"><?php echo get_post_meta($post->ID, 'wpcf-description', true); ?></div>
    		</div>
    		<div class="details">
        		<div class="validDate"><?php echo get_post_meta($post->ID, 'wpcf-valid', true); ?></div>
        		<?php $couponType=get_post_meta($post->ID, 'wpcf-coupon-type', true);
            		  if($couponType==1):?>
                    <a class="couponRibbon" target="_blank" href="<?php echo get_post_meta($post->ID, 'wpcf-coupon', true); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/ribbonDownloadCoupon.png" alt="Download Coupon"/></a>
        		<?php elseif($couponType==2):?>
                    <a class="couponRibbon" target="_blank" href="<?php echo get_post_meta($post->ID, 'wpcf-coupon', true); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/ribbonFullDetails.png" alt="Full Details"/></a>
        		<?php endif; ?>
        		<!-- <div class="couponUrl"><?php echo get_post_meta($post->ID, 'wpcf-coupon', true); ?></div> -->
    		</div>
            <div class="clearFix"></div>
        </div>
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->

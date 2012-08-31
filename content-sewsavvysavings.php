<?php
/**
 * The template used for displaying page content in page-sewsavvysavings.php
 *
 * @package Viking
 * @since Viking 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div id="subHero">
	   <img src="<?php echo get_template_directory_uri(); ?>/images/hero_sewSavvySavings.jpg" alt="" />
	</div>
	
    <div class="crossStitch"></div>

	<div class="entry-content">
        <div class="coreContent">
            <div class="copy">
        		<?php the_content(); ?>
            </div>
        </div>
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->

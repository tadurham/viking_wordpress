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
        <h3><?php the_title(); ?></h3>
        <div class="coreContent">
            <div class="copy">
        		<?php the_content(); ?>
            </div>
        </div>
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->

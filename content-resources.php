<?php
/**
 * The template used for displaying Resource content in page.php
 *
 * @package Viking
 * @since Viking 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-content">
        <h3><?php the_title(); ?></h3>
        <?php the_content(); ?>
        <a href="<?php echo get_post_meta($post->ID, 'wpcf-resource-file', true); ?>">Download File</a>
        <!--
        <a href="<?php echo types_render_field('resource-file', array()); ?>">Download File</a>
        //-->
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->

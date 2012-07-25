<?php
/**
 * Template Name: Our Locations
 *
 * The template for Our Locations Page
 *
 * @package Viking
 * @since Viking 1.0
 */
 ?>
 
<?php get_header(); ?>
        <div class="crossStitch"></div>
		<div id="primary" class="site-content">
			<div id="content" role="main">
    			<?php query_posts(array(
                    'post_type' => 'locations'
                  ));
                ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'locations' ); ?>

				<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->
		</div><!-- #primary .site-content -->

<?php get_sidebar('pre-footer'); ?>
<?php get_footer(); ?>
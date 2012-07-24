<?php
/**
 * Template Name: Specials and Promotions
 *
 * The template for Specials and Promotions Page
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
                    'post_type' => 'promos'
                  ));
                ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'promos' ); ?>

				<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->
		</div><!-- #primary .site-content -->

<?php get_sidebar('pre-footer'); ?>
<?php get_footer(); ?>
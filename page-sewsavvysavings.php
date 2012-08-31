<?php
/**
 * Template Name: Sew Savvy Savings
 *
 * The template for Sew Savvy Savings Page
 *
 * @package Viking
 * @since Viking 1.0
 */

get_header(); ?>

		<div id="primary" class="site-content sew-savvy-savings">    		
			<div id="content" role="main">
                <div id="sidebar">
                
                </div>
                
				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'sewsavvysavings' ); ?>

				<?php endwhile; // end of the loop. ?>
								
			</div><!-- #content -->
		</div><!-- #primary .site-content -->

<?php get_sidebar('pre-footer'); ?>
<?php get_footer(); ?>
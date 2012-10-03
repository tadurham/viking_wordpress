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
                    <div class="checkMyPoints">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/sss_checkMyPoints.png" alt="Check My Points" />
                        <form method="get">
                            <div class="fields">
                                <label for="Email">Email</label>
                                <input type="text" name="Email">
                                <span class="orGreen">or</span>
                                <label for="CardNum">Card # (16 digits)</label>
                                <input type="text" name="CardNum">
                            </div>
                            <div class="submit">
                                <input type="submit" value="Log In">                                
                            </div>
                        </form>                    
                    </div>
                    <div class="faqView">
                        <a href="<?php echo get_permalink('612'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/faqView.png" alt="" /></a>
                    </div>
                </div>

                
				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'sewsavvysavings' ); ?>

				<?php endwhile; // end of the loop. ?>
								
			</div><!-- #content -->
		</div><!-- #primary .site-content -->

<?php get_sidebar('pre-footer'); ?>
<?php get_footer(); ?>

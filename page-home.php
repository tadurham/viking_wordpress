<?php
/**
 * Template Name: Home Page
 *
 * The template for displaying Static Front Page
 *
 * @package Viking
 * @since Viking 1.0
 */
?>

<?php get_header(); ?>

		<div id="primary" class="site-content">
			<div id="content" role="main">
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                
                    <div class="contentContainer">
                        <div id="hero">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/hero_1.jpg" alt="" />
                        </div>
                        <?php get_sidebar('right-sidebar'); ?>
                        <div class="clearFix"></div>
                    </div>
                    
                    <div class="crossStitch"></div>
                    
                    <div id="callouts">
                        <div class="callout">
                            <h3>Find A Class</h3>
                            <div class="copy">
                                <div class="image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/callout_findAClass.jpg" alt="" />
                                </div>
                                <h4>Learn about our Loyalty Program</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum in leo ante. Cras sem eros, congue at adipiscing at, laoreet eget mauris. Nulla magna sapien</p>
                                <p>Call to action button</p>
                            </div>
                        </div>
                        <div class="callout">
                            <h3>Specials And Promotions</h3>
                            <div class="copy">
                                <div class="image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/callout_specialsAndPromotions.jpg" alt="" />
                                </div>
                                <h4>Smaller Title Text</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum in leo ante. Cras sem eros, congue at adipiscing at, laoreet eget mauris. Nulla magna sapien</p>
                                <p>Call to action button</p>
                            </div>
                        </div>
                        <div class="callout">
                            <h3>Sew Savvy Savings</h3>
                            <div class="copy">
                                <div class="image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/callout_sewSavvySavings.jpg" alt="" />
                                </div>
                                <h4>Smaller Title Text</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum in leo ante. Cras sem eros, congue at adipiscing at, laoreet eget mauris. Nulla magna sapien</p>
                                <p>Call to action button</p>
                            </div>
                        </div>
                        <div class="callout last">
                            <h3>Products</h3>
                            <div class="copy">
                                <div class="image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/callout_products.jpg" alt="" />
                                </div>
                                <h4>Smaller Title Text</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum in leo ante. Cras sem eros, congue at adipiscing at, laoreet eget mauris. Nulla magna sapien</p>
                                <p>Call to action button</p>
                            </div>
                        </div>
                        <div class="clearFix"></div>
                    </div> <!-- !#callouts -->
                
                </article><!-- #post-<?php the_ID(); ?> -->
			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_sidebar('pre-footer'); ?>
<?php get_footer(); ?>
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
                            <?php the_content(); ?>
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
                                <h4>See your local class schedule</h4>
                                <p>Learn new techniques and tools to make your sewing the best it can be. Choose from a variety of embroidery, quilting, embroidery software and machine owners&rsquo; classes.</p>
                                <div class="actionButton"><a class="ribbon" href="#link">See More</a></div>
                            </div>
                        </div>
                        <div class="callout">
                            <h3>Specials And Promotions</h3>
                            <div class="copy">
                                <div class="image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/callout_specialsAndPromotions.jpg" alt="" />
                                </div>
                                <h4>Our latest specials and promotions</h4>
                                <p>Be the first to know about current offers and coupons available at your local Viking Sewing Gallery or Ultimate Sewing Place store.</p>
                                <div class="actionButton"><a class="ribbon" href="/specials-and-promotions/">See More</a></div>
                            </div>
                        </div>
                        <div class="callout">
                            <h3>Sew Savvy Savings</h3>
                            <div class="copy">
                                <div class="image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/callout_sewSavvySavings.jpg" alt="" />
                                </div>
                                <h4>Learn about our Loyalty Program</h4>
                                <p>Earn rewards points for every dollar you spend, and apply your rewards toward future purchases.</p>
                                <div class="actionButton"><a class="ribbon" href="/sew-savvy-savings/">See More</a></div>
                            </div>
                        </div>
                        <div class="callout last">
                            <h3>Products</h3>
                            <div class="copy">
                                <div class="image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/callout_products.jpg" alt="" />
                                </div>
                                <h4>See what our stores offer</h4>
                                <p>Browse our complete line of sewing machines, embroidery machines, quilting machines and other great products.</p>
                                <div class="actionButton"><a class="ribbon" href="/products/">See More</a></div>
                            </div>
                        </div>
                        <div class="clearFix"></div>
                    </div> <!-- !#callouts -->
                
                </article><!-- #post-<?php the_ID(); ?> -->
			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_sidebar('pre-footer'); ?>
<?php get_footer(); ?>

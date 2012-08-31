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
    <div class="locations-header-wrap">
        <a href="#">
<img src="<?php echo get_template_directory_uri(); ?>/images/header-ourLocations.jpg" alt="" />
        </a>
    </div>
        <div class="crossStitch"></div>
		<div id="primary" class="site-content">
			<div id="content" role="main">
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                	<div class="entry-content">
                        <h3><?php the_title(); ?></h3>
                        <div class="coreContent">
                            <div class="storeCol">
                                <?php if(types_render_field('store-number')!=''):?>
                                <div class="storeNumber">
                                    <p>Store #:<?php echo(types_render_field('store-number')); ?></p>
                                </div>
                                <?php endif; ?>
                                <?php if(types_render_field('address')!=''):?>
                                <div class="address">
                                    <p><?php echo(types_render_field('address')); ?></p>
                                </div>
                                <?php endif;?>
                                <?php if((types_render_field('store-phone')!='')&&(types_render_field('store-fax')!='')&&(types_render_field('store-email')!='')):?>
                                <div class="storeContact">
                                    <p>
                                    <?php 
                                    if(types_render_field('store-phone')!=''){
                                        echo 'Phone: ';
                                        echo(types_render_field('store-phone'));
                                        echo('<br/>');
                                    }                        
                                    if(types_render_field('store-fax')!=''){
                                        echo 'Fax: ';
                                        echo(types_render_field('store-fax')); 
                                        echo('<br/>');
                                    }                        
                                    if(types_render_field('store-email')!=''){
                                        echo(types_render_field('store-email')); 
                                        echo('<br/>');
                                    }                        
                                    ?>
                                    </p>
                                </div>
                                <?php endif; ?>
                                <?php if(types_render_field('store-hours')!=''):?>
                                <div class="storeHours">
                                    <p><?php echo(types_render_field('store-hours')); ?></p>
                                </div>
                                <?php endif; ?>
                                <?php if(types_render_field('store-description')!=''):?>
                                <div class="storeDescription">
                                    <p><?php echo(types_render_field('store-description')); ?></p>
                                </div>
                                <?php endif; ?>
                            </div>
                            <div class="storeMap">
                                <?php 
                                    $lat=types_render_field('store-latitude');
                                    $long=types_render_field('store-longitude');
                                ?>
                                <img src="http://maps.googleapis.com/maps/api/staticmap?markers=color:red%7Clabel:%7C<?php echo $lat; ?>,<?php echo $long; ?>&size=340x340&maptype=terrain&zoom=13&sensor=false" alt="" />
                            </div>
                            <div class="clearFix"></div>
                        </div>
                	</div><!-- .entry-content -->
                </article>

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

			</div><!-- #content -->
                    
		</div><!-- #primary .site-content -->

<?php get_sidebar('pre-footer'); ?>
<?php get_footer(); ?>

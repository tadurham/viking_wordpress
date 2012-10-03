<?php
/**
 * Template Name: Location - Single
 *
 * The template for individual store pages.
 *
 * @package Viking
 * @since Viking 1.0
 */
 ?>
 
<?php get_header(); ?>
		<div id="primary" class="site-content sidebar-enabled">
			<div id="content" role="main">
                <div id="sidebar">
                                
                    <div class="callout local-store-events">
                        <h3>Local Store Events</h3>
                        <div class="copy">
                            <div class="image">
                                <img src="<?php echo get_template_directory_uri();?>/images/classScheduleAndEvents.png" alt="Class Schedule & Upcoming Events" />
                            </div>
                            <div class="eventsContainer">
                            <?php
                                query_posts(array(
                                    'post_type' => 'classes',
                                    'posts_per_page' => '3',
                                    'order'     => 'ASC',
                                ));
                            ?>
                               <?php while ( have_posts() ) : the_post(); ?>
                                   
                                <div class="event">
                                   <?php if(types_render_field('event-date')!=''):?>
                                       <div class="eventDate">
                                            <?php echo(types_render_field('event-date')); ?>
                                        </div>
                                    <?php endif; ?>
                                    
                                    <?php if(1==1):?>
                                        <div class="eventTitle">
                                            <?php the_title()?>
                                        </div>
                                    <?php endif; ?>
                                    
                                        <div class="eventDescription">
                                            <?php the_content(); ?>
                                        </div>
                                    
                                        <div class="eventLink">
                                            <a href="#">Reserve Your Spot &gt;</a>
                                        </div>
                                </div>
                                <?php 
                                    endwhile;
                                    wp_reset_query();
                                ?>
                            </div>
                            <div class="calloutButton">
                                <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/ribbon_seeFullCalendar.png" alt="See Full Calendar" /></a>                            
                            </div>
                        </div>
                    </div>

                </div>                
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <div id="subHero">
                        <a href="/products/">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/header-aboutUs.jpg" alt="" />
                        </a>
                    </div>                
                    <div class="crossStitch"></div>
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
                                    $url="http://maps.google.com/maps?saddr=%20&daddr=";
                                ?>
                                <a href="<?php echo $url; echo types_render_field('address', array("raw"=>"true"));?>" target="_blank"><img src="http://maps.googleapis.com/maps/api/staticmap?markers=color:red%7Clabel:%7C<?php echo $lat; ?>,<?php echo $long; ?>&size=340x340&maptype=terrain&zoom=13&sensor=false" alt="" /></a>
                                <div class="">
                                    <a class="getDirections" href="<?php echo $url; echo types_render_field('address', array("raw"=>"true"));?>" target="_blank">Get Directions</a>
                                </div>
                            </div>
                            <div class="clearFix"></div>
                        </div>
                	</div><!-- .entry-content -->
                </article>

                <?php get_template_part( 'content', 'callouts' ); ?>

			</div><!-- #content -->
                    
		</div><!-- #primary .site-content -->

<?php get_sidebar('pre-footer'); ?>
<?php get_footer(); ?>

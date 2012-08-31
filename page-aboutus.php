<?php
/**
 * Template Name: About Us
 *
 * The template for About Us Page
 *
 * @package Viking
 * @since Viking 1.0
 */

get_header(); ?>

<?php if(has_post_thumbnail(): the_post_thumbnail(); endif; ?>
		<div id="primary" class="site-content about-us">
			<div id="content" role="main">
                <div id="sidebar">
                
                    <aside id="findAStore">
                        <div class="findAStoreContainer">
                            <div class="center">
                                <img src="http://viking.sullivanbranding.com/wp-content/themes/Viking/images/findAStore.png" alt="Find A Store">
                            </div>
                            <form method="get">
                                <label for="City">City</label>
                                <input type="text" name="City">
                                <span class="or">or</span>
                                <label for="Zip">Zip</label>
                                <input type="text" name="Zip">
                                <label class="distance" for="Distance">Distance</label>
                                <select class="distance">
                                    <option>5 miles</option>
                                    <option>10 miles</option>                                
                                    <option>25 miles</option>
                                    <option>50 miles</option>                                
                                    <option>75 miles</option>
                                    <option>100 miles</option>                                
                                </select>
                                <input id="findAStoreSubmit" type="submit" value="GO">
                            </form>
                        </div>
                    </aside>
                                
                    <div class="callout">
                        <h3>Promotions And Specials</h3>
                        <div class="copy">
                            <div class="image">
                                <img src="http://viking.sullivanbranding.com/wp-content/themes/Viking/images/callout_specialsAndPromotions.jpg" alt="">
                            </div>
                            <div class="calloutButton">
                                <a href="/specials-and-promotions/"><img src="<?php echo get_template_directory_uri(); ?>/images/calloutBtn_SeeMore.png" alt="See More" /></a>
                            </div>
                        </div>
                    </div>

                    <div class="callout">
                        <h3>Local Class Schedule</h3>
                        <div class="copy">
                            <div class="image">
                                <img src="http://viking.sullivanbranding.com/wp-content/themes/Viking/images/callout_findAClass.jpg" alt="">
                            </div>
                            <div class="calloutButton">
                                <a href="/our-locations/"><img src="<?php echo get_template_directory_uri(); ?>/images/calloutBtn_SeeMore.png" alt="See More" /></a>
                            </div>
                        </div>
                    </div>

                </div>
                
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                	<div class="entry-content">
                        <h3><?php the_title(); ?></h3>
    			
            			<?php query_posts('category_name=about-us&order=ASC'); ?>

        				<?php while ( have_posts() ) : the_post(); ?>
                        <div class="coreContent">
                            <div class="image">
                                <?php the_post_thumbnail(); ?>
                            </div>
                            <div class="copy">
                                <h3><?php the_title(); ?></h3>
                                <?php the_content(); ?>
                            </div>
                            <div class="hyperlink">
                                <a href="<?php echo get_post_meta($post->ID, 'find a store', true);?>">Find a Store ></a>
                            </div>
                        </div>
				
				<?php endwhile; ?>
                	</div><!-- .entry-content -->
                </article>
				
			</div><!-- #content -->
		</div><!-- #primary .site-content -->

<?php get_footer(); ?>

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

		<div id="primary" class="site-content about-us">
			<div id="content" role="main">
                <div id="sidebar">
                    <div class="callout">
                        <h3>Find A Class</h3>
                        <div class="copy">
                            <div class="image">
                                <img src="http://viking.sullivanbranding.com/wp-content/themes/Viking/images/callout_findAClass.jpg" alt="">
                            </div>
                            <div class="calloutButton">
                                <a href="#link"><img src="<?php echo get_template_directory_uri(); ?>/images/calloutBtn_SeeMore.png" alt="See More" /></a>
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
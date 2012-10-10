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

<?php if(has_post_thumbnail()): ?>
<?php endif; ?>
		<div id="primary" class="site-content sidebar-enabled about-us">
			<div id="content" role="main">
                <div id="sidebar">
                     
                    <?php get_template_part('sidebar-find-a-store'); ?>
                    
                    <?php get_template_part('sidebar-callouts'); ?>

                </div>
                
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <div id="subHero">
                        <a href="/products/">
                            <?php the_post_thumbnail(); ?>
                        </a>
                    </div>
                    <div class="crossStitch"></div>

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
                                <a href="/our-locations/">Find a Store ></a>
                            </div>
                        </div>
				
				<?php endwhile; ?>
                	</div><!-- .entry-content -->
                </article>
				
			</div><!-- #content -->
		</div><!-- #primary .site-content -->

<?php get_footer(); ?>

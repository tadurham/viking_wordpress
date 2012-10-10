<?php
/**
 * Template Name: Generic with Sidebar
 *
 *
 * @package Viking
 * @since Viking 1.0
 */

get_header(); ?>

<?php if(has_post_thumbnail()): ?>
<?php endif; ?>
		<div id="primary" class="site-content sidebar-enabled">
			<div id="content" role="main">
                <div id="sidebar">
                    
                    <?php get_template_part('sidebar-find-a-store'); ?>
                                
                    <?php get_template_part('sidebar-callouts'); ?>

                </div>
                
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <div id="subHero">
                        <a href="">
                            <?php the_post_thumbnail(); ?>
                        </a>
                    </div>
                    <div class="crossStitch"></div>

                	<div class="entry-content">
                        <h3><?php the_title(); ?></h3>

        				<?php while ( have_posts() ) : the_post(); ?>
                        <div class="coreContent">
                            <div class="copy">
                                <?php the_content(); ?>
                            </div>
                        </div>
				
				<?php endwhile; ?>
                	</div><!-- .entry-content -->
                </article>
				
			</div><!-- #content -->
		</div><!-- #primary .site-content -->

<?php get_footer(); ?>

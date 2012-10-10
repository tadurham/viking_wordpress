<?php
/**
 * Template Name: Classes & Upcoming Events
 *
 * The template for Classes & Upcoming Events Page
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
                        <a href="/products/">
                            <?php the_post_thumbnail(); ?>
                        </a>
                    </div>
                    <div class="crossStitch"></div>

                	<div class="entry-content">
                        <h3><?php the_title(); ?></h3>
                        
                        <?php
                            $author= $_GET['id']; 
                            query_posts(array(
                                'post_type' => 'classes',
                                'author' => $author,                                
                                'order'     => 'ASC'
                            ));
                        ?>
        				<?php while ( have_posts() ) : the_post(); ?>
                        <div class="coreContent classesWrap">
                            <div class="hyperlink">
                            <?php if(get_the_content()!= ''): ?>
                                <a class="moreInfoLink" href="#individualPage">More Info &gt;</a>
                                <a class="lessInfoLink" href="#individualPage">Less Info &gt;</a>
                            <?php endif; ?>
                                <a href="/request-a-spot/?recipient=<?php echo $storeEmail; ?>&title=<?php the_title(); ?>">Reserve Your Spot &gt;</a>
                            </div>
                            <div class="copy">
                                <h3><?php the_title(); ?></h3>
                           <?php if(types_render_field('event-date')!=''):?>
                               <p class="eventDate">
                                    <?php echo(types_render_field('event-date')); ?>
                                </p>
                            <?php endif; ?>
                            <?php if(get_the_content()!= ''): ?>
                                <div class="classesContent">
                                    <?php the_content(); ?>
                                </div>
                            <?php endif; ?>
                            </div>
                        </div>
				
				<?php endwhile; ?>
                	</div><!-- .entry-content -->
                </article>
				
			</div><!-- #content -->
		</div><!-- #primary .site-content -->

<?php get_footer(); ?>

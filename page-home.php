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
                            <?php 
                                if(have_posts()) : while(have_posts()): the_post();
                                    the_content(); 
                                endwhile; endif;
                            ?>
                        </div>
                        <div class="heroPager">
                        </div>
                        <?php get_sidebar('right-sidebar'); ?>
                        <div class="clearFix"></div>
                    </div>
                    
                    <div class="crossStitch"></div>

					<?php get_template_part( 'content', 'callouts' ); ?>
                
                </article><!-- #post-<?php the_ID(); ?> -->
			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_sidebar('pre-footer'); ?>
<?php get_footer(); ?>

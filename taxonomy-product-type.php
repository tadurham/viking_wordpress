<?php
/**
 * The template for Product Types display
 *
 * @package Viking
 * @since Viking 1.0
 */
 ?>
 
<?php get_header(); ?>
        <div class="crossStitch"></div>
		<div id="primary" class="site-content">
			<div id="content" role="main">
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                	<div class="entry-content">
                        <?php echo '<h3>'.single_cat_title( '', false).'</h3>'; ?>
                        <div class="coreContent">

        <?php if(have_posts()) : ?>
            <?php while ( have_posts() ) : the_post(); ?>

                <?php 
                    $class = '';

                    if($count == 1) $class = 'first-col';
                    elseif($count == 2) $class = 'second-col';
                    elseif($count == 3) $class = 'third-col';

                    get_template_part( 'content', 'products' ); ?>

                <?php 
                      if($count == 3) 
                        $count = 1; 
                      else 
                        $count++; 
                ?>

            <?php endwhile; // end of the loop. ?>
        <?php else: ?>
            <p>No products found.</p>
        <?php endif; ?>

                            <div class="clearFix"></div>
                        </div>
                	</div><!-- .entry-content -->
                </article>
			</div><!-- #content -->
		</div><!-- #primary .site-content -->

<?php get_sidebar('pre-footer'); ?>
<?php get_footer(); ?>

<?php
/**
 * Template Name: Products
 *
 * The template for Products Page
 *
 * @package Viking
 * @since Viking 1.0
 */
 ?>
 
<?php get_header(); ?>
        <div class="crossStitch"></div>
		<div id="primary" class="site-content">
			<div id="content" role="main">

        <?php
            query_posts(array(
                'post_type' => 'products',
                'posts_per_page' => '250'
            ));

            if(have_posts()) : ?>

            <?php while ( have_posts() ) : the_post(); ?>

                <?php get_template_part( 'content', 'products' ); ?>

            <?php endwhile; // end of the loop. ?>
        <?php else: ?>
            <p>No stores found in your area.</p>
        <?php endif; ?>

			</div><!-- #content -->
		</div><!-- #primary .site-content -->

<?php get_sidebar('pre-footer'); ?>
<?php get_footer(); ?>

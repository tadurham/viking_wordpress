<?php
/**
 * Template Name: Employee Resources
 *
 * The template for Employee Resources Page
 *
 * @package Viking
 * @since Viking 1.0
 */
 ?>
 
<?php get_header(); ?>
        <div class="crossStitch"></div>
		<div id="primary" class="site-content">
			<div id="content" class="entry-content" role="main">
            <?php
                //list terms in a given taxonomy
                $tax_terms = get_terms('resource-type', array( 'hide_empty' => 0 ));

                foreach($tax_terms as $tax_term) :
                    $term_name = $tax_term->name;
                    $term_id = $tax_term->term_id;
            ?>
                <div class="resource-title"><?php echo $term_name; ?></div>
    			<?php query_posts(array(
                    'post_type' => 'resources',
                    'posts_per_page' => 10,
                    'orderby' => 'menu_order',
                    'order' => 'ASC',
                    'tax_query' => array( array(
                        'taxonomy' => 'resource-type',
                        'field' => 'id',
                        'terms' => $term_id) )
                  ));
                ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'resources' ); ?>

				<?php endwhile; // end of the loop. ?>

            <?php endforeach; ?>
			</div><!-- #content -->
		</div><!-- #primary .site-content -->

<?php get_sidebar('pre-footer'); ?>
<?php get_footer(); ?>

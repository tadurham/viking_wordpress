<?php
/**
 * The template for Product Types display
 *
 * @package Viking
 * @since Viking 1.0
 */
 ?>
 
<?php get_header(); ?>
		<div id="primary" class="site-content products">
			<div id="content" role="main">
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                    <div class="contentContainer">
                        <div id="hero">
                            <?php 
                                //get post thumbnail from parent page 
                                echo get_the_post_thumbnail(11);
                            ?>
                        </div>
                        <?php get_sidebar('right-sidebar'); ?>
                        <div class="clearFix"></div>
                    </div>
                    
                    <div class="crossStitch"></div>
                	<div class="entry-content">
                        <div class="coreContent">
                            <div id="productCategories">
                                <h3 class="productCategoryTitle">Sort By</h3>
                                <h4 class="productCategoryTitle"><a href="<?php bloginfo('url'); ?>/product-type/machines/">Machines</a></h4>
                                    <p class="productCategory"><a href="<?php bloginfo('url'); ?>/product-type/sewing/">Sewing</a></p>
                                    <p class="productCategory"><a href="<?php bloginfo('url'); ?>/product-type/embroidery/">Embroidery</a></p>
                                    <p class="productCategory"><a href="<?php bloginfo('url'); ?>/product-type/quilting/">Quilting</a></p>
                                    <p class="productCategory"><a href="<?php bloginfo('url'); ?>/product-type/serger/">Sergers</a></p>
                                <h4 class="productCategoryTitle"><a href="<?php bloginfo('url'); ?>/product-type/software/">Software</a></h4>
                                <h4 class="productCategoryTitle"><a href="<?php bloginfo('url'); ?>/product-type/accessories/">Accessories</a></h4>

                            </div>
                            <div id="product-wrap-container">
                            <?php if(have_posts()) : $count = 1; ?>
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
                            <div class="clearFix"></div>
                        </div>
                	</div><!-- .entry-content -->
                </article>
			</div><!-- #content -->
		</div><!-- #primary .site-content -->

<?php get_sidebar('pre-footer'); ?>
<?php get_footer(); ?>

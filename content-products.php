<?php
/**
 * The template used for displaying content in page-products.php
 *
 * @package Viking
 * @since Viking 1.0
 */
?>

<div class="product-wrap <?php echo $class; ?>">
    <div class="product-thumbnail">
        <?php the_post_thumbnail(); ?>
    </div>
    <div class="product-info">
        <h4><?php the_title(); ?></h4>
        <?php the_content(); ?>
        <p>
            <a href="<?php echo get_post_meta($post->ID, 'wpcf-product-page-link', true); ?>" target="_blank" class="learn-more-link">Learn More</a>
            <a href="/our-locations/" class="find-store-link">Find in Store</a>
        </p>
    </div>
</div>

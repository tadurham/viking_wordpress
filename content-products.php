<?php
/**
 * The template used for displaying content in page-products.php
 *
 * @package Viking
 * @since Viking 1.0
 */
?>

<div class="product-thumbnail">
    <?php post_thumbnail(); ?>
</div>
<div class="product-info">
    <h4><?php the_title(); ?></h4>
    <?php the_content(); ?>
    <p><?php echo(types_render_field('product-page-link')); ?></p>
</div>

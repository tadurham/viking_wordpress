<?php
/**
 * The template used for displaying content in page-locations.php
 *
 * @package Viking
 * @since Viking 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="entry-content">
        <h3><?php the_title(); ?></h3>
        <div class="coreContent">
            <div class="col1 locationsCol">
                <?php if(types_render_field('address')!=''):?>
                <div class="address">
                    <p><?php echo(types_render_field('address')); ?></p>
                </div>
                <?php endif;?>
                <?php if((types_render_field('store-phone')!='')&&(types_render_field('store-fax')!='')&&(types_render_field('store-email')!='')):?>
                <div class="storeContact">
                    <p>
                    <?php 
                    if(types_render_field('store-phone')!=''){
                        echo '<label>Phone:</label> ';
                        echo(types_render_field('store-phone'));
                        echo('<br/>');
                    }                        
                    if(types_render_field('store-fax')!=''){
                        echo '<label>Fax:</label> ';
                        echo(types_render_field('store-fax')); 
                        echo('<br/>');
                    }                        
                    if(types_render_field('store-email')!=''){
                        echo(types_render_field('store-email')); 
                        echo('<br/>');
                    }                        
                    ?>
                    </p>
                </div>
                <?php endif; ?>
                <?php if(types_render_field('store-hours')!=''):?>
                <div class="storeHours">
                    <p><?php echo(types_render_field('store-hours')); ?></p>
                </div>
                <?php endif; ?>
            </div>
            <div class="col2 locationsCol">
                <?php if(types_render_field('store-description')!=''):?>
                <div class="storeDescription">
                    <p><?php echo(types_render_field('store-description')); ?></p>
                </div>
                <?php endif; ?>
                <?php if(types_render_field('store-number')!=''):?>
                <div class="storeNumber">
                    <p><?php echo(types_render_field('store-number')); ?></p>
                </div>
                <?php endif; ?>
            </div>
            <div class="col3 locationsCol">
                <div class="">
                    <a class="storePage" href="#">Visit Store Page ></a>
                </div>
                <div class="">
                    <a class="getDirections" href="#">Get Directions</a>
                </div>
            </div>
            <div class="col4 locationsCol">
                <div class="">
                    <?php 
                        $lat=types_render_field('store-latitude');
                        $long=types_render_field('store-longitude');
                    ?>
                    <img src="http://maps.googleapis.com/maps/api/staticmap?markers=color:red%7Clabel:%7C<?php echo $lat; ?>,<?php echo $long; ?>&size=200x200&maptype=terrain&zoom=13&sensor=false" alt="" />
                </div>
            </div>
            <div class="clearFix"></div>
        </div>
    </div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->

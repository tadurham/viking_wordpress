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
        <h3><?php echo types_render_field('city-state');?></h3>
        <div class="coreContent">
            <div class="col1 locationsCol">
                <?php if(types_render_field('address')!=''):?>
                <div class="address">
                    <?php 
                        $storeNumberCheck = get_the_title();
                        if($storeNumberCheck == '127' || $storeNumberCheck == '641' || $storeNumberCheck == '284'):
                    ?>
                    <p>Ultimate Sewing Place</p>
                    <?php else: ?>
                    <p>Inside JoAnn Fabric and Craft Stores</p>
                    <?php endif; ?>
                    <p><?php echo(types_render_field('address')); ?></p>
                </div>
                <?php endif;?>
                <?php if((types_render_field('store-phone')!='')&&(types_render_field('store-fax')!='')&&(types_render_field('store-email')!='')):?>
                <div class="storeContact">
                    <p>
                    <?php 
                    if(types_render_field('store-phone')!=''){
                        echo 'Phone: ';
                        echo(types_render_field('store-phone'));
                        echo('<br/>');
                    }                        
                    if(types_render_field('store-fax')!=''){
                        echo 'Fax: ';
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
                <div class="storeNumber">
                    <p>Store #: <?php the_title(); ?></p>
                </div>
            </div>
            <div class="col3 locationsCol">
                <div class="">
                    <a class="storePage" href="<?php echo the_permalink(); ?>">Visit Store Page ></a>
                </div>
                <?php //prepare google maps link
                    $url="http://maps.google.com/maps?saddr=%20&daddr=";
                    if(types_render_field('address')!=''):
                    ?>
                    <div class="">
                        <a class="getDirections" href="<?php echo $url; echo types_render_field('address', array("raw"=>"true"));?>" target="_blank">Get Directions</a>
                    </div>
                    <?php 
                    endif;
                ?>
            </div>
            <div class="col4 locationsCol">
                <div class="">
                    <?php 
                        $lat=types_render_field('store-latitude');
                        $long=types_render_field('store-longitude');
                    ?>
                    <a href="<?php echo $url; echo types_render_field('address', array("raw"=>"true"));?>" target="_blank"><img src="http://maps.googleapis.com/maps/api/staticmap?markers=color:red%7Clabel:%7C<?php echo $lat; ?>,<?php echo $long; ?>&size=200x200&maptype=terrain&zoom=13&sensor=false" alt="" /></a>
                </div>
            </div>
            <div class="clearFix"></div>
        </div>
    </div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->

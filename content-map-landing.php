<?php

    query_posts(array(
        'post_type' => 'locations',
        'posts_per_page' => '18',
        'post__in' => $storesInRange
    ));
?>
    <div id="mapLanding">
        
    <?php if(have_posts()) : while ( have_posts() ) : the_post(); ?>
        
        <div class="mapTile">
            <div class="mapInfo">
                <p><a class="storePage" href="<?php echo the_permalink(); ?>"><?php echo(types_render_field('address')); ?></a></p>
            </div>
            <div class="mapImage">
                <?php 
                    $lat=types_render_field('store-latitude');
                    $long=types_render_field('store-longitude');
                ?>
                <img src="http://maps.googleapis.com/maps/api/staticmap?markers=color:red%7Clabel:%7C<?php echo $lat; ?>,<?php echo $long; ?>&size=160x160&maptype=terrain&zoom=8&sensor=false" alt="" />
            </div>
        </div>
        
    <?php endwhile; endif; ?>
    </div>

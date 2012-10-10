                            <div class="eventsContainer">
                            <?php
                                // get author of this location
                                wp_reset_query();
                                $author= get_the_author_meta('ID');
                                
                                // get email for this location
                                if(types_render_field('store-email')!=''){ $storeEmail=types_render_field('store-email', array("raw"=>"true"));}
                                
                                query_posts(array(
                                    'post_type' => 'classes',
                                    'author' => $author,
                                    'posts_per_page' => '3',
                                    'order'     => 'ASC'
                                ));
                            ?>
                               <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                                   
                                <div class="event">
                                   <?php if(types_render_field('event-date')!=''):?>
                                       <div class="eventDate">
                                            <?php echo(types_render_field('event-date')); ?>
                                        </div>
                                    <?php endif; ?>
                                    
                                    <?php if(1==1):?>
                                        <div class="eventTitle">
                                            <?php the_title()?>
                                        </div>
                                    <?php endif; ?>
                                    
                                        <div class="eventDescription">
                                            <?php the_content(); ?>
                                        </div>
                                    
                                        <div class="eventLink">
                                            <a href="http://viking.sullivanbranding.com/request-a-spot/?recipient=<?php echo $storeEmail; ?>&title=<?php the_title(); ?>">Reserve Your Spot &gt;</a>
                                        </div>
                                </div>
                                <?php 
                                    endwhile;
                                    else:
                                ?>
                                <div class="event">
                                    <div class="eventTitle">
                                        This location currently has no classes available to reserve your spot. Please call this location for the latest class schedule.
                                    </div>                                                                        
                                </div>
                                <?php  
                                    endif;
                                    wp_reset_query();
                                ?>
                            </div>

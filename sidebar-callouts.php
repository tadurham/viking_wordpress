                    <?php
                        query_posts(array(
                            'post_type' => 'promos',
                            'posts_per_page' => '1'
                        ));
                        while ( have_posts() ) : the_post();
                    ?>
                    <div class="callout">
                        <h3>Promotions And Specials</h3>
                        <div class="copy">
                            <div class="image">
                                <?php the_post_thumbnail('full'); ?>
                            </div>
                            <div class="calloutButton">
                                <a href="/specials-and-promotions/"><img src="<?php echo get_template_directory_uri(); ?>/images/calloutBtn_SeeMore.png" alt="See More" /></a>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; ?>
                    <div class="callout">
                        <h3>Local Class Schedule</h3>
                        <div class="copy">
                            <div class="image">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/callout_findAClass.jpg" alt="">
                            </div>
                            <div class="calloutButton">
                                <a href="/our-locations/?find-a-class=1"><img src="<?php echo get_template_directory_uri(); ?>/images/calloutBtn_SeeMore.png" alt="See More" /></a>
                            </div>
                        </div>
                    </div>
                    <?php
                        wp_reset_query();
                    ?>
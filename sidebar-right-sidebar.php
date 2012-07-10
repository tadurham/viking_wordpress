<?php
/**
 * Right Sidebar widget area
 *
 * @package Viking
 * @since Viking 1.0
 */
?>
		<div id="secondary" class="widget-area" role="complementary">
			<?php do_action( 'before_sidebar' ); ?>
			<?php if ( ! dynamic_sidebar( 'right-sidebar' ) ) : ?>
                <aside id="findAStore">
                    <div class="center">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/findAStore.png" alt="Find A Store" />
                    </div>
                    <form method="get">
                        <label for="City">City</label>
                        <input type="text" name="City"/>
                        <span class="or">or</span>
                        <label for="Zip">Zip</label>
                        <input type="text" name="Zip"/>
                        <label class="distance" for="Distance">Distance</label>
                        <select class="distance">
                            <option>5 miles</option>
                            <option>10 miles</option>                                
                            <option>25 miles</option>
                            <option>50 miles</option>                                
                            <option>75 miles</option>
                            <option>100 miles</option>                                
                        </select>
                        <input id="findAStoreSubmit" type="submit" value="GO"/>
                    </form>
                </aside>
			<?php endif; // end sidebar widget area ?>
		</div><!-- #secondary .widget-area -->

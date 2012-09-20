<?php
/**
 * Sidebar Find a Store form
 *
 * @package Viking
 * @since Viking 1.0
 */
?>
                <aside id="findAStore">
                    <div class="findAStoreContainer">
                        <div class="center">
                            <img src="<?php bloginfo('template_directory'); ?>/images/findAStore.png" alt="Find A Store">
                        </div>
                        <form action="/our-locations/" method="get">
                            <label for="City">City</label>
                            <input type="text" name="City">
                            <span class="or">or</span>
                            <label for="Zip">Zip</label>
                            <input type="text" name="Zip">
                            <label class="distance" for="Distance">Distance</label>
                            <select class="distance">
                                <option>5 miles</option>
                                <option>10 miles</option>                                
                                <option>25 miles</option>
                                <option>50 miles</option>                                
                                <option>75 miles</option>
                                <option>100 miles</option>                                
                            </select>
                            <input id="findAStoreSubmit" type="submit" value="GO">
                        </form>
                    </div>
                </aside>

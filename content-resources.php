<?php
/**
 * The template used for displaying Resource content in page.php
 *
 * @package Viking
 * @since Viking 1.0
 */
?>
        <div class="coreContent" id="post-<?php the_ID(); ?>">
            <div class="copy">
        		<div class="description">
                    <a class="download" href="<?php echo get_post_meta($post->ID, 'wpcf-resource-file', true); ?>" target="_blank" ><img src="<?php echo get_template_directory_uri(); ?>/images/ribbonDownloadFile.png" alt="Download File" /></a>        		                    
                    <?php the_title(); ?>
                    <p class="small"><?php the_date(); ?> at <?php the_time(); ?></p>
                    <?php the_content(); ?>            		
        		</div>
    		</div>
            <div class="clearFix"></div>
        </div>

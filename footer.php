<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package Viking
 * @since Viking 1.0
 */
?>

	</div><!-- #main -->
</div><!-- .container -->

<footer id="footer">
    <div class="content">
        <div class="container">
    		<nav role="navigation" class="site-navigation footer-navigation">
    			<?php wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?>
    		</nav>
    		<div class="shareBubble">
                <a href="#link" class="facebook">Facebook</a>
                <a href="#link" class="pinterest">Pinterest</a>
                <a href="#link" class="twitter">Twitter</a>
    		</div>
    		<div id="legal">
        		<p class="legal">&copy; 2012 KSIN Luxembourg II, S.ar.l. VIKING and SEW SAVVY SAVINGS are trademarks of KSIN Luxembourg II, S.ar.l. HUSQVARNA and the 'crowned-H device' are trademarks of Husqvarna AB.<br /> All trademarks used under license by VSM Group AB.</p>
    		<div class="clearFix"></div>
        </div>
    </div>
</footer>

<?php if(is_front_page()): ?>
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.cycle.all.js"></script>
<script type="text/javascript">
jQuery(document).ready(function(){
    jQuery('#hero').cycle({
		pause: true,
		timeout: 4500,
		speed: 1500,
		cleartype: true,
    });
		//pager: '.slidenav',
		//prev: '#slidePrev',
		//next: '#slideNext'
});
</script>
<?php endif; ?>

<?php wp_footer(); ?>

</div> <!-- !#gradient -->
</body>
</html>

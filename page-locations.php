<?php
/**
 * Template Name: Our Locations
 *
 * The template for Our Locations Page
 *
 * @package Viking
 * @since Viking 1.0
 */
 ?>
 
<?php get_header(); ?>
        <div class="crossStitch"></div>
		<div id="primary" class="site-content">
			<div id="content" role="main">

<?php
    if(isset($_GET['City']) || $_GET['Zip'] != '') {
        $findAStore = $_GET['City'].' '.$_GET['Zip'];
        $storeSearch="http://maps.googleapis.com/maps/api/geocode/json?address=" . urlencode($findAStore) . "&sensor=false";
        $results= file_get_contents($storeSearch,true);
        $results= json_decode($results);
        $lat=$results->results[0]->geometry->location->lat;
        $lng=$results->results[0]->geometry->location->lng; 
        $distance = ($_GET['Distance'] == '' ? 30 : $_GET['Distance']);

        $query = "CREATE TEMPORARY TABLE stores SELECT post_id, meta_value AS latitude, '000.000000000000000000000' as longitude FROM `wp_postmeta` WHERE meta_key = 'wpcf-store-latitude';";

        $query .= "UPDATE stores, wp_postmeta SET stores.longitude = meta_value WHERE stores.post_id = `wp_postmeta`.post_id AND meta_key = 'wpcf-store-longitude';";

        $query .= "SELECT * FROM stores WHERE GetDistance( '".$lng.", ".$lat.", 0', CONCAT_WS(  ', ', longitude, latitude,  '0' )) <= ".$distance;

        include('inc/dbconn.inc');

        $mysqli = new mysqli($host, $username, $password, $database);

        $storesInRange = array();

        if ($mysqli->multi_query($query)) {
            do {
                if ($result = $mysqli->store_result()) {
                    while ($row = $result->fetch_row()) {
                        $storesInRange[] = $row[0];
                    }
                    $result->free();
                }
            } while ($mysqli->next_result());
        }

        /* close connection */
        $mysqli->close();

        query_posts(array(
            'post_type' => 'locations',
            'posts_per_page' => '25',
            'post__in' => $storesInRange
        ));
    }
    else {
        query_posts(array(
            'post_type' => 'locations',
            'posts_per_page' => '25'
        ));
    }
?>
            <?php if(have_posts()) : ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'locations' ); ?>

				<?php endwhile; // end of the loop. ?>
            <?php else: ?>
                <p>No stores found in your area.</p>
            <?php endif; ?>

			</div><!-- #content -->
		</div><!-- #primary .site-content -->

<?php get_sidebar('pre-footer'); ?>
<?php get_footer(); ?>

<?php 
/**
 * Template Name: Albums On Sale
 */

get_header(); ?>

<on-sale>
	<inner-column>
		<h2 class='attention-voice'>Grab them while you can!</h2>
			<?php
			$featured_albums = new WP_Query([
			    'post_type' => 'albums',
			    'posts_per_page' => 6,
			    'tax_query' => [
			        [
			            'taxonomy' => 'album_visibility',
			            'field'    => 'slug',
			            'terms'    => 'on-sale',
			        ],
			    ],
			]); 
			?>
			<ul class=album-container>
         <?php

		    while ( $featured_albums->have_posts() ) : $featured_albums->the_post();
		        include('components/album-on-sale.php');
		    endwhile;
		    ?>
          </ul>
          <?php

		    wp_reset_postdata();

			?>
	</inner-column>
</on-sale>

<?php get_footer(); ?>
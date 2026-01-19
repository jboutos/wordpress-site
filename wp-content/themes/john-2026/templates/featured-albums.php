<featured-albums>
	<inner-column>
		<h2 class='attention-voice'>Featured albums of the month</h2>
		<div class='reviews'>
			<?php
			$featured_albums = new WP_Query([
			    'post_type' => 'albums',
			    'posts_per_page' => 6,
			    'tax_query' => [
			        [
			            'taxonomy' => 'album_visibility',
			            'field'    => 'slug',
			            'terms'    => 'featured',
			        ],
			    ],
			]); 

		    while ( $featured_albums->have_posts() ) : $featured_albums->the_post();
		        include('components/album-preview.php');
		    endwhile;
		    echo '</div>';
		    wp_reset_postdata();

			?>
		</div>
	</inner-column>
</featured-albums>
<label-info>
	<div class='label-flex'>
		<div class=''>
			<picture class='label-logo'>
				<?php the_post_thumbnail('medium'); ?>
			</picture>
		</div>
		<div class=''>
			<h2 class='attention-voice record-label-name'><?php the_title(); ?></h2>
			<p><strong>Year founded:</strong> <?php the_field('founded_year'); ?></p>
			<p class='calm-voice'><?php the_field('information'); ?></p>
			<p class='calm-voice'> <a class='label-link' href='<?php the_field('website'); ?>'>Site</a></p>
		</div>
	</div>
	<h2 class='attention-voice label-heading'>Albums on this label:</h2>

	<?php
	$args = array(
	   'post_type'  => 'albums',
	   'meta_query' => array(
	       array(
	           'key'   => 'record_label',
	           'value' => get_the_ID(),
	       ),
	   ),
	);

	$loop = new WP_Query($args); ?>
	<ul class='album-container'>
	  <?php
	   while ($loop->have_posts()) : $loop->the_post();
	      include __DIR__ . '/album-preview.php';
	   endwhile; ?>
	</ul>
	<?php

	wp_reset_postdata();
	?>
</label-info>


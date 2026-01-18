<artist-card>
  <div class='artist-flex'>
    <div>
      <picture class='artist-image'>
    	   <?php the_post_thumbnail('medium'); ?>
      </picture>
    </div>
    <div>
      <h2 class='attention-voice name artist-name'><?php echo get_the_title() ?></h2>
    	<h3 class='subtle-voice country'>Country: <?php the_field('country'); ?></h3>
    	<p class='calm-voice bio'><?php the_field('bio'); ?></p>
    	<p class='calm-voice year-formed'><strong>Year formed:</strong> <?php the_field('year_formed'); ?></p>
    	<?php if (!empty($field_value)) { ?>
    	<p class='calm-voice bio'><?php the_field('year_disbanded'); ?></p>
      <?php } ?>
    </div>
  </div>
	<h2 class='attention-voice explore'>Explore albums from this artist:</h2>

	<?php
  $args = array(
      'post_type'  => 'albums',
      'meta_query' => array(
          array(
              'key'   => 'artist',
              'value' => get_the_ID(),
          ),
      ),
  );

  $loop = new WP_Query($args); ?>
  <ul class=album-container>
    <?php
    while ($loop->have_posts()) : $loop->the_post();
        include __DIR__ . '/album-preview.php';
    endwhile; ?>
	</ul>
	<?php

  wp_reset_postdata();
  ?>
</artist-card>
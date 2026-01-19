<genre-info>
	<h2 class='attention-voice genre-name'><?php the_title(); ?></h2>
	<p class='calm-voice'><?php the_field('information'); ?></p>
	<h2 class='attention-voice genre-heading'>Explore albums in this genre below:</h2>

	<?php
    // Query albums for this genre
    $args = array(
        'post_type' => 'albums',
        'posts_per_page' => -1,
        'meta_query' => array(
            array(
                'key'     => 'genre',
                'value'   => get_the_ID(),
                'compare' => 'LIKE',
            ),
        ),
    );

    $loop = new WP_Query($args); ?>
    <ul class=album-container>
    <?php

    // Only include album-preview if we have songs

        while ( $loop->have_posts() ) : $loop->the_post();
            include __DIR__ . '/album-preview.php';
        endwhile; ?>
    </ul>
    <?php
    wp_reset_postdata();
    ?>
</genre-info>
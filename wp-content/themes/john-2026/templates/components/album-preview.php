<article class='album-preview'>
    <div class='album-info'>
    	<picture>
    		<?php the_post_thumbnail('medium'); ?>
    	</picture>
    	<a href="<?php echo get_permalink(); ?>">
    		<h3 class='name subtle-voice'><?php echo get_the_title() ?></h3>
    	</a>
    	<?php 
        $artist = get_field('artist'); // Post Object field
        $label = get_field('record_label');
        $genres = get_field('genre');
        ?>
        <p class="artist">
            <strong>Artist:</strong> 
            <a href="<?php echo get_permalink($artist); ?>">
                <?php echo $artist->post_title; ?>
            </a>
        </p>
        <p class="genre">
            <strong>Genre:</strong> 
            <?php 
            $genre_links = [];
            foreach ($genres as $genre) {
                $genre_links[] = '<a href="' . get_permalink($genre) . '">' . $genre->post_title . '</a>';
            }
            echo implode(', ', $genre_links);
            ?>
        </p>
        <?php if ( ! is_singular('record_labels') ) : ?>
        <p class="label">
            <strong>Record label:</strong> 
            <a href="<?php echo get_permalink($label); ?>">
                <?php echo $label->post_title; ?>
            </a>
        </p>
        <?php endif; ?>
        <?php if ( is_singular('albums') ) : ?>
        <?php
        // Query songs for this album
        $args = array(
            'post_type' => 'songs',
            'posts_per_page' => -1,
            'meta_query' => array(
                array(
                    'key'     => 'album',
                    'value'   => get_the_ID(),
                    'compare' => 'LIKE',
                ),
            ),
            'orderby' => 'menu_order',
            'order' => 'ASC',
        );

        $loop = new WP_Query($args);

        // Only include songs-card if we have songs

        ?>
        <p class='calm-voice track-list'><strong>Track list:</strong></p>
        <ol>
        <?php
            while ( $loop->have_posts() ) : $loop->the_post();
                include __DIR__ . '/songs-card.php';
            endwhile; 
            wp_reset_postdata();
        ?>
        </ol>
        <p><strong>Price: </strong>$<?php the_field('price'); ?></p>
        <a class='add-to-cart' href='#'>Add to cart</a>
        <?php endif; ?>
    </div> 

    <div class='review'>
        <?php
        $content = get_the_content();

        if (is_front_page() && !empty($content)) : ?>
            <div>
                <?php the_content(); ?>
            </div>
        <?php endif; ?>
    </div>
</article>


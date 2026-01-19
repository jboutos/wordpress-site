<article class='album-preview'>
    <div class='album-info'>
    	<picture>
    		<?php the_post_thumbnail('medium'); ?>
    	</picture>
    	<a href="<?php echo get_permalink(); ?>">
    		<h3 class='name subtle-voice'><?php echo get_the_title() ?></h3>
    	</a>
    	<?php 
        $artist = get_field('artist'); 
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
        <div class='price-container'>
	        <p class='old-price'><strong>Price: </strong>$<?php the_field('price'); ?></p>
	        <p><strong>New price: </strong>$<?php the_field('new_price'); ?></p>
     	  </div>
        <a class='add-to-cart' href='#'>Add to cart</a>
    </div> 

</article>
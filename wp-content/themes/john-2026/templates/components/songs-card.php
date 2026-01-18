<songs-list>   
    <?php
    // Get the song(s) for this album
    $songs = get_field('song'); // ACF Post Object field (single or multiple)

        // If it's a single post object, make it an array for uniformity
        if (!is_array($songs)) {
            $songs = array($songs);
        }

        // Loop over each song
        foreach ($songs as $song) {
            ?>
            <li>
			    <?php the_title(); ?>
		    </li>
            <?php
        }
    ?> 
</songs-list>
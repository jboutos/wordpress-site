<songs-list>   
    <?php
    $songs = get_field('song');

        // If it's a single post object, make it an array for uniformity
        if (!is_array($songs)) {
            $songs = array($songs);
        }

        foreach ($songs as $song) {
            ?>
            <li>
			    <?php the_title(); ?>
		    </li>
            <?php
        }
    ?> 
</songs-list>
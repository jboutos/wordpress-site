
<?php 
/**
 * Template Name: Album Collection
 */

get_header(); ?>
<collection>
    <inner-column>
        <h2 class='attention-voice'>Explore a wide list of vinyls, cds and more!</h2>
        <?php
        $args = array(
            'post_type' => 'albums',
        );

        $loop = new WP_Query( $args ); ?>
        <ul class=album-container>
        <?php
        while ( $loop->have_posts() ) : $loop->the_post();
            include ('components/album-preview.php');
        endwhile;
        ?>
        </ul>
        <?php
        wp_reset_postdata();

        ?>
    </inner-column>
</collection>

<?php get_footer(); ?>

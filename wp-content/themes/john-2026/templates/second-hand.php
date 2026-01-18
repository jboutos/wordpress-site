<?php 
/**
 * Template Name: Second Hand
 */

get_header(); ?>
<second-hand-albums>
   <inner-column>
      <h2 class='attention-voice'>Second-hand Albums</h2>
      <?php
      $loop = new WP_Query([
         'post_type' => 'albums',
         'posts_per_page' => 6,
         'tax_query' => [
            [
               'taxonomy' => 'album_visibility',
               'field'    => 'slug',
               'terms'    => 'second-hand',
            ],
         ],
      ]);
      ?>
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
</second-hand-albums>

<?php get_footer(); ?>
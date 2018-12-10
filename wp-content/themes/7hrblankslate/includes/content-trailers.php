<section class="characters">
    <?php $args = array(
        "post_type" => "movietrailer",
        "category_name" => get_field('movietrailer_display_category'),
        "posts_per_page" => -1,
    );
    $query = new WP_Query($args);
    if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
    
        
        <<iframe width="560" height="315" src="https://www.youtube.com/embed/<?php the_field('youtube_link'); ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        
        
        
    <?php endwhile; wp_reset_postdata(); endif; ?>
</section>
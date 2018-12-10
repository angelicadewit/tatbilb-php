<section class="characters">
    <?php $args = array(
        "post_type" => "movieinfo",
        "category_name" => get_field('movieinfo_display_category'),
        "posts_per_page" => -1,
    );
    $query = new WP_Query($args);
    if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
    
        
    <section class="movie-info">
    <p>This movie is:</p>
    <p> <?php the_field('movie_genre')?></p>

    <p>This movie in available in the following languages:</p>
    <p> <?php the_field('languages')?></p>

    <p>This movie in available in the following subtitles:</p>
    <p> <?php the_field('subtitles')?></p>

    <p>This movie stars:</p>
    <p> <?php the_field('cast')?></p>
    
</section>
        
        
    <?php endwhile; wp_reset_postdata(); endif; ?>
</section>
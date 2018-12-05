<h1>Characters</h1>
<section class="characters">
    
    <?php $args = array(
        "post_type" => "characters",
        "category_name" => get_field('characters_display_category'),
        "posts_per_page" => -1,
    );
    $query = new WP_Query($args);
    if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); 
        // var_dump($args); die; 
        ?>
    
        <div class="character">
            <h2 class="character-link"><a href="<?php the_permalink() ?>"><?php the_field('character_name') ?></a></h2>
            <div class="small-image">
                <img src="<?php the_field('actor_image')?>" alt="">
            </div>
        </div>

        
        
        
    <?php endwhile; wp_reset_postdata(); endif; ?>
</section>
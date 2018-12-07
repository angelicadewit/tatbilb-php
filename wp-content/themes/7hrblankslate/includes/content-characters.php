
<section class="characters-section">
    
<h1>Characters</h1>
<div class="characters-row">
    <?php $args = array(
        "post_type" => "characters",
        "category_name" => get_field('characters_display_category'),
        "posts_per_page" => -1,
    );
    $query = new WP_Query($args);
    if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); 
        
        ?>
    
            <div class="character">
                <a href="<?php the_permalink() ?>">
                    <h2 class="character-link"><?php the_field('character_name') ?></h2>
                    <div class="small-image">
                        <img src="<?php the_field('actor_image')?>" alt="">
                    </div>
                </a>
            </div>

        
        
    <?php endwhile; wp_reset_postdata(); endif; ?>
</div>
</section>
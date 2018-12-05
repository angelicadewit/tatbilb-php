<section class="characters">
    <?php $args = array(
        "post_type" => "characters",
        "category_name" => "maincharacters",
        "posts_per_page" => 2,
    );
    $query = new WP_Query($args);
    if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
    
        
        <h1><a href="<?php the_permalink() ?>"><?php the_field('character_name') ?></a></h1>

        <img src="<?php the_field('actor_image')?>" alt="">
        
        
        
    <?php endwhile; wp_reset_postdata(); endif; ?>
</section>
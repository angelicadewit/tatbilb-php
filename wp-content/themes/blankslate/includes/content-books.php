<section class="books">
    <?php 
        $args = array(
            "post_type" => "books",
            "category_name" => get_field('books_display_category'),
            "posts_per_page" => -1,
        );
        $query = new WP_Query($args);
        if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
        
            
            <h1><?php the_field('book_title') ?></h1>

            <img src="<?php the_field('book_image')?>" alt="">

            <a href="<?php the_field('amazon_link')?>">Amazon</a>
            <a href="<?php the_field('barnes_and_noble_link')?>">Barnes and Noble</a>
            
            
            
    <?php endwhile; wp_reset_postdata(); endif; ?>
</section>
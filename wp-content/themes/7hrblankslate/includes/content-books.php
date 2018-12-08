<section class="books-section">

<h1>Books</h1>
<div class="books-row">
    <?php 
        $args = array(
            "post_type" => "books",
            "category_name" => get_field('books_display_category'),
            "posts_per_page" => -1,
        );
        $query = new WP_Query($args);
        if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
        
        <div class="book">
            <h2><?php the_field('book_title') ?></h2>

            <img src="<?php the_field('book_image')?>" alt="">

            <p><a href="<?php the_field('amazon_link')?>">Amazon</a></p>
            <p><a href="<?php the_field('barnes_and_noble_link')?>">Barnes and Noble</a></p>
        </div>
            
            
            
    <?php endwhile; wp_reset_postdata(); endif; ?>
</section>
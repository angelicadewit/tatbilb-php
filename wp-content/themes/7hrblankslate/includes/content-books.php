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
        
        <div data-tilt data-tilt-speed="800" data-tilt-max="20" data-tilt-reset="false" data-tilt-reverse="true" class="book-home" style="background: url(<?php the_field('bookbg')?>)">
            <a href="<?php the_permalink() ?>">
                <img src="<?php the_field('book_image')?>" alt="">
            </a>
        </div>
            
            
            
    <?php endwhile; wp_reset_postdata(); endif; ?>
</section>
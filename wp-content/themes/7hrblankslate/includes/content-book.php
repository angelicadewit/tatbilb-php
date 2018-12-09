<section class="single-book">

    <div class="book">
        <h2><?php the_field('book_title') ?></h2>

        <div class="top-angle"></div>
        <div class="book-content"  style="background: url(<?php the_field('bookbg')?>)">

            <img src="<?php the_field('book_image')?>" alt="">



            <div class="book-info">
                <p><?php the_field('plot')?></p>

                <p><a href="<?php the_field('amazon_link')?>">Amazon</a></p>
                <p><a href="<?php the_field('barnes_and_noble_link')?>">Barnes and Noble</a></p>
            </div>
        </div>
    </div>
    
</section>
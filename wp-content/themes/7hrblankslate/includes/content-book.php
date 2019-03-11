<section class="single-book">

    <div class="book">
        <h2><?php the_field('book_title') ?></h2>

        <div class="book-content"  style="background: url(<?php the_field('bookbg')?>)">
            <div class="top-angle"></div>

            
            <img src="<?php the_field('book_image')?>" alt="">


            <div class="book-info">
                <p><?php the_field('plot')?></p>

                

                <div class="buttons">
                <h3>Buy Now:</h3>
                    <a href="<?php the_field('amazon_link')?>" class="button">Amazon</a>
                    <a href="<?php the_field('barnes_and_noble_link')?>" class="button">Barnes and Noble</a>
                
                </div>
    
                
            </div>
        </div>
    </div>
    
</section>
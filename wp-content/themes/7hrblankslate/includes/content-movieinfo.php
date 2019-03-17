<section class="movie-info">
    <div class="movie-info-wrapper">
        <span class="movie-title"> <?php the_field('movie_name')?></span>

        <div class="data-wrapper">
            <span class="movie year"> <?php the_field('release_year')?></span> |
            <span class="movie rating"> <?php the_field('rating')?></span> |
            <span class="movie runtime"> <?php the_field('runtime')?></span> |
            <span class="movie genre"> <?php the_field('genre')?></span>
        </div>

        <div class="summary-and-cast">
            <p class="summary"><?php the_field('summary')?></p>
            <p class="cast"><span class="starring-text">Starring:</span> <?php the_field('cast')?></p>
        </div>
    </div>

    <div class="netflix-logo">
        <img src="<?php the_field('netflix_logo')?>" alt="Netflix">
    </div>

    
</section>
<section class="single-character">

    <div class="character-name">
        <div class="top-angle"></div>
        <h2><?php the_field('character_name') ?></h2>
        <h3>Portrayed by: <?php the_field('actor_name') ?></h3>
    </div>


    <div class="character-bio">
        <div>
            <img src="<?php the_field('actor_image')?>" alt="">
        </div>

        <div class="character-info">
            <h4>About the character:</h4>
            <p><?php the_field('blurb') ?></p>

            <h4>About the actor:</h4>
            <p><?php the_field('actor_bio') ?></p>
        </div>
    </div>
</section>

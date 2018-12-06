<section class="single-character">

    <div>
        <h2><?php the_field('character_name') ?></h2>
        <h3><?php the_field('actor_name') ?></h3>
    </div>

    <div>
        <img src="<?php the_field('actor_image')?>" alt="">
    </div>

    <div>
        <p>About the character:</p>
        <p><?php the_field('blurb') ?></p>

        <p>About the actor:</p>
        <p><?php the_field('actor_bio') ?></p>
    </div>
</section>

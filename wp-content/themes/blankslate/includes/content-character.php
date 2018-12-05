<section class="single-character">
    <h1><?php the_field('character_name') ?></h1>
    <h2><?php the_field('actor_name') ?></h2>

    <img src="<?php the_field('actor_image')?>" alt="">

    <p>About the character:</p>
    <p><?php the_field('blurb') ?></p>

    <p>About the actor:</p>
    <p><?php the_field('actor_bio') ?></p>
</section>

<?php
    /* Template Name: Home Page */
?>

<?php get_header(); ?>

<?php echo get_template_part('includes/content', 'home') ?>

<?php echo get_template_part('includes/content', 'trailer') ?>

<?php echo get_template_part('includes/content', 'characters') ?>

<?php echo get_template_part('includes/content', 'books') ?>

<?php get_footer(); ?>
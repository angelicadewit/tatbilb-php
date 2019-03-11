<?php

    function tatbilb_enqueues(){

        wp_register_style('tatbilb-css', get_template_directory_uri() . '/style.css', false, null);
        wp_enqueue_style('tatbilb-css');


        wp_enqueue_script( 'tiltjs', 'https://cdnjs.cloudflare.com/ajax/libs/vanilla-tilt/1.6.1/vanilla-tilt.min.js', array(), '1.6.1', true );
        wp_enqueue_script( 'my-script', get_template_directory_uri() . '/js/main.js', array(), '1.6.1', true );

    }

    add_action('wp_enqueue_scripts', 'tatbilb_enqueues', 100);

    
<?php

    function tatbilb_enqueues(){

        wp_register_style('tatbilb-css', get_template_directory_uri() . '/css/style.css', false, null);
        wp_enqueue_syle('tatbilb-css');
    }

    add_action('wp-enqueue-scripts', 'tatbilb_enqueues', 100)
?>
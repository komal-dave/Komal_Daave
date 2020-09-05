<?php
    function test_css(){
        wp_enqueue_style('test_main_css',get_stylesheet_uri());
    }

    //hoocks
    add_action('wp_enqueue_scripts','test_css');
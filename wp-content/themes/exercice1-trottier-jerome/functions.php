<?php
function cidw_4w4_enqueue()
{
    wp_enqueue_style('style.css', get_stylesheet_uri());
}
add_action("wp_enqueue_scripts", "cidw_4w4_enqueue");

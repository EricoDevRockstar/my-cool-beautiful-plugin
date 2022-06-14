<?php

/*
    Plugin Name: My Cool Beautiful Plugin
    Description: The most beautiful plugin being developed.
    Version: 1.2.0
    Author: Eric M.
    Author URI: https://www.datiospecio.com/
*/

function addContentAtEndOfPost($content) {
    if (is_single() && is_main_query()) {
        return $content . '<p>My name is Mrefu mwerevu.</p>';
    }
    return $content;
}

add_filter('the_content', 'addContentAtEndOfPost');
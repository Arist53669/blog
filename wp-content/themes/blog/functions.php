<?php
function load_js()
{
    wp_enqueue_script('common-js', get_template_directory_uri() . '/assets/js/common.js', array('jquery'), null, true);
}

function load_css()
{
    wp_enqueue_style('post-style', get_template_directory_uri() . '/assets/css/post.css');
    wp_enqueue_style('sidebar-left-style', get_template_directory_uri() . '/assets/css/sidebar-left.css');
}

add_action('wp_enqueue_scripts', 'load_js');
add_action('wp_enqueue_scripts', 'load_css');

if (!function_exists('get_content_trim')) {
    /**
     * @param int $desired_word_count
     * @return string
     */
    function get_content_trim()
    {
        $blocks = parse_blocks(get_the_content());
        $count = 0;

        foreach ($blocks as $block) {
            if ($count === 4) {
                break;
            }

            if ($block['blockName'] === 'core/heading' || $block['blockName'] === 'core/paragraph') {
                $count++;
                echo $block['innerContent'][0];
            }
        }

        echo '[...]';
    }
}

// add_theme_support('post-thumbnails');
add_theme_support('title-tag');

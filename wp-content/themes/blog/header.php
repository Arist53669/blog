<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head() ?>
    <link rel="stylesheet" href="<?php echo  get_template_directory_uri() . '/style.css' ?>">
</head>

<body <?php body_class(); ?>>
    <?php if (function_exists('wp_body_open')) {
        wp_body_open();
    } ?>
    <button type="button" id="collapse-menu">
        <span class="dashicons dashicons-menu-alt3"></span>
    </button>
    <?php
    wp_nav_menu();
    ?>
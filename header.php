<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>La Pizzeria</title>
    <?php wp_head(); ?>
</head>

<h1>Welcome to flyhightech</h1>

<body>

    //Below is where the image is located.

    <header class="site-header">

        <div class="logo">

            <a href="<?php echo esc_url( home_url('/') ); ?>">

                <img src="<?php echo get_template_directory_uri() ?>/img/logo.svg"     class="logoimage">

            </a>

        </div>

    </header>

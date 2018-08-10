<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>La Pizzeria</title>
    <?php wp_head(); ?>
</head>

<h1>Welcome to flyhightech</h1>

<body>

    <!--    Below is where the image is located.   -->

    <header class="site-header">

        <div class="logo">

            <a href="#<?php echo esc_url(home_url('/')); ?>">

                <img src="<?php echo get_template_directory_uri() ?>/img/logo.svg" class="logoimage">

            </a>

        </div>

        <!-- End of the Logo -->

        <div class="header-information">
            <div class="socials">
                <?php $args = array(
                        'theme_location'   => 'social-menu',
                        'container'        => 'nav',
                        'container_class'  => 'socials'
                        );
                     wp_nav_menu($args);
                ?>
            </div>

            <div class="address">
                <p>123 Seseme street, Texas 88292</p>
            </div>

        </div>
    </header>
    <div class="main-menu">
        <div class="navigation">
            <?php 
                $args = array(
                    'theme_location' => 'header-menu',
                    'container' => 'nav',
                    'container_class' => 'site-nav'
                );
                wp_nav_menu($args);
            ?>
        </div>
    </div>

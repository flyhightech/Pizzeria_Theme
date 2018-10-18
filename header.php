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

        <div class="container">

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
                        'container_class'  => 'socials',
                        'container_id'     => 'socials',
                        'link_before'      => '<span class="sr-text">',
                        'link_after'       => '</span>',
                        );
                     wp_nav_menu($args);
                ?>
                </div>

                <!--         This is where the social links code ends!           -->

                <div class="address">
                    <p>123 Seseme street, Chicago Il 60292</p>
                    <p>999-298-2999</p>
                </div>

                <!--       Address and the phone number section ends here        -->

            </div>
        </div>
    </header>
    <div class="main-menu">
        <div class="navigation">
            <?php 
                $args = array(
                    'theme_location'  => 'header-menu',
                    'container'       => 'nav',
                    'container_class' => 'site-nav'
                );
                wp_nav_menu($args);
            ?>

        </div>
    </div>







    <!-- Reach for the moon, you'll still end up amongst the stars. -->

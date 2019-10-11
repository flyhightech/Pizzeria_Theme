<?php get_header(); ?>

    <?php while(have_posts(  )) : the_post(); ?>

        <div class="hero" style="background-image:url(<?php echo get_the_post_thumbnail_url(); ?>); ">
            <div class="hero-content">
                <div class="hero-text">
                    <h2><?php the_title(); ?></h2>
                </div>
            </div>
        </div>

        <div class="main-content container">
            <main class="text-center content-text">
                <?php the_content(); ?>
            </main>
        </div>

        <div class="box-information container clear">
            <div class="box">
                <div class="content-box">
                    <?php the_field('image_1'); ?>
                    <?php the_field('description_1'); ?>
                </div>
            </div>
        </div>

    <?php endwhile; ?>

<?php get_footer(); ?>

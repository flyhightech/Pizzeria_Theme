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
                <?php  

                    $id_image = get_field('image01');
                    $image = wp_get_attachment_image_src($id_image, 'boxes');
                
                ;?>
                <pre>
                <?php var_dump(); ?>
                </pre>
                <img src="<?php  ?>">
                <div class="content-box">
                    <?php the_field('image01'); ?>
                    <?php the_field('description_1'); ?>
                </div>
            </div>
        </div>

    <?php endwhile; ?>

<?php get_footer(); ?>

<?php get_header(); ?>

    <?php while(have_posts(  )) : the_post();?>

        <div class="hero">
            <div class="hero-content">
                <div class="hero-text">
                    <h2><?php the_title(); ?></h2>
                </div>
            </div>
        </div>
        
            <?php the_post_thumbnail() ;?>
            <?php the_content() ;?>

    <?php endwhile; ?>

<?php get_footer(); ?>

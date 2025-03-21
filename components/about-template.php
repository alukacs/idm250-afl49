<?php
/*
 * Template Name: About Template
 */
?>

<?php get_header(); ?>
    
    <div class="about-page-hero">

        <h1 class="about-page-title">
            <?php echo get_the_title(); ?>
        </h1>

        <?php if (has_post_thumbnail()) : ?>
            
            <div class="about-page-featured-image">
            <? the_post_thumbnail(); ?>
            </div>

        <?php endif; ?>
    </div>   

    <div class="about-page-content">
        <?php echo get_the_content(); ?>
    </div>

    <img src="<?php echo get_stylesheet_directory_uri(); ?>" alt="">

<?php get_footer(); ?>
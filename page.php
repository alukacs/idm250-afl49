<?php get_header(); ?>

    <h1 class="page-title">
        <?php echo get_the_title(); ?>
    </h1>

    <?php if (has_post_thumbnail()) : ?>
        <div class="page-featured-image">
            <? the_post_thumbnail(); ?>
        </div>
    <?php endif; ?>

    <div class="page-content">
        <?php echo get_the_content(); ?>
    </div>

    <img src="<?php echo get_stylesheet_directory_uri(); ?>" alt="">

<?php get_footer(); ?>



<?php get_header(); ?>

<h1 class="page-title">
<?php echo get_the_title(); ?>
</h1>


<?php if (has_post_thumbnail()) : ?>
<div class="featured-image">
    <? the_post_thumbnail(); ?>
</div>
<?php endif; ?>

<div class="main-content">
    <?php echo get_the_content(); ?>
</div>

<h1>Front Page</h1>
<p>hello this is the front-page.php file</p>

<img src="<?php echo get_stylesheet_directory_uri(); ?>" alt="">

<?php get_footer(); ?>
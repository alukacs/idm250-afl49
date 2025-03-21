<?php
    $query = new WP_Query([
        'post_type' => 'post',
        'posts_per_page' => 6,
    ]);
?>

    <?php if ($query->have_posts()) : ?>

        <section class="latest-posts">

        <h2 class="section-title">Latest captures</h2>

        <div class="grid grid-3">
            <?php
            // Loop through the query results
            while ($query->have_posts()) : $query->the_post();
                // For each post, render this component
                get_template_part('components/blog-card');
            endwhile;
            ?>
        </div>

        <?php wp_reset_postdata(); ?>
        
        </section>

    <?php else : ?>

    <p>No posts found.</p>
<?php endif; ?>
<?php
// Gets the categories for the current post
    $categories = wp_get_post_categories(get_the_ID());
    if ($categories) :
        $query = new WP_Query([
            'category__in' => $categories, // Get posts in the same categories
            'post__not_in' => [get_the_ID()],
            'posts_per_page' => 3, // Display 3 related posts
        ]);
?>

<?php if ($query->have_posts()) : ?>
    <section class="related-posts">
        <h2>Related captures</h2>
        <div class="grid grid-3">
            <?php while ($query->have_posts()) : $query->the_post();
                // For each post, render this component
                get_template_part('components/blog-card');
            endwhile; ?>
        </div>
    </section>

    <?php endif;
        wp_reset_postdata();
    endif;
?>
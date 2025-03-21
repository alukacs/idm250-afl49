<?php
/**
 * Template Name: Post Listing
 */

get_header(); ?>

<div class="archive-wrapper">
  <h1 class="archive-header">Photos</h1>
  <?php
  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args = [
    'post_type' => 'post',
    'posts_per_page' => 9,
    'paged' => $paged,
];
$query = new WP_Query($args);

if ($query->have_posts()) : ?>
  <ul class="grid grid-3">
    <?php while ($query->have_posts()) : $query->the_post(); ?>
    <?php get_template_part('components/blog-card'); ?>
    <?php endwhile; ?>
  </ul>

  <div class="pagination-wrapper">
    <?php
      set_query_var('custom_query', $query);
      get_template_part('components/pagination');
    ?>
  </div>

  <?php wp_reset_postdata(); ?>

<?php else : ?>
  <p><?php esc_html_e('No photos found.', 'idm250-2025'); ?></p>
<?php endif; ?>
</div>


<?php get_footer(); ?>
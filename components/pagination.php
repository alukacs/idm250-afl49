<?php
$custom_query = get_query_var('custom_query');

$big = 999999999;
echo paginate_links([
    'base'    => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
    'format'  => '?paged=%#%',
    'current' => max(1, get_query_var('paged')),
    'total'   => $custom_query->max_num_pages
]);
?>
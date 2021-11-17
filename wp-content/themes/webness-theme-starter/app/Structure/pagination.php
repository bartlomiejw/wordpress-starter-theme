<?php

/**
 * Wordpress Custom Pagination.
 *
 * @return void
 */

function webness_pagination(\WP_Query $wp_query = null, $echo = true, $params = [])
{
    if (null === $wp_query) {
        global $wp_query;
    }

    $add_args = [];

    //add query (GET) parameters to generated page URLs
    /*if (isset($_GET[ 'sort' ])) {
$add_args[ 'sort' ] = (string)$_GET[ 'sort' ];
}*/

    $pages = paginate_links(
        array_merge([
            'base' => str_replace(999999999, '%#%', esc_url(get_pagenum_link(999999999))),
            'format' => '/page/%#%',
            'current' => max(1, get_query_var('page_val')),
            'total' => $wp_query->max_num_pages,
            'type' => 'array',
            'show_all' => true,
            'end_size' => 3,
            'mid_size' => 1,
            'prev_next' => true,
            'prev_text' => 'Poprzedni',
            'next_text' => 'Następny',
            'add_args' => $add_args,
            'add_fragment' => ''
        ], $params)
    );

    if (is_array($pages)) {
        // $current_page = (get_query_var('page_val') ? get_query_var('page_val') : 1);

        $pagination = '<div class="pagination-wrap">
    <ul class="pagination">
        <li class="page-item prev-posts"></li><span>';

        foreach ($pages as $page) {
            $pagination .= '<li class="page-item' . (strpos($page, 'current') !== false ? ' active' : '') . '"> ' .
                str_replace('page-numbers', 'page-link', $page) . '</li>';
        }

        $pagination .= '</span>
        <li class="page-item next-posts"></li>
    </ul>
</div>';

        return $pagination;
    }

    return null;
}
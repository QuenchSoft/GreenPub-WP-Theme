<?php
if (function_exists('add_theme_support')) {
    add_theme_support('menus'); // включаем поддержку динамического меню
    add_theme_support( 'post-thumbnails' ); // включаем поддержку миниатюр
}

if (function_exists('register_sidebar')) {
    register_sidebar(); //включаем поддержку виджетов
}  
    
    /* Очищаем wp_head(); */
    function remove_recent_comments_style() {  
      global $wp_widget_factory;  
      remove_action( 'wp_head', array( $wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style' ) );  
    }  
    add_action( 'widgets_init', 'remove_recent_comments_style' );  
    remove_action( 'wp_head', 'feed_links_extra', 3 ); 
    remove_action( 'wp_head', 'feed_links', 2 );
    remove_action( 'wp_head', 'rsd_link' );
    remove_action( 'wp_head', 'wlwmanifest_link' );
    remove_action( 'wp_head', 'index_rel_link' );
    remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 ); 
    remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );
    remove_action( 'wp_head', 'adjacent_posts_rel_link', 10, 0 );
    remove_action( 'wp_head', 'wp_generator' );

    /* Постраничная навигация wp_corenavi(); */

function wp_corenavi() {
   global $wp_query, $wp_rewrite;
   $pages = '';
   $max = $wp_query->max_num_pages;
   if (!$current = get_query_var('paged')) $current = 1;
   $a['base'] = str_replace(999999999, '%#%', get_pagenum_link(999999999));
   $a['total'] = $max;
   $a['current'] = $current;

   $total = 1; //1 - выводить текст "Страница N из N", 0 - не выводить
   $a['mid_size'] = 3; //сколько ссылок показывать слева и справа от текущей
   $a['end_size'] = 1; //сколько ссылок показывать в начале и в конце
   $a['prev_text'] = '&laquo;'; //текст ссылки "Предыдущая страница"
   $a['next_text'] = '&raquo;'; //текст ссылки "Следующая страница"

   if ($max > 1) echo '<div class="navigation">';
   if ($total == 1 && $max > 1) $pages = '<span class="pages">Страница ' . $current . ' из ' . $max . '</span> '."\r\n";
   echo $pages . paginate_links($a);
   if ($max > 1) echo '</div>';
} 
    
?>
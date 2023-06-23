<?php

/**
 * Breadcrumbs function, adapted from: https://techpulsetoday.com/wordpress-breadcrumbs-without-plugin/
 * 
 
 * @since 0.1.0
 */
function the_breadcrumb() {
    global $post;

    // Early exit if in the main page
	if ( is_front_page() )
        return;

    $delimiter = '<i class="icon fas fa-chevron-right"></i>';
    $before = '<li class="crumb">' . $delimiter . '<span>';
    $after = '</span></li>';
    $before_current = '<li class="crumb" data-active="active">' . $delimiter . '<span>';
    $after_current = '</span></li>';

    $home_link = get_bloginfo('url');
    $home_label = __( 'Início', 'govbr' ); // text for the 'Home' link


    echo '<div id="breadcrumbs" class="br-breadcrumb container-lg"><ul class="crumb-list">';
    
    echo '<li class="crumb home"><a class="br-button circle" href="' . $home_link . '"><span class="sr-only">' . $home_label . '</span><i class="fas fa-home"></i></a></li>';
    
    if ( is_category() ) {

        $current_category = get_category(get_query_var('cat'), false);

        if ($current_category->parent != 0) {
            
            $categories_html = get_category_parents($current_category->parent, true, ',');
            $categories_html_as_array = explode(',', $categories_html);
            foreach($categories_html_as_array as $category_html) {
                if ( !empty($category_html) )
                    echo $before . $category_html . $after;    
            }
        }
        echo $before_current . single_cat_title('', false) . $after_current;

    } elseif ( is_search() ) {

        echo $before_current . __( 'Resultados de busca por "', 'govbr' ) . get_search_query() . '"' . $after_current;
    
    } elseif ( is_day() ) {

        echo $before . '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a>' . $after;
        echo $before . '<a href="' . get_month_link(get_the_time('Y'), get_the_time('m')) . '">' . get_the_time('F') . '</a>' . $after;
        echo $before_current . get_the_time('d') . $after_current;
    
    } elseif ( is_month() ) {

        echo $before . '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a>' . $after;
        echo $before_current . get_the_time('F') . $after_current;
    
    } elseif ( is_year() ) {

        echo $before_current . get_the_time('Y') . $after_current;
    
    } elseif ( is_single() && !is_attachment() ) {

        if (get_post_type() != 'post') {

            $post_type = get_post_type_object(get_post_type());
            $slug = $post_type->rewrite;
            echo '<li class="crumb"><a href="' . $home_link . '/' . $slug['slug'] . '/">' . $post_type->labels->singular_name . '</a>' . $after;
            
            echo $before_current . get_the_title() . $after_current;
            
        } else {
                
            $current_category = get_the_category();
            $current_category = $current_category[0];
            $categories_html = get_category_parents($current_category, true, ',');
            $categories_html_as_array = explode(',', $categories_html);
            foreach($categories_html_as_array as $category_html) {
                if ( !empty($category_html) )
                    echo $before . $category_html . $after;    
            }
            
            echo $before_current . get_the_title() . $after_current;
        }

    } elseif ( !is_single() && !is_page() && get_post_type() != 'post' && !is_404() ) {

        $post_type = get_post_type_object(get_post_type());
      
        if ( $post_type && $post_type->labels )
            echo $before_current . $post_type->labels->singular_name . $after_current;
        
    } elseif ( is_home() ) {

        $post_type = get_post_type_object(get_post_type());
        
        if ( $post_type && $post_type->labels )
            echo $before_current . $post_type->labels->items_list . $after_current;
    
    } elseif ( is_attachment() ) {

        $parent = get_post($post->post_parent);
        $current_category = get_the_category($parent->ID);
        $current_category = $current_category[0];
        $categories_html = get_category_parents($current_category, true, ',');
        $categories_html_as_array = explode(',', $categories_html);
        foreach($categories_html_as_array as $category_html) {
            if ( !empty($category_html) )
                echo $before . $category_html . $after;    
        }

        echo $before . '<a href="' . get_permalink($parent) . '">' . $parent->post_title . '</a>' . $after;
        
        echo $before_current . get_the_title() . $after_current;
        
    } elseif ( is_page() && !$post->post_parent ) {

        echo $before_current . get_the_title() . $after_current;
        
    } elseif ( is_page() && $post->post_parent)  {

        $parent_id  = $post->post_parent;
        $breadcrumbs = array();

        while ( $parent_id ) {
            $page = get_page($parent_id);
            $breadcrumbs[] = $before . '<a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a>' . $after;
            $parent_id  = $page->post_parent;
        }

        $breadcrumbs = array_reverse($breadcrumbs);
        for ($i = 0; $i < count($breadcrumbs); $i++) {
            echo $breadcrumbs[$i];
        }

        echo $before_current . get_the_title() . $after_current;
    
    } elseif ( is_tag() ) {

        echo $before_current . __( 'Posts marcados como "', 'govbr' ) . single_tag_title('', false) . '"' . $after_current;

    } elseif ( is_author() ) {
        global $author;

        $userdata = get_userdata($author);
        echo $before_current . __( 'Artigos postados por ', 'govbr' ) . $userdata->display_name . $after_current;

    } elseif (is_404()) {

        echo $before_current . __( 'Erro 404', 'govbr' ) . $after_current;
    
    }

    if ( get_query_var('paged') ) {

        if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() )
            echo ' (';
        
        echo __( 'Página', 'govbr' ) . ' ' . get_query_var('paged');
        
        if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() )
            echo ')';
    
    }

    echo '</ul></div>';

} // end the_breadcrumb()
<?php

function cidw_4w4_enqueue()
{
    //wp_enqueue_style('style_css', get_stylesheet_uri());
    wp_enqueue_style('cidw4w4-le-style', get_template_directory_uri() . '/style.css', array(), filemtime(get_template_directory() . '/style.css'), false);
    wp_enqueue_style('cidw4w4-police-google', "https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,600;1,400;1,500;1,600&family=Poppins:ital,wght@0,400;0,500;0,600;1,400;1,500;1,600&family=Roboto:ital,wght@0,400;0,500;1,400;1,500&display=swap", false);
}

add_action("wp_enqueue_scripts", "cidw_4w4_enqueue");

/* -------------------------------------------------- Enregistré le menu */
function cidw_4w4_register_nav_menu()
{
    register_nav_menus(array(
        'menu_principal' => __('Menu principal', 'cidw_4w4'),
        'menu_footer'  => __('Menu footer', 'cidw_4w4'),
        'menu_externe' => __('Menu externe', 'cidw_4w4'),
        'menu_categorie_cours' => __('Menu categorie cours', 'cidw_4w4'),
        'menu_accueil' => __('Menu accueil', 'cidw_4w4')
    ));
}
add_action('after_setup_theme', 'cidw_4w4_register_nav_menu', 0);

/* Cette nouvelle version permet de ne pas avoir de warning */
function prefix_nav_description($item_output, $item)
{
    if (!empty($item->description)) {
        $item_output = str_replace(
            '</a>',
            '<hr><span class="menu-item-description">' . $item->description . '</span>' .  '</a>',
            $item_output
        );
    }
    return $item_output;
}
add_filter('walker_nav_menu_start_el', 'prefix_nav_description', 10, 2);

/**
 * @param : WP_Query $query
 */
function cidw_4w4_pre_get_posts(WP_Query $query)
{
    if (!is_admin() && is_main_query() && is_category(array('web', 'cours', 'design', 'video', 'utilitaire', 'creation-3d', 'jeu'))) {
        //$ordre = get_query_var('ordre');
        $query->set('posts_per_page', -1);
        // $query->set('orderby', $cle);
        $query->set('orderby', 'title');
        // $query->set('order',  $ordre);
        $query->set('order',  'ASC');
        // var_dump($query);
        // die();
    }
}
function cidw_4w4_query_vars($params)
{
    $params[] = "cletri";
    $params[] = "ordre";
    //$params["cletri"] = "title";
    //var_dump($params); die();
    return $params;
}
add_action('pre_get_posts', 'cidw_4w4_pre_get_posts');
add_filter('query_vars', 'cidw_4w4_query_vars');
/* ---------------------------------------------------------------------- filtré les choix du menu principal */
function cidw_4w4_filtre_choix_menu($obj_menu)
{
    //var_dump($obj_menu);
    foreach ($obj_menu as $cle => $value) {
        // print_r($value);
        //$value->title = substr($value->title,0,7);
        $value->title = wp_trim_words($value->title, 3, "...");
        // echo $value->title . '<br>';
    }
    return $obj_menu;
}
add_filter("wp_nav_menu_objects", "cidw_4w4_filtre_choix_menu");
/* --------------------------------------------------------------------------  add_theme_support */

function cidw_4w4_add_theme_support()
{
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo', array(
        'height' => 200,
        'width'  => 200,
    ));
}

add_action('after_setup_theme', 'cidw_4w4_add_theme_support');
/* ----------------------------------------------------------------------  Enregistrement des sidebars */
add_action('widgets_init', 'my_register_sidebars');
function my_register_sidebars()
{
    /* Register the 'primary' sidebar. */
    register_sidebar(
        array(
            'id'            => 'footer_colonne_1',
            'name'          => __('Footer colonne #1'),
            'description'   => __('Sidebar s\'affichant dans une colonne du pied de page'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );

    register_sidebar(
        array(
            'id'            => 'footer_colonne_2',
            'name'          => __('Footer colonne #2'),
            'description'   => __('Sidebar s\'affichant dans une colonne du pied de page'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );

    register_sidebar(
        array(
            'id'            => 'footer_colonne_3',
            'name'          => __('Footer colonne #3'),
            'description'   => __('Sidebar s\'affichant dans une colonne du pied de page'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );

    register_sidebar(
        array(
            'id'            => 'footer_ligne_1',
            'name'          => __('Footer ligne #1'),
            'description'   => __('Sidebar s\'affichant dans une ligne du pied de page'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );

    register_sidebar(
        array(
            'id'            => 'footer_ligne_2',
            'name'          => __('Footer ligne #2'),
            'description'   => __('Sidebar s\'affichant dans une ligne du pied de page'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );
    /* Repeat register_sidebar() code for additional sidebars. */
}
/* ---------------------------------------------------- afficher une description de choix de menu */
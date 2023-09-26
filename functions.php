<?php  
define('fz_ROOT', get_stylesheet_directory().'/');
define('fz_URL', get_stylesheet_directory_uri() .'/');

require_once('wp_bootstrap_navwalker.php');

require_once( fz_ROOT . '/lib/fz_enqueue_scripts.php' );

require_once( fz_ROOT . '/lib/fz_theme_init.php' );

require_once( fz_ROOT . '/lib/fz_meta_fields.php' );

require_once( fz_ROOT . '/lib/fz_functions.php');

require_once( fz_ROOT . '/lib/fz_shortcodes.php');

require_once( fz_ROOT . '/lib/fz_ajax.php');


function freezoner_menu() {

wp_nav_menu( array(

    'menu'              => 'Main Menu',

    'theme_location'    => 'navigation-menu',

    'menu_class'        => 'navigation clearfix',

    'depth'             => 3,

    'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',

    'walker'            => new wp_bootstrap_navwalker())

 );

}

function footer_menu() {
wp_nav_menu( array(
      'menu'              => 'Footer Menu',
      'theme_location'    => 'footer-menu',
      'depth'             => 2,
      'menu_class'        => 'p-dropdown-content',
  ) );

}




function fz_mime_types( $mimes ) {



    $mimes['svg']  = 'image/svg+xml';

    $mimes['svgz'] = 'image/svg+xml';

 

    return $mimes;

}

add_filter( 'upload_mimes', 'fz_mime_types' );


/*Remove Title TO Anchor Tag Menu*/
function my_menu_notitle( $menu ){
  return $menu = preg_replace('/ title=\"(.*?)\"/', '', $menu );

}
add_filter( 'wp_nav_menu', 'my_menu_notitle' );
add_filter( 'wp_page_menu', 'my_menu_notitle' );
add_filter( 'wp_list_categories', 'my_menu_notitle' );

/*Add Footer Widget*/
function fz_widgets_init() {

  register_sidebar( array(
    'name'          => 'First Footer Column',
    'id'            => 'first_footer',
    'before_widget' => '<div>',
    'after_widget'  => '</div>',
  ));
}
add_action( 'widgets_init', 'fz_widgets_init' );

function fz_widgets_link_init() {

  register_sidebar( array(
    'name'          => 'Seconed Footer Column',
    'id'            => 'seconed_footer',
    'before_widget' => '<div>',
    'after_widget'  => '</div>',
));
}
add_action( 'widgets_init', 'fz_widgets_link_init' );

function ha_load_theme_textdomain() {
    load_theme_textdomain( 'freezoner', get_template_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'ha_load_theme_textdomain' );


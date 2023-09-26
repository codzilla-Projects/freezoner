<?php 
function freezoner_register_custom_menu(){

	add_theme_support('post-thumbnails');
	register_nav_menus(array(

		'bootstrap-menu'     => 'Navigation Bar',
       /* 'company-menu'       => 'Company Menu',
        'links-menu'         => 'Links Menu',*/

	));

	$label = array(

	        'name'                  => _x( 'sliders', 'Homepage sliders', 'freezoner' ),

	        'singular_name'         => _x( 'slider', 'Post type singular name', 'freezoner' ),

	        'menu_name'             => _x( 'sliders', 'Admin Menu text', 'freezoner' ),

	        'name_admin_bar'        => _x( 'slider', 'Add New on Toolbar', 'freezoner' ),

	        'add_new'               => __( 'Add New slider', 'freezoner' ),

	        'add_new_item'          => __( 'Add New slider', 'freezoner' ),

	        'new_item'              => __( 'New slider', 'freezoner' ),

	        'edit_item'             => __( 'Edit slider', 'freezoner' ),

	        'view_item'             => __( 'View slider', 'freezoner' ),

	        'all_items'             => __( 'All sliders', 'freezoner' ),

	        'search_items'          => __( 'Search slider', 'freezoner' ),

	        'parent_item_colon'     => __( 'Parent slider:', 'freezoner' ),

	        'not_found'             => __( 'No slider found.', 'freezoner' ),

	        'not_found_in_trash'    => __( 'No slider found in Trash.', 'freezoner' ),

	    );     

	    $arg = array(

	        'labels'             => $label,

	        'description'        => 'Home Page sliders.',

	        'public'             => true,

	        'publicly_queryable' => true,

	        'show_ui'            => true,

	        'show_in_menu'       => true,

	        'query_var'          => true,

	        'capability_type'    => 'post',

	        'has_archive'        => true,

	        'hierarchical'       => false,

	        'menu_position'      => 5,

	        'menu_icon'			 => 'dashicons-slides',

	        'supports'           => array( 'title','editor', 'thumbnail' ),

	        'rewrite'            => array( 'slug' => 'sliders' ),

	        'show_in_rest'       => true

	    );

      

    register_post_type( 'sliders', $arg );



    $label = array(

	        'name'                  => _x( 'services', 'Homepage services', 'freezoner' ),

	        'singular_name'         => _x( 'service', 'Post type singular name', 'freezoner' ),

	        'menu_name'             => _x( 'services', 'Admin Menu text', 'freezoner' ),

	        'name_admin_bar'        => _x( 'service', 'Add New on Toolbar', 'freezoner' ),

	        'add_new'               => __( 'Add New service', 'freezoner' ),

	        'add_new_item'          => __( 'Add New service', 'freezoner' ),

	        'new_item'              => __( 'New service', 'freezoner' ),

	        'edit_item'             => __( 'Edit service', 'freezoner' ),

	        'view_item'             => __( 'View service', 'freezoner' ),

	        'all_items'             => __( 'All services', 'freezoner' ),

	        'search_items'          => __( 'Search service', 'freezoner' ),

	        'parent_item_colon'     => __( 'Parent service:', 'freezoner' ),

	        'not_found'             => __( 'No service found.', 'freezoner' ),

	        'not_found_in_trash'    => __( 'No service found in Trash.', 'freezoner' ),

	    );     

	    $arg = array(

	        'labels'             => $label,

	        'description'        => 'Home Page services.',

	        'public'             => true,

	        'publicly_queryable' => true,

	        'show_ui'            => true,

	        'show_in_menu'       => true,

	        'query_var'          => true,

	        'capability_type'    => 'post',

	        'has_archive'        => true,

	        'hierarchical'       => false,

	        'menu_position'      => 6,

	        'menu_icon'			 => 'dashicons-analytics',

	        'supports'           => array( 'title','editor', 'thumbnail' ),

	        'rewrite'            => array( 'slug' => 'services' ),

	        'show_in_rest'       => true

	    );

      

    register_post_type( 'services', $arg );

        $labels = array(

        'name'                  => _x( 'questions', 'Homepage questions', 'freezoner' ),

        'singular_name'         => _x( 'question', 'Post type singular name', 'freezoner' ),

        'menu_name'             => _x( 'questions', 'Admin Menu text', 'freezoner' ),

        'name_admin_bar'        => _x( 'question', 'Add New on Toolbar', 'freezoner' ),

        'add_new'               => __( 'Add New question', 'freezoner' ),

        'add_new_item'          => __( 'Add New question', 'freezoner' ),

        'new_item'              => __( 'New question', 'freezoner' ),

        'edit_item'             => __( 'Edit question', 'freezoner' ),

        'view_item'             => __( 'View question', 'freezoner' ),

        'all_items'             => __( 'All questions', 'freezoner' ),

        'search_items'          => __( 'Search questions', 'freezoner' ),

        'parent_item_colon'     => __( 'Parent questions:', 'freezoner' ),

        'not_found'             => __( 'No questions found.', 'freezoner' ),

        'not_found_in_trash'    => __( 'No questions found in Trash.', 'freezoner' )

    );     

    $args = array(

        'labels'             => $labels,

        'description'        => 'Home Page questions.',

        'public'             => true,

        'publicly_queryable' => true,

        'show_ui'            => true,

        'show_in_menu'       => true,

        'query_var'          => true,

        'capability_type'    => 'post',

        'has_archive'        => true,

        'hierarchical'       => false,

        'menu_position'      => 7,

        'menu_icon'          => 'dashicons-editor-help',

        'supports'           => array( 'title','editor', 'thumbnail' ),

        'rewrite'            => array( 'slug' => 'questions' ),

        'show_in_rest'       => true

    );

      
    register_post_type( 'questions', $args );


          $label = array(

            'name'                  => _x( 'Events', 'Homepage events', 'freezoner' ),

            'singular_name'         => _x( 'event', 'Post type singular name', 'freezoner' ),

            'menu_name'             => _x( 'Events', 'Admin Menu text', 'freezoner' ),

            'name_admin_bar'        => _x( 'event', 'Add New on Toolbar', 'freezoner' ),

            'add_new'               => __( 'Add New event', 'freezoner' ),

            'add_new_item'          => __( 'Add New event', 'freezoner' ),

            'new_item'              => __( 'New event', 'freezoner' ),

            'edit_item'             => __( 'Edit event', 'freezoner' ),

            'view_item'             => __( 'View event', 'freezoner' ),

            'all_items'             => __( 'All events', 'freezoner' ),

            'search_items'          => __( 'Search event', 'freezoner' ),

            'parent_item_colon'     => __( 'Parent event:', 'freezoner' ),

            'not_found'             => __( 'No event found.', 'freezoner' ),

            'not_found_in_trash'    => __( 'No event found in Trash.', 'freezoner' ),

        );     

        $arg = array(

            'labels'             => $label,

            'description'        => 'Home Page Events.',

            'public'             => true,

            'publicly_queryable' => true,

            'show_ui'            => true,

            'show_in_menu'       => true,

            'query_var'          => true,

            'capability_type'    => 'post',

            'has_archive'        => true,

            'hierarchical'       => false,

            'menu_position'      => 8,

            'menu_icon'          => 'dashicons-calendar-alt',

            'supports'           => array( 'title','editor', 'thumbnail' ),

            'rewrite'            => array( 'slug' => 'events' ),

            'show_in_rest'       => true

        );

      

    register_post_type( 'events', $arg );

         $label = array(

            'name'                  => _x( 'Dictionary', 'Homepage dictionary', 'freezoner' ),

            'singular_name'         => _x( 'Dictionary', 'Post type singular name', 'freezoner' ),

            'menu_name'             => _x( 'Dictionary', 'Admin Menu text', 'freezoner' ),

            'name_admin_bar'        => _x( 'dictionary', 'Add New on Toolbar', 'freezoner' ),

            'add_new'               => __( 'Add New dictionary', 'freezoner' ),

            'add_new_item'          => __( 'Add New dictionary', 'freezoner' ),

            'new_item'              => __( 'New dictionary', 'freezoner' ),

            'edit_item'             => __( 'Edit dictionary', 'freezoner' ),

            'view_item'             => __( 'View dictionary', 'freezoner' ),

            'all_items'             => __( 'All dictionary', 'freezoner' ),

            'search_items'          => __( 'Search dictionary', 'freezoner' ),

            'parent_item_colon'     => __( 'Parent dictionary:', 'freezoner' ),

            'not_found'             => __( 'No dictionary found.', 'freezoner' ),

            'not_found_in_trash'    => __( 'No dictionary found in Trash.', 'freezoner' ),

        );     



        $arg = array(

            'labels'             => $label,

            'description'        => 'Home Page dictionary.',

            'public'             => true,

            'publicly_queryable' => true,

            'show_ui'            => true,

            'show_in_menu'       => true,

            'query_var'          => true,

            'capability_type'    => 'post',

            'has_archive'        => true,

            'hierarchical'       => false,

            'menu_position'      => 9,

            'menu_icon'          => 'dashicons-book-alt',

            'supports'           => array( 'title','editor', 'thumbnail' ),

            'rewrite'            => array( 'slug' => 'dictionary' ),

            'show_in_rest'       => true

        );

      

    register_post_type( 'dictionary', $arg );

    /*-----------------------------------------------------------------------------------------------*/
}

add_action('init','freezoner_register_custom_menu');

/* create my custom menu pages */

function fz_register_custom_menu_pages() {

    add_menu_page(

        'website options',

        'Fz Options',

        'manage_options',

        'content-area',

        'main_content_area_callback',

        fz_URL.'assets/images/favicon.ico',

        2

    );  
    add_submenu_page(

        'content-area',

        'Home options',

        'Home Page Options',

        'manage_options',

        'home-page-content',

        'home_page_content_callback'

    );     
    
}

add_action( 'admin_menu', 'fz_register_custom_menu_pages' );

require_once ( fz_ROOT . 'freezoner_options/freezoner_option.php');
require_once ( fz_ROOT . 'freezoner_options/home_page_option.php');

add_action( 'init', 'question_custom_tax', 0 );
function question_custom_tax() 
{
    $ser_taxonomies = array(
        array(

          'labels' => array(

            'name'                          => _x( 'Categories', 'taxonomy general name' ),
            'singular_name'                 => _x( 'Category', 'taxonomy singular name' ),
            'search_items'                  =>  __( 'Search categories','freezoner' ),
            'popular_items'                 => __( 'Popular Categories' ,'freezoner'),
            'all_items'                     => __( 'All categories' ,'freezoner'),
            'parent_item'                   => __('Parent'),
            'parent_item_colon'             => null,
            'edit_item'                     => __( 'Edit Category' ), 
            'update_item'                   => __( 'Update Category' ),
            'add_new_item'                  => __( 'Add new category' ),
            'new_item_name'                 => __( 'New Category' ),
            'separate_items_with_commas'    => __( 'Seperate categories with commas' ),
            'add_or_remove_items'           => __( 'Add or remove category' ),
            'choose_from_most_used'         => __( 'Choose from most used categories' ),
            'menu_name'                     => __( 'Categories' ),
          ),
          'tax_name'         => 'services_cat',
          'post_types'       =>  array('services'),
          'slug'             => 'services-category'          
        ),

        array(

          'labels' => array(

            'name'                          => _x( 'Categories', 'taxonomy general name' ),
            'singular_name'                 => _x( 'Category', 'taxonomy singular name' ),
            'search_items'                  =>  __( 'Search categories','freezoner' ),
            'popular_items'                 => __( 'Popular Categories' ,'freezoner'),
            'all_items'                     => __( 'All categories' ,'freezoner'),
            'parent_item'                   => __('Parent'),
            'parent_item_colon'             => null,
            'edit_item'                     => __( 'Edit Category' ), 
            'update_item'                   => __( 'Update Category' ),
            'add_new_item'                  => __( 'Add new category' ),
            'new_item_name'                 => __( 'New Category' ),
            'separate_items_with_commas'    => __( 'Seperate categories with commas' ),
            'add_or_remove_items'           => __( 'Add or remove category' ),
            'choose_from_most_used'         => __( 'Choose from most used categories' ),
            'menu_name'                     => __( 'Categories' ),
          ),
          'tax_name'         => 'dictionary_cat',
          'post_types'       =>  array('dictionary'),
          'slug'             => 'dictionary-category'          
        )
    );

  // Add new taxonomy, NOT hierarchical (like tags)
    foreach ($ser_taxonomies as $tax) {
      register_taxonomy($tax['tax_name'],$tax['post_types'],array(
        'hierarchical' => true,
        'labels' => $tax['labels'],
        'show_ui' => true,
        'update_count_callback' => '_update_post_term_count',
        'query_var' => true,
        'rewrite' => array( 'slug' => $tax['slug'] ),

      ));
    }
}

add_action( 'login_enqueue_scripts', 'my_login_logo' );
function my_login_logo() { ?>
    <style type="text/css">
        body{
            background:#c5c5d8!important; 
        }
        #login h1 a, .login h1 a {
            background-image: url(<?php echo get_option('fz_logo_img'); ?>);
            width: 100%;
            height: 100px;
            background-size: contain;
            margin: 0 auto;
        }
        .login form{
            background: rgba(3, 3, 4, .9)!important;
            border-radius: .5rem;
        }
        .login label{
            font-weight: 600!important;
            color: #fff!important;
        }
        .wp-core-ui p .button {
            background: rgba(3, 3, 4, .9)!important;
            border-color: rgba(3, 3, 4, .9)!important;
        }
        .wp-core-ui p .button:hover{
            background-color: #c69923 !important;
            border-color: #c69923 !important;
            color: #fff;
        }
        #reg_passmail{color:#fff;}
    </style>
<?php }

function remove_wp_logo($wp_admin_bar) {
  $wp_admin_bar->remove_node('wp-logo');
}
add_action('admin_bar_menu', 'remove_wp_logo', 999);

function change_footer_admin() {
  echo '<span id="footer-thankyou"><a href="https://shwkyfareed.com/" target="_blank">Shawky Fareed</span>';
}
add_filter('admin_footer_text', 'change_footer_admin');
/*
function fz_add_menuclass($items,$args) {
    if ( ($args->menu->slug == 'main-menu-right') || ($args->menu->slug == 'main-menu-left') || ($args->menu->slug == 'mobile-menu') ) {
        $items = preg_replace('/<a/', '<a class="nav-link"', $items);
    }

    return $items;
}
add_filter('wp_nav_menu_items','fz_add_menuclass',10,2);*/

add_filter( 'rwmb_meta_boxes', 'fz_add_events_gallery' );
function fz_add_events_gallery( $meta_boxes ) {
    $meta_boxes[] = array(
        'title'      => __( 'Gallery Images', 'freezoner' ),
        'post_types' => array('events'),
        'fields'     => array(
            array(
                'name' => esc_html__( 'Image Upload'),
                'id'   => "thumbnail_ids",
                'type' => 'image_advanced',
            ),
        ),
    );

    return $meta_boxes;
}
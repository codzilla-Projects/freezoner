<?php 

function fz_get_slides($no){

    $args = array(

        'post_type'       => 'sliders',

        'post_status'     => 'publish',

        'posts_per_page'  =>  $no,

        'orderby'         => 'date',

        'order'           => 'ASC'

    );

    return $posts = new WP_Query( $args );    

}



function fz_get_services($no){

    $args = array(

        'post_type'       => 'services',

        'post_status'     => 'publish',

        'posts_per_page'  =>  $no,

        'orderby'         => 'date',

        'order'           => 'ASC'

    );

    return $posts = new WP_Query( $args );    

}





function fz_get_events($no){

    $args = array(

        'post_type'       => 'events',

        'post_status'     => 'publish',

        'posts_per_page'  =>  $no,

        'orderby'         => 'date',

        'order'           => 'ASC'

    );

    return $posts = new WP_Query( $args );    

}

function fz_get_services_pagination($no){



    $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;



    $args = array(



        'post_type'       => 'services',



        'post_status'     => 'publish',



        'posts_per_page'  =>  $no,



        'paged'           =>  $paged,



        'orderby'         => 'date',



        'order'           => 'DESC'



    );



    return $posts = new WP_Query( $args );    



}


function fz_get_events_pagination($no){
    $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
    $args = array(
        'post_type'       => 'events',
        'post_status'     => 'publish',
        'posts_per_page'  =>  $no,
        'paged'           =>  $paged,
        'orderby'         => 'date',
        'order'           => 'DESC'
    );
   return $posts = new WP_Query( $args );    
}


function fz_get_events_view($no,$events_id){
    $args = array(
        'post_type'       => 'events',
        'post_status'     => 'publish',
        'posts_per_page'  =>  $no,
        'post__not_in'    => array($events_id),
        'orderby'         => 'date',
        'order'           => 'ASC'
    );
   return $posts = new WP_Query( $args );    
}



function fz_get_blog_pagination($no){



    $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;



    $args = array(



        'post_type'       => 'post',



        'post_status'     => 'publish',



        'posts_per_page'  =>  $no,



        'paged'           =>  $paged,



        'orderby'         => 'date',



        'order'           => 'DESC'



    );



    return $posts = new WP_Query( $args );    



}



function fz_get_dictionary_terms(){

  return  get_terms(['taxonomy'=>'dictionary_cat','hide_empty'=>false,'orderby'=>'title','order'=>'ASC']);

}

function fz_get_dictionary(){

    $args = array(

        'post_type'       => 'dictionary',

        'post_status'     => 'publish',

        'posts_per_page'  =>  -1,

        'orderby'         => 'date',

        'order'           => 'ASC'

    );

    return $posts = new WP_Query( $args );    

}



function fz_get_dictionary_with_tax($term_id){

    $args = array(

        'post_type'       => 'dictionary',

        'post_status'     => 'publish',

        'posts_per_page'  =>  -1,

        'orderby'         => 'date',

        'order'           => 'ASC',

        'tax_query'       => array(

            array(

                'taxonomy' =>'dictionary_cat',

                'field'    =>'term_id',

                'terms'    => $term_id

            ),

        )

    );

    return $posts = new WP_Query( $args );    

}

function get_search_results($no){

    $args = array(

        'post_type'       => array('post','services','events'),

        'post_status'     => 'publish',

        'posts_per_page'  =>  $no,

        'orderby'         => 'date',

        'order'           => 'DESC'

    );

    return $posts = new WP_Query( $args );    

}

/*===========================================================*/

function mySearchFilter($articleQuery) {

    if ($articleQuery->is_search ) {

        $articleQuery->set('post_type', array('post','services','events') );

    };

    return $articleQuery;

};



add_filter('pre_get_posts','mySearchFilter');
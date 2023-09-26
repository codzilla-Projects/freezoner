<?php 
/*======================================================*/
/*|  services Short Code                               |*/
/*======================================================*/

function fz_services_shortcode($atts) {

  $x_data = shortcode_atts( array(
    'type'     => '',
    'no'       =>'',
    'term_id'  => ''
  ), $atts );

  $type    = !empty($x_data['type']) ? $x_data['type'] : 'grid';
  $no      = !empty($x_data['no']) ? $x_data['no'] : '3';
  $term_id = $x_data['term_id'];

  global $post;
  

  $args = array(
    'post_type'         => 'services',
    'post_status'       => 'publish',
    'orderby'           => 'date', 
    'order'             => 'DESC',
    'posts_per_page'    => $no
    
   );

  if(!empty($term_id)){
    $tax_query = array(
      array(
        'taxonomy' =>'services_cat',
        'field'    =>'term_id',
        'terms'    => $term_id
      ),
    );
    $args['tax_query'] = $tax_query;
  }
  

    $posts = new WP_Query( $args );

  if($type == 'video'){
    $output = '<div class="row clearfix cd-items">';
    $output .= '<div class="services-carousel owl-carousel owl-theme">';
    if($posts->have_posts()) :

    while($posts->have_posts()) : $posts->the_post();   
        $output .='<div class="service-block">';
        $output .='<div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">';
        $output .='<div class="image">';
        $output .='<ul>';
        $output .='<li class="cd-item">';
        $output .='<img src="'.get_the_post_thumbnail_url().'" alt="Item Preview">';
        $output .='<a href=".'.get_post_meta(get_the_ID(),'fz_services_link',true).'" class="lightbox-image"></a>';
        $output .='</li>';
        $output .='</ul>';
        $output .='</div>';
        $output .='</div>';
        $output .='</div>';
      endwhile;
      wp_reset_query();
    endif;
    $output .='</div> </div>';
    
    }else{

      $output = '<div class="row clearfix cd-items">';
      $output .= '<div class="services-carousel owl-carousel owl-theme">';
    if($posts->have_posts()) :

    while($posts->have_posts()) : $posts->the_post();   
        $output .='<div class="blog-block">';
        $output .=' <div class="inner-box wow fadeInLeft animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft;">';
        $output .='<div class="image">';
        $output .='<a href="'.get_the_permalink().'"><img src="'.get_the_post_thumbnail_url().'" alt=""></a>';
        $output .='</div>';
        $output .='<div class="lower-content">';
        $output .='<h3><a href="'.get_the_permalink().'">'.get_the_title().'</a></h3>';
        $output .='<div class="text text-white">'.wp_trim_words( get_the_excerpt() ,20, ' ...' ).'</div>';
        $output .='<a href="'.get_the_permalink().'" class="read-more">'. __('Read More','freezoner').'</a>';
        $output .='</div>';
        $output .='</div>';
        $output .='</div>';
      endwhile;
      wp_reset_query();
    endif;
    $output .='</div> </div>';

    }
    return $output;
}
add_shortcode( 'fz_services', 'fz_services_shortcode' );
/*======================================================*/
/*| End services Short Code                            |*/
/*======================================================*/
/*======================================================*/
/*|  questions Short Code                              |*/
/*======================================================*/
function fz_questions_shortcode($atts) {

  $x_data = shortcode_atts( array(
    'no'   =>'',
  ), $atts );

  $no  = !empty($x_data['no']) ? $x_data['no'] : '-1';

  $args = array(
    'post_type'         => 'questions',
    'post_status'       => 'publish',
    'orderby'           => 'date', 
    'order'             => 'DESC',
    'posts_per_page'    => $no                      
  );
      
  $posts = new WP_Query( $args );

  if($posts->have_posts()) :

    $output  = '<div class="container bg-white rounded">';
    $output .= '<div class="accordion accordion-flush" id="accordionFlushExample">';

    while($posts->have_posts()) : $posts->the_post();  

      $output .= '<div class="accordion-item">';
      $output .= '<h2 class="accordion-header" id="flush-headingOne">';
      $output .= ' <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#fz_'.get_the_ID().'" aria-expanded="false" aria-controls="flush-collapseOne">';
      $output .=  get_the_title();
      $output .= '</button>';
      $output .= '</h2>';
      $output .= ' <div id="fz_'.get_the_ID().'" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">';
      $output .='<div class="accordion-body">';
      $output .= get_the_excerpt();
      $output .= '<div> <a href="'.get_the_permalink().'" class="">'. __('Read More','freezoner').'</a></div>';
      $output .= '</div>';
      $output .= '</div>';
      $output .= '</div>';

    endwhile;
    wp_reset_query();
    $output .= '</div>';
    $output .= '</div>';
  endif;
          
  return $output;
}
add_shortcode( 'fz_questions', 'fz_questions_shortcode' );

/*======================================================*/
/*|  End questions Short Code                          |*/
/*======================================================*/


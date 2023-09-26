<?php
function freezoner_add_styles_scripts() {

    wp_deregister_style( 'js_composer_front' );
    wp_deregister_script('wpb_composer_front_js');

	wp_enqueue_style('Fontawsome-style',  'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css');

	
	
	
	if(ICL_LANGUAGE_CODE == 'en' || ICL_LANGUAGE_CODE == 'it' || ICL_LANGUAGE_CODE == 'ru'){ //english
	wp_enqueue_style('bootstrap-4-style', 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css');
	wp_enqueue_style('bootstrap-5-style', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css');
	wp_enqueue_style('intlTelInput-style', fz_URL.'assets/css/intlTelInput.css');
	wp_enqueue_style('freezoner-style', fz_URL.'assets/css/style.css');
    wp_enqueue_style('freezoner-responsive', fz_URL.'assets/css/responsive.css');
	}
	if(ICL_LANGUAGE_CODE == 'ar'){ //arabic
	wp_enqueue_style('bootstrap-rtl-4-style', 'https://cdn.rtlcss.com/bootstrap/v4.5.3/css/bootstrap.min.css');
	wp_enqueue_style('bootstrap-rtl-5-style', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.rtl.min.css');
	wp_enqueue_style('intlTelInput-style', fz_URL.'assets/css/intlTelInput.css');
	wp_enqueue_style('intlTelInput-ar-style', fz_URL.'assets/css/intlTelInput-ar.css');
		wp_enqueue_style('freezoner-style', fz_URL.'assets/css/style-rtl.css');
        wp_enqueue_style('freezoner-responsive', fz_URL.'assets/css/responsive.css');
	}

	wp_deregister_script('jquery'); 
	wp_register_script('jquery', fz_URL.'assets/js/jquery.js', false, '', false); 
	wp_enqueue_script('jquery');
	wp_enqueue_script('pooper-js', fz_URL.'assets/js/popper.min.js', array('jquery'), false, true);
	wp_enqueue_script('jquery-ui-js', fz_URL.'assets/js/jquery-ui.js', array('jquery'), false, true);
	wp_enqueue_script('bootstrap-js', fz_URL.'assets/js/bootstrap.min.js', array('jquery'), false, true);
	wp_enqueue_script('popper-bundle-js', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js', array(), false, true);
	
	wp_enqueue_script('bootstrap-bundle-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js', array(), false, true);
	wp_enqueue_script('fancybox-js', fz_URL.'assets/js/jquery.fancybox.js', array('jquery'), false, true);
	wp_enqueue_script('owl-js', fz_URL.'assets/js/owl.js', array('jquery'), false, true);
	wp_enqueue_script('wow-js', fz_URL.'assets/js/wow.js', array('jquery'), false, true);
	wp_enqueue_script('scrollbar-js', fz_URL.'assets/js/scrollbar.js', array('jquery'), false, true);
	wp_enqueue_script('utils-js', fz_URL.'assets/js/utils.js', array(), false, true);
	wp_enqueue_script('intlTelInput-js', fz_URL.'assets/js/intlTelInput.js', array(), false, true);
	wp_enqueue_script('script-js', fz_URL.'assets/js/script.js', array(), false, true);
	if (is_front_page()) {

		wp_enqueue_script('ajax-js', fz_URL.'assets/js/form-ajax.js', array(), false, true);	}
}

add_action('wp_enqueue_scripts', 'freezoner_add_styles_scripts',9999999);


function fz_admin_scripts_styles($hook) {
	//var_dump($hook);
	wp_enqueue_style( 'fz-main', fz_URL . 'assets/admin/css/main-style.css');
	$fz_pages = ['toplevel_page_content-area','fz-options_page_home-page-content'];

	if( in_array($hook, $fz_pages) ) {
		wp_enqueue_style( 'fz-bootsrtap', fz_URL . 'assets/admin/css/bootstrap.min.css');
		wp_enqueue_style( 'fz-style', fz_URL . 'assets/admin/css/style.css');
		wp_enqueue_script('fz-bootsrtap',fz_URL .'assets/admin/js/bootstrap.min.js', array() ,false, true );
		wp_enqueue_script( 'fz-script', fz_URL .'assets/admin/js/script.js', array() ,false, true );
		if(function_exists( 'wp_enqueue_media' )){
			wp_enqueue_media();
		}else{
			wp_enqueue_style('thickbox');
			wp_enqueue_script('media-upload');
			wp_enqueue_script('thickbox');
		}
	}
}

add_action('admin_enqueue_scripts', 'fz_admin_scripts_styles');

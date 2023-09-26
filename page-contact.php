<?php
/**
** Template Name: Contact Template
**/
get_header('inner'); ?>
<section class="contact-form-section main-slider" style="background-image:url(images/background/contact.png)">
	
		<?php 
			if( have_posts() ) : while ( have_posts() ) : the_post(); 
				the_content(); 
				endwhile; 
				wp_reset_query(); 
			endif;
		 ?>

</section>
<?php get_footer(); ?>
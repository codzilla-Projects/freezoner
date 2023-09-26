<?php 
get_header('inner');

if( have_posts() ) : while ( have_posts() ) : the_post(); 
the_content(); 
endwhile; wp_reset_query(); endif;
get_footer();
?>
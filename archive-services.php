<?php 
/**
** Template Name: Services Template
**/
get_header('inner'); 
?>
<!-- Our events Section -->
	<section class="our-blogs-section">
		<div class="auto-container">

			<?php
          $posts = fz_get_services_pagination(6);
          if($posts->have_posts()) : 
      ?>
            
			<div class="row clearfix">
				
				<!--News Block Two -->
				<?php while($posts->have_posts()) : $posts->the_post(); 
                 $service_title = get_the_title(); ?>
				<div class="news-block-two style-two col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="image rounded">
							<a href="<?php the_permalink() ?>"><img src="<?php the_post_thumbnail_url(); ?>" alt="" /></a>
						</div>
						<div class="lower-content">					
							<div class="lower-box">
								<h3><a href="<?php the_permalink() ?>" title="<?=$service_title ?>"><?php echo wp_trim_words( $service_title ,10, ' ...' ); ?></a></h3>
								<div class="text"><?php echo wp_trim_words( get_the_excerpt() ,20, ' ...' ); ?></div>
							</div>
						</div>
					</div>
				</div>
				<?php endwhile;?>		
			</div>
			
			<!--Styled Pagination-->
			<?php    
                $args = array(
                   'format'             => '?paged=%#%',
                   'current'            => max( 1, get_query_var('paged') ),
                   'total'              => $posts->max_num_pages,
                   'show_all'           => false,
                   'end_size'           => 1,
                   'mid_size'           => 2,
                   'prev_next'          => true,
                   'next_text'          => '»',
                   'prev_text'          => '« ',
                   'type'               => 'list',
                  );
            ?>
            <?php echo paginate_links($args); ?>               
			<!--End Styled Pagination-->
			
		</div>
		<?php wp_reset_query(); ?>
        <?php endif ?>
	</section>
	<!-- End Our events Section -->
<?php get_footer(); ?>

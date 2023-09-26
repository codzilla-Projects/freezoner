<?php 
/**
** Template Name: Events Template
**/
get_header('inner'); 
?>
<!-- Our events Section -->
	<section class="our-blogs-section">
		<div class="auto-container">

			<?php
          $posts = fz_get_events_pagination(6);
          if($posts->have_posts()) : 
      ?>
            
			<div class="row clearfix">
				
				<!--News Block Two -->
				<?php while($posts->have_posts()) : $posts->the_post(); 
                 $event_title = get_the_title(); ?>
				<div class="news-block-two style-two col-lg-6 col-md-12 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="image rounded">
							<a href="<?php the_permalink() ?>"><img src="<?php the_post_thumbnail_url(); ?>" alt="" /></a>
						</div>
						<div class="lower-content">
							<div class="upper-box row clearfix">
								<?php 
	                  $events_date  = get_post_meta(get_the_ID(),'fz_events_date',true);
	                  if(!empty($events_date)) :
	              ?>
								<div class="col-lg-3 col-md-6 col-sm-6 col-6 posted-date"><i class="fas fa-calendar-alt mr-2"></i><?= $events_date ?></div>
								<?php endif; ?>
								
								<?php 
				              $events_start = get_post_meta(get_the_ID(),'fz_events_start',true);
				              if(!empty($events_start)) :
				           ?>
									<div class="col-lg-3 col-md-6 col-sm-6 col-6 posted-date"><i class="far fa-clock mr-2"></i><?php $t = strtotime($events_start); ?> <?=date('h:i A', $t) ?></div>
									<?php endif; ?>
                               <?php 
                              $events_location   = get_post_meta(get_the_ID(),'fz_events_location',true);
                              if(!empty($events_location)) :
                              ?>
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-6 posted-date"><i class="fas fa-map-marker-alt mr-2"></i><?= $events_location; ?></div>
                              <?php endif; ?>
                                
				              <?php 
				              $events_trainee = get_post_meta(get_the_ID(),'fz_events_trainee',true);
				              if(!empty($events_trainee)) :
				           ?>
									<div class="col-lg-3 col-md-6 col-sm-6 col-6 posted-date"><i class="fas fa-microphone mr-2"></i><?= $events_trainee ?></div>
									<?php endif; ?>
							</div>
							
							<div class="lower-box">
								<h3><a href="<?php the_permalink() ?>" title="<?=$event_title ?>"><?php echo wp_trim_words( $event_title ,10, ' ...' ); ?></a></h3>
								<div class="text"><?php echo wp_trim_words( get_the_excerpt(), 20, '...' ); ?></div>
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
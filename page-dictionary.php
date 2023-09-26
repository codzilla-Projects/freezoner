<?php 

/**

** Template Name: Dictionary Template

**/

get_header('inner'); 

if( have_posts() ) : while ( have_posts() ) : the_post(); 

the_content(); 

endwhile; wp_reset_query(); endif;

$dec_terms = fz_get_dictionary_terms();

?>

    <!-- Story Section -->

	<section class="about-us dictionary">

		<div class="auto-container">

			<div class="row clearfix">

				<!-- Content Column -->

				<div class="content-column col-lg-12 col-md-12 col-sm-12">

					<div class="inner-column">

						<div class="text text-dark text-justify">

							<div class="card">

								<div class="card-header">

								  <ul class="nav nav-tabs nav-tabs-neutral justify-content-start" role="tablist" data-background-color="orange">

								 <!-- Tabs with Background on Card -->

							

								    <li class="nav-item">

								      	<a class="nav-link active" data-toggle="tab" href="#home" role="tab"><?php _e('All','freezoner'); ?></a>

								    </li>

								    <?php foreach($dec_terms as $term) : ?>

								    <li class="nav-item">

								      	<a class="nav-link" data-toggle="tab" href="#fz<?= $term->term_id; ?>" role="tab"><?= $term->name; ?></a>

								    </li>

									<?php endforeach ?>

								  </ul>

								</div>

								<div class="card-body">

								  <!-- Tab panes -->

									<div class="tab-content text-left">

									    <div class="tab-pane active" id="home" role="tabpanel">

									<?php $dictionary = fz_get_dictionary();

							            if($dictionary->have_posts()) : 

							        ?>		

									 <?php while($dictionary->have_posts()) : $dictionary->the_post(); ?>

									    	<div class="mb-3">

										    	<h4><?php the_title(); ?></h4>

										      	<p><?php the_content(); ?></p>

									      	</div>

								      	<?php endwhile; wp_reset_query(); ?>

							      	<?php endif; ?>

									    </div>



									    <?php foreach($dec_terms as $term) : ?> 	

									    <div class="tab-pane" id="fz<?= $term->term_id;  ?>" role="tabpanel">

										<?php $dictionary = fz_get_dictionary_with_tax($term->term_id);

								            if($dictionary->have_posts()) : 

								        ?>		

											<?php while($dictionary->have_posts()) : $dictionary->the_post(); ?>

									      	<div class="mb-3">

										    	<h4><?php the_title(); ?></h4>

										      	<p><?php the_content(); ?></p>

									      	</div>

									      	<?php endwhile; wp_reset_query(); ?>

									  	<?php endif; ?>

									    </div>

										<?php endforeach; ?>

									</div>

								</div>

							<!-- End Tabs on plain Card -->

					        </div>

				    	</div>

			    	</div>

		   		</div>

			</div>

		</div>

	</section>

	<!-- End Story Section -->

<?php get_footer(); ?>
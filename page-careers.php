<?php
/**
** Template Name: Careers Template
**/
get_header('inner'); 
if( have_posts() ) : while ( have_posts() ) : the_post(); 
the_content(); 
endwhile; wp_reset_query(); endif;
?>
 	<!-- Contact Form Section -->
	<section class="careers contact-form-section main-slider ">	
		<div class="auto-container">	
			<div class="row clearfix">
				
				<!-- Form Column -->
				<div class="form-column col-lg-12 col-md-12 col-sm-12 Quotation">
					<div class="inner-column">
						
						<!-- Contact Form -->
						<div class="contact-form">
								
							<!--Contact Form-->
							<form method="post" action="">
								<div class="row clearfix">
									<div class="form-group col-lg-6 col-md-6 col-sm-12">
										<div class="field-label"><?php _e('First Name','freezoner'); ?> <sup>*</sup></div>
										<input type="text" class="rounded" name="username" placeholder="<?php _e('First Name','freezoner'); ?>" required>
									</div>

									<div class="form-group col-lg-6 col-md-6 col-sm-12">
										<div class="field-label"><?php _e('Last Name','freezoner'); ?> <sup>*</sup></div>
										<input type="text" class="rounded" name="username" placeholder="<?php _e('Last Name','freezoner'); ?>" required>
									</div>
									
									<div class="form-group col-lg-6 col-md-6 col-sm-12">
										<div class="field-label"><?php _e('Email Address','freezoner'); ?> <sup>*</sup></div>
										<input type="text" class="rounded" name="email" placeholder="<?php _e('Email Address','freezoner'); ?>" required>
									</div>
									
									 <!--Form Group-->
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                    	<div class="field-label"><?php _e('Phone Number','freezoner'); ?> <sup>*</sup></div>
                                       <input id="phone" class="rounded" name="phone" type="tel" placeholder="<?php _e('Phone Number','freezoner'); ?>">
                                    </div>

                                     <!--Form Group-->
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                    	<div class="field-label"><?php _e('Gender','freezoner'); ?> <sup>*</sup></div>
                                        <select name="country" class="rounded">
                                            <option style="color:#c6c6c6;" value=""><?php _e('Gender','freezoner'); ?></option>
											<option value="male"><?php _e('Male','freezoner'); ?></option>
											<option value="female"><?php _e('Female','freezoner'); ?></option>
                                        </select>
                                    </div>
                                     <!--Form Group-->

									<div class="form-group col-lg-6 col-md-6 col-sm-12">
										<div class="field-label"><?php _e('Qualification','freezoner'); ?> <sup>*</sup></div>			
										<input type="file" class="form-control form-control-lg" id="customFile" />
									</div>
									
									<div class="form-group col-lg-12 col-md-12 col-sm-12 centered">
										<button class="theme-btn btn-style-one w-25 rounded" type="submit" name="submit-form"><span class="txt"><?php _e('Submit Now','freezoner'); ?></span></button>
									</div>
								</div>
							</form>
						</div>
						
					</div>
				</div>	
			</div>
		</div>
	</section>
	<!-- End Contact Form Section -->
<?php get_footer(); ?>
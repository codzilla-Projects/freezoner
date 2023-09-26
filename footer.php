<!--Main Footer-->

    <footer class="main-footer">

		<div class="auto-container">

        	<!--Widgets Section-->

            <div class="widgets-section">

            	<div class="row clearfix">

                    <!--big column-->

                    <div class="big-column col-lg-12 col-md-12 col-sm-12">

                        <div class="row clearfix">

                        

                            <!--Footer Column-->

                            <div class="footer-column col-lg-5 col-md-4 col-sm-12">

                                <div class="footer-widget logo-widget">

									<div class="logo">

										<?php if ( is_active_sidebar( 'first_footer' ) ) : ?>

			                                <?php dynamic_sidebar( 'first_footer' ); ?>

			                            <?php endif; ?>
			                            <div class="menu-social-media-container">
			                            	<ul id="menu-social-media" class="menu">
			                            		<?php 
													$fb = get_option('fz_fb');  
							                            if(!empty($fb)) :
							                        ?>
													<li><a href="<?=$fb; ?>"><span class="fab fa-facebook-square"></span></a></li>
													<?php endif; 
													$youtube = get_option('fz_youtube');  
							                            if(!empty($youtube)) :
							                        ?>
													<li><a href="<?=$youtube; ?>"><span class="fab fa-youtube"></span></a></li>
													<?php endif; 
													$insta = get_option('fz_insta');  
							                            if(!empty($insta)) :
							                        ?>
													<li><a href="<?=$insta; ?>"><span class="fab fa-instagram"></span></a></li>
													<?php endif; 
													$linkedin = get_option('fz_linkedin');  
							                            if(!empty($linkedin)) :
							                        ?>
													<li><a href="<?=$linkedin; ?>"><span class="fab fa-linkedin"></span></a></li>
													<?php endif; 
													$whatsapp = get_option('fz_whatsapp');  
							                            if(!empty($whatsapp)) :
							                        ?>
													<li><a href="<?=$whatsapp; ?>"><span class="fab fa-whatsapp"></span></a></li>
													<?php endif;?>
			                            	</ul>
			                            </div>
									</div>

								</div>

							</div>

							

							<!--Footer Column-->

                            <div class="footer-column col-lg-3 col-md-4 col-sm-12">

                                <div class="footer-widget links-widget">

                                	<?php if ( is_active_sidebar( 'seconed_footer' ) ) : ?>

			                            <?php dynamic_sidebar( 'seconed_footer' ); ?>

			                        <?php endif; ?>

								</div>

							</div>

					

							<!--big column-->

		                    <!--Footer Column-->

		                    <div class="footer-column col-lg-4 col-md-4 col-sm-12">

		                        <div class="footer-widget contact-widget">

									<h2><?php _e('Contact Info','freezoner'); ?></h2>

									<div class="widget-content">

										<a href="tel:1800-574-9687" class="contact-number">(+971) 4 244 2279</a>

										<ul>
											<?php $email = get_option('fz_email');  
					                            if(!empty($email)) :
					                        ?>
											<li><a href="mailto:<?= $email ?>" class="contact-email"><i class="fas fa-envelope-open-text"></i> <?= $email ?></a></li>
							                <?php endif; ?>
							                <?php $location = get_option('fz_location');  
					                            if(!empty($location)) :
					                        ?>
											<li class="contact-map"><i class="fas fa-map-marker-alt"></i>
												<?= $location ?>
											</li>
											<?php endif; ?>

										</ul>

									</div>

								</div>

							</div>						

						</div>

					</div>

			

					<!--Footer Bottom-->

		            <div class="footer-bottom clearfix">

		                <div class="pull-left">

		                </div>

		                <div class="pull-right">

		                    <a href="javascript:void(0)">All Rights Reserved &copy; <?= date('Y'); ?></a>

		                </div>

		            </div>

		        </div>

		    </div>	

		</div>

	</footer>

	

</div>  

<!--End pagewrapper-->



<!--Scroll to top-->


<a href="#" class="scroll-to-top" style="display: block;"><i class="fa fa-angle-up"></i></a>

<!--Search Popup-->

<div id="search-popup" class="search-popup">

	<div class="close-search theme-btn"><span class="flaticon-cancel"></span></div>

	<div class="popup-inner">

		<div class="overlay-layer"></div>

    	<div class="search-form">

        	<form action="<?php echo home_url('/'); ?>" method="get">

            	<div class="form-group">

                	<fieldset>

                        <input type="search" class="form-control" name="s" value="<?php echo get_search_query(); ?>" placeholder="<?php _e('Search Here','freezoner'); ?>" required >

                        <input type="submit" value="<?php _e('Search Now!','freezoner'); ?>" class="theme-btn">

                    </fieldset>

                </div>

            </form>

        </div>

        

    </div>

</div>



<!--Scroll to top-->

<?php  wp_footer(); ?>

  <script>
    var input = document.querySelector("#phone");
    window.intlTelInput(input, {
      // allowDropdown: false,
      // autoHideDialCode: false,
      // autoPlaceholder: "off",
      // dropdownContainer: document.body,
      // excludeCountries: ["us"],
      // formatOnDisplay: false,
      // geoIpLookup: function(callback) {
      //   $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
      //     var countryCode = (resp && resp.country) ? resp.country : "";
      //     callback(countryCode);
      //   });
      // },
      // hiddenInput: "full_number",
      // initialCountry: "auto",
      // localizedCountries: { 'de': 'Deutschland' },
      // nationalMode: false,
      // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
      // placeholderNumberType: "MOBILE",
      // preferredCountries: ['cn', 'jp'],
      // separateDialCode: true,
      utilsScript: "build/js/utils.js",
    });
  </script>
</body>
</html>
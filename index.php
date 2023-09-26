<?php 
 get_header(); ?>
    <!-- Main Slider -->
  <section class="main-slider style-three">
    <div class="slider-box">
            
      <!-- Banner Carousel -->
      <?php $slides = fz_get_slides(4);
                if($slides->have_posts()) : 
            ?>
      <div class="banner-carousel owl-theme owl-carousel">

                <?php while($slides->have_posts()) : $slides->the_post(); ?>
        <!-- Slide -->
        <div class="slide">
                  <div class="image-layer" style="background-image:url(<?php the_post_thumbnail_url();  ?>)"></div>
                  <!-- <div class="overlay"></div> -->
          <div class="auto-container">
            <div class="row">
              <div class="slider col-md-9">
                <div class="content">
                  <h2><?php the_title(); ?></h2>
                  <div class="text"><?php the_content(); ?></div>
                  <div class="btns-box">
                    <?php 
                      $slider_url  = get_post_meta(get_the_ID(),'fz_slider_link_url',true);
                      $slider_text = get_post_meta(get_the_ID(),'fz_slider_link_text',true);
                      if(!empty($slider_url)||($slider_text)) :
                    ?>
                    <a href="<?= $slider_url;  ?>" class="theme-btn btn-style-one rounded"><span class="txt"><?= $slider_text;  ?></span></a>
                  <?php endif; ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php endwhile;?>       
      </div>
      <?php wp_reset_query(); endif ?>
      <!--Billing Details-->
        <div id="Get-Quotation" class="billing-details bg-white rounded p-3 col-md-3 popup">
            <div class="Quotation">
                <form method="post" action="">
                    <div class="row clearfix">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="title-box text-center mb-4"><h2><?php _e('Get Quotation','freezoner'); ?></h2></div>
                            <div class="billing-inner">
                                <div class="row clearfix">
                                    
                                    <!--Form Group-->
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <input type="text" class="rounded" name="full_name" value="" placeholder="<?php _e('Full Name','freezoner'); ?>">
                                    </div>

                                    <!--Form Group-->
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <input type="email" class="rounded" name="field-name" value="" placeholder="<?php _e('Your Email','freezoner'); ?>">
                                    </div>
                                     <!--Form Group-->
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                       <input id="phone" class="rounded" name="phone" type="tel" placeholder="<?php _e('Phone Number','freezoner'); ?>">
                                    </div>

                                    <!--Form Group-->
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <select name="country" class="rounded">
                                            <option class="lt" value=""><?php _e('Select Your Service','freezoner'); ?></option>
                                            <option class="lt" value="Free zone company"><?php _e('Free zone company','freezoner'); ?></option>
                                                <option class="lt" value="VIP"><?php _e('VIP','freezoner'); ?></option>
                                                <option class="lt" value="Offshore"><?php _e('Offshore','freezoner'); ?></option>
                                                <option class="lt" value="Freelance visa"><?php _e('Freelance visa','freezoner'); ?></option>
                                                <option class="lt" value="Local sponsor"><?php _e('Local sponsor','freezoner'); ?></option>
                                                <option class="lt" value="Corporate bank account"><?php _e('Corporate bank account','freezoner'); ?></option>
                                                <option class="lt" value="Vat &amp; audit"><?php _e('Vat &amp; audit','freezoner'); ?></option>
                                                <option class="lt" value="Immigration services"><?php _e('Immigration services','freezoner'); ?></option>
                                                <option class="lt" value="Company website"><?php _e('Company website','freezoner'); ?></option>
                                        </select>
                                    </div>
                                    
                                     <!--Form Group-->
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12 row ml-3">
                                      <div class="field-label"><?php _e('Prefered way of communication (mandatory)','freezoner'); ?><sup>*</sup></div>
                                      <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                          <input type="radio" name="code" class="col-md-2 m-0 p-0" value="">
                                          <span class="emailradio col-md-10 m-0 p-0"><?php _e('Email','freezoner'); ?></span>
                                      </div>
                                      <!--Form Group-->
                                      <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <input type="radio" name="code" class="col-md-2 m-0 p-0" value="">
                                          <span class="radiophone col-md-10 m-0 p-0"><?php _e('Phone','freezoner'); ?></span>     
                                      </div>
                                    </div>
                                    
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <textarea class="rounded" placeholder="<?php _e('Note about your order. e.g. special note for delivery','freezoner'); ?>"></textarea>
                                    </div>
                                    
                                      <!--Form Group-->
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12 btns-box">
                                      <button type="submit" name="submit" value="Submit" class="theme-btn btn-style-one w-100 rounded">
                                        <span class="txt"><?php _e('Submit','freezoner'); ?></span>
                                      </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                             
                </form>           
            </div> 
            <div class="close"><i class="fas fa-times-circle"></i></div>           
        </div><!--End Billing Details-->
    </div>
  </section>

  <!-- End Banner Section -->


<?php 
  if( have_posts() ) : while ( have_posts() ) : the_post(); 
  the_content(); 
  endwhile; wp_reset_query(); endif;
get_footer();
 ?>
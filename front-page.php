<?php 
get_header(); ?>
 <div class="page-new">
    <!-- Main Slider -->
    
  <section class="main-slider style-three">
    <div class="slider-box">
      <?php $no=get_option('slider_num');?>
      <!-- Banner Carousel -->
      <?php $slides = fz_get_slides($no);
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
              <div class="slider col-lg-12 col-md-12 col-sm-12">
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
        <div id="Get-Quotation" class="billing-details bg-white rounded p-3 popup">
            <div class="message alert alert-success" role="alert">
            </div>
          <?php if($message){?>
          <?php }?>
            <div class="Quotation">
                <form method="post" action="">
                    <div class="row clearfix">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="title-box text-center mb-4"><h2><?php _e('Get Quotation','freezoner'); ?></h2></div>
                            <div class="billing-inner">
                                <div class="row clearfix">
                                    
                                    <!--Form Group-->
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <input type="text" id="full_name" class="rounded" name="full_name" value="" placeholder="<?php _e('Full Name','freezoner'); ?>">
                                    </div>

                                    <!--Form Group-->
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <input type="email" id="email" class="rounded" name="email" value="" placeholder="<?php _e('Your Email','freezoner'); ?>">
                                    </div>
                                     <!--Form Group-->
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                       <input id="phone" class="rounded" name="phone" type="tel" placeholder="<?php _e('Phone Number','freezoner'); ?>">
                                    </div>

                                    <!--Form Group-->
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <select name="service" id="service" class="rounded">
                                            <option value=""><?php _e('Select Your Service','freezoner'); ?></option>
                                            <option value="Free zone company"><?php _e('Free zone company','freezoner'); ?></option>
                                                <option value="VIP"><?php _e('VIP','freezoner'); ?></option>
                                                <option value="Offshore"><?php _e('Offshore','freezoner'); ?></option>
                                                <option value="Freelance visa"><?php _e('Freelance visa','freezoner'); ?></option>
                                                <option value="Local sponsor"><?php _e('Local sponsor','freezoner'); ?></option>
                                                <option value="Corporate bank account"><?php _e('Corporate bank account','freezoner'); ?></option>
                                                <option value="Vat &amp; audit"><?php _e('Vat &amp; audit','freezoner'); ?></option>
                                                <option value="Immigration services"><?php _e('Immigration services','freezoner'); ?></option>
                                                <option value="Company website"><?php _e('Company website','freezoner'); ?></option>
                                        </select>
                                    </div>
                                    
                                     <!--Form Group-->
                                    <div class="form-group col-md-12 col-sm-12 row ml-3">
                                      <div class="field-label"><?php _e('Prefered way of communication (mandatory)','freezoner'); ?><sup>*</sup></div>
                                          <div class="form-check col-md-6 col-sm-6">
                                            <input class="form-check-input" type="radio" name="sending_by" id="send_email" value="email" checked>
                                            <label class="form-check-label" for="send_email">
                                               <?php _e('Email','freezoner'); ?>
                                            </label>
                                        </div>

                                        <div class="form-check col-md-6 col-sm-6">
                                            <input class="form-check-input" type="radio" name="sending_by" id="send_phone" value="phone">
                                            <label class="form-check-label" for="send_phone">
                                               <?php _e('Phone','freezoner'); ?>
                                            </label>
                                        </div>
                                      <!--Form Group-->  
                                    </div>
                                    
                                    <div class="form-group col-md-12 col-sm-12">
                                        <textarea name="message" id="message" class="rounded" placeholder="<?php _e('Note about your order. e.g. special note for delivery','freezoner'); ?>"></textarea>
                                    </div>
                                    
                                      <!--Form Group-->
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12 btns-box">
                                      <button type="button" name="submit" value="Submit" class="theme-btn btn-style-one w-100 rounded" id="get_quotation">
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
  endwhile; wp_reset_query(); endif;?>
</div>
  <?php
get_footer();
 ?>
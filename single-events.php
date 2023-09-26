<?php get_header('event'); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); $events_id = get_the_ID(); 

    $event_title = get_the_title();

    if( isset($_POST) && !empty($_POST['submit']) ){
        $name = $_POST['firstname']." ".$_POST['lastname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $subject = __('New Event Subscription','freezoner')." (".$event_title.")";
        $msg ="
        <html>
            <body>
              <p>". __('New Event Subscription','freezoner')." (".$event_title.")"."</p>
              <table>
                <tr>
                    <th>
                        ".__('Full Name','freezoner')."
                    </th>
                    <td>
                    ".$name."
                    </td>
                </tr>
                <tr>
                    <th>
                        ".__('Email Address','freezoner')."
                    </th>
                    <td>
                    ".$email."
                    </td>
                </tr>
                <tr>
                    <th>
                        ".__('Phone','freezoner')."
                    </th>
                    <td>
                    ".$phone."
                    </td>
                </tr>
              </table>
            </body>
            </html>" ;
        $headers = array('Content-Type: text/html; charset=UTF-8');
        $sent = wp_mail( 'esmsbhy@gmail.com', $subject, $msg,$headers);
        if (isset($sent) && $sent) {
          $message = __('You have been Sent successfully!','freezoner');
        }
    }

?>


<section class="our-blogs-section ">

    <?php if($message){?>
        <div class="alert alert-success" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <strong><?php _e('Success!','freezoner'); ?></strong> <?php echo ($message); ?>
        </div>
    <?php }?>
    <div class="auto-container">
        <div class="row clearfix">
            <!--News Block Two -->
            <div class="news-block-two style-two col-lg-12 col-md-12 col-sm-12">
                <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="image">
                        <a href="<?php the_permalink() ?>"><img src="<?php the_post_thumbnail_url(); ?>" alt="" /></a>
                    </div>
                    <div class="lower-content">
                        
                        
                        <div class="lower-box">
                            
                            <div class="row">
                                <h3><a href="event-detail.html"><?php echo wp_trim_words( $event_title ,10, ' ...' ); ?></a></h3>
                                <div class="col-sm-5 col-md-5 col-lg-5">
                                    <div class="text"><?php echo wp_trim_words( the_content() ,50, ' ...' ); ?></div>
                                </div>
                                <div class="col-sm-3 col-md-3 col-lg-3">
                                    <h4 class="mb-3"><?php _e('No of Slots','freezoner'); ?></h4>
                                    <ul>
                                        <?php 
                                        $events_number   = get_post_meta(get_the_ID(),'fz_events_number',true);
                                         if(!empty($events_number)) :
                                        ?>
                                        <li>
                                          <span class="event-sub"><i class="fas fa-sort-numeric-up-alt"></i> <?php _e('Total No','freezoner'); ?></span>:  <?= $events_number;?>
                                        </li>
                                        <?php endif; ?>
                                         <?php 
                                        $events_vacant   = get_post_meta(get_the_ID(),'fz_events_vacant',true);
                                         if(!empty($events_vacant)) :
                                        ?>
                                        <li>
                                            <span class="event-sub"><i class="fas fa-allergies"></i> <?php _e('Vacant Slots','freezoner'); ?></span>: <?= $events_vacant;?>
                                        </li>
                                        <?php endif; ?>
                                        <?php 
                                        $events_reg   = get_post_meta(get_the_ID(),'fz_events_registration',true);
                                         if(!empty($events_reg)) :
                                        ?>
                                        <li>
                                          <span class="event-sub"><i class="fas fa-registered"></i> <?php _e('Registration Fees','freezoner'); ?> </span>: <span class="txt-orange"><?= $events_reg;?></span> 
                                        </li>
                                        <?php endif; ?>
                                    </ul>
                                </div>
                                <div class="col-sm-4 col-md-4 col-lg-4">
                                    <h4 class="mb-3"><?php _e('Date and Time','freezoner'); ?></h4>
                                    <ul>
                                        <?php 
                                        $events_date   = get_post_meta(get_the_ID(),'fz_events_date',true);
                                         if(!empty($events_date)) :
                                        ?>
                                        <li>
                                           <span class="event-sub"><i class="fas fa-calendar-week"></i> <?php _e('Date','freezoner'); ?></span>: <?= $events_date ;?>
                                        </li>
                                        <?php endif; ?>
                                        <?php 
                                        $events_start   = get_post_meta(get_the_ID(),'fz_events_start',true);
                                         if(!empty($events_start)) :
                                        ?>
                                        <li>
                                           <span class="event-sub"><i class="far fa-clock"></i> <?php _e('Start Time','freezoner'); ?></span>: <?= $events_start;?>
                                        </li>
                                        <?php endif; ?>
                                        <?php 
                                        $events_end   = get_post_meta(get_the_ID(),'fz_events_end',true);
                                         if(!empty($events_end)) :
                                        ?>
                                        <li>
                                           <span class="event-sub"><i class="far fa-clock"></i> <?php _e('End Time','freezoner'); ?></span>: <?= $events_end;?>
                                        </li>
                                        <?php endif; ?>
                                    </ul>
                                    <?php 
                                        $events_location   = get_post_meta(get_the_ID(),'fz_events_location',true);
                                         if(!empty($events_location)) :
                                        ?>
                                    <h5><span class="event-sub"> <i style="margin-left: .13rem" class="fas fa-map-marker-alt"></i> <?php _e('Location','freezoner'); ?></span>: <?= $events_location; ?></h5>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>    
                    </div>
                </div>
            </div>      
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <button class="theme-btn btn-style-one w-25 rounded text-center register-box-btn" type="submit" id="form-submit"> <span class="txt"><?php _e('Register','freezoner'); ?></span> </button>

                <!--Search Popup-->
                <div id="register-popup" class="register-popup">
                    <div class="close-register theme-btn"><i class="fas fa-times-circle"></i></div>
                    <div class="popup-inner">
                        <div class="overlay-layer"></div>
                        <div class="search-form main-slider">
                            <div class="Quotation">
                                <form method="post" action="<?php the_permalink() ?>">

                                    <div class="row clearfix">
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <div class="title-box text-center"><h2><?php _e('Register','freezoner'); ?></h2></div>
                                            <div class="billing-inner">
                                                <div class="row clearfix">
                                                    
                                                    <!--Form Group-->
                                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                                        <div class="field-label"><?php _e('First Name','freezoner'); ?> <sup>*</sup></div>
                                                        <input type="text" class="rounded" name="firstname" value="" placeholder="<?php _e('First Name','freezoner'); ?>">
                                                    </div>

                                                     <!--Form Group-->
                                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                                        <div class="field-label"><?php _e('Last Name','freezoner'); ?> <sup>*</sup></div>
                                                        <input type="text" class="rounded" name="lastname" value="" placeholder="<?php _e('Last Name','freezoner'); ?>">
                                                    </div>
                                                    
                                                    <!--Form Group-->
                                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                                        <div class="field-label"><?php _e('Email','freezoner'); ?> <sup>*</sup></div>
                                                        <input type="email" class="rounded" name="email" value="" placeholder="<?php _e('Your Email','freezoner'); ?>">
                                                    </div>
                                                     <!--Form Group-->
                                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                                        <div class="field-label"><?php _e('Phone Number','freezoner'); ?> <sup>*</sup></div>
                                                       <input id="phone" class="rounded" name="phone" type="tel" placeholder="<?php _e('Phone Number','freezoner'); ?>">
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
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $images =  get_post_meta($id,'thumbnail_ids'); ?>
<?php  if($images != null && $images != '') { ?> 
<section id="gallery" class="mb-5">
  <div class="auto-container">
    <div id="image-gallery">
      <div class="row">
        <?php  foreach ($images as $image) { ?>
            <?php $image_attributes_large = wp_get_attachment_image_src($image, 'large')[0];?>
            <?php $image_attributes_thumbnail = wp_get_attachment_image_src($image, 'thumbnail')[0];?>
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 image">
          <div class="img-wrapper">
            <a href="<?=$image_attributes_thumbnail; ?>">
                <img src="<?=$image_attributes_large; ?>" class="img-responsive"></a>
            <div class="img-overlay">
              <i class="fa fa-plus-circle" aria-hidden="true"></i>
            </div>
          </div>
        </div> 
        <?php } ?>
   </div><!-- End row -->
    </div><!-- End image gallery -->
  </div><!-- End container --> 
</section>
<?php } ?>

<?php endwhile; endif;?>
<!-- Our events Section -->
    <section class="our-blogs-section">
        <div class="auto-container">
            <?php
                $posts = fz_get_events_view(3,$events_id);
                if($posts->have_posts()) : 
            ?>
            <div class="row clearfix">
                
                <!--News Block Two -->
                <?php while($posts->have_posts()) : $posts->the_post(); 
                 $event_title = get_the_title(); ?>
                <div class="news-block-two style-two col-lg-4 col-md-12 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image rounded">
                            <a href="<?php the_permalink() ?>"><img src="<?php the_post_thumbnail_url(); ?>" alt="" /></a>
                        </div>
                        <div class="lower-content">
                            <div class="upper-box clearfix">
                                <?php 
                      $events_date  = get_post_meta(get_the_ID(),'fz_events_date',true);
                      if(!empty($events_date)) :
                  ?>
                                <div class="posted-date mr-2"><i class="fas fa-calendar-alt"></i>  <?= $events_date ?></div>
                                <div class="posted-date"><i class="fas fa-minus"></i></div>
                                <?php endif; ?>
                                
                                <?php 
                              $events_start = get_post_meta(get_the_ID(),'fz_events_start',true);
                              if(!empty($events_start)) :
                           ?>
                                    <div class="posted-date ml-2"><i class="far fa-clock"></i><?php $t = strtotime($events_start); ?> <?=date('h:i A', $t) ?></div>
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
        </div>
        <?php wp_reset_query(); ?>
        <?php endif ?>
    </section>
    <!-- End Our events Section -->
<?php get_footer(); ?>
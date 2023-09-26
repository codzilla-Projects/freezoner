<?php get_header('inner'); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); $events_id = get_the_ID(); 
    $event_title = get_the_title();
?>
<section class="our-blogs-section">
    <div class="auto-container">
        <div class="row clearfix">
            <!--News Block Two -->
            <div class="news-block-two style-two col-lg-6 col-md-12 col-sm-12">
                <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="lower-content">
                        <div class="upper-box clearfix">
                           <div class="posted-date"> <a href="<?php the_permalink() ?>"><?php the_title(); ?></a></div>
                            <div class="posted-date"><i class="fa fa-calendar-o"></i><?= get_the_date( 'j F Y', $event_id );?></div>
                        </div>
                        
                        <div class="lower-box">
                            <h3><a href="event-detail.html"><?= $event_title?></a></h3>
                            <div class="text"><?php the_excerpt(); ?></div>
                            <a href="<?php the_permalink() ?>" class="theme-btn read-more"><?php _e('Read More','freezoner'); ?></a>
                        </div>
                    </div>
                </div>
            </div>      
        </div>
    </div>
</section>
<?php endwhile; endif;?>
<?php get_footer(); ?>
<?php 
get_header('inner');
if( have_posts() ) : while ( have_posts() ) : the_post(); $blog_id = get_the_ID(); ?>
<section class="our-blogs-section">
    <div class="auto-container">
        <div class="row clearfix">
            <!--News Block Two -->
            <div class="news-block-two style-two col-lg-12 col-md-12 col-sm-12">
                <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="lower-content">
                        <div class="upper-box clearfix">
                            <div class="posted-date pull-left"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></div>
                            <div class="posted-date pull-right"><i class="fa fa-calendar-o"></i><?= get_the_date( 'j F Y', $blog_id );?></div>
                        </div>
                        
                        <div class="lower-box">
                            <h3><a href="event-detail.html"><?php $event_title; ?></a></h3>
                            <div class="text"><?php the_content(); ?></div>
                            
                        </div>
                    </div>
                </div>
            </div>      
        </div>
    </div>
</section>
<?php 
endwhile; wp_reset_query(); endif;
get_footer();
?>
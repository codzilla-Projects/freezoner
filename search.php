<?php get_header('search'); ?>
<section dir="rtl" class="search-page-container" id="search_resault">
    <div data-aos="fade-up">
        <div class="auto-container">
            <div class="row">
                <div class="col-md-12 search-title">
                    <h2><?php _e('Research Results','freezoner'); ?>: <?php echo $_GET['s']; ?></h2>                         
                        <div class="row">
                            <div class="col-md-12">
                                <ul class="fz_search-list">   
                                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>                 
                                    <li class="fz_search-result">
                                        <a href="<?php the_permalink();?>"><?php the_title();?></a>             
                                    </li>                                            
                                    <?php endwhile; ?>
                                </ul>
                            </div>
                        </div>
                             <!--Styled Pagination-->
                            <?php    
                                $args = array(
                                   'format'             => '?paged=%#%',
                                   'current'            => max( 1, get_query_var('paged') ),
                                   'total'              => $wp_query->max_num_pages,
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
                        <?php else:
                         echo "<div class='col-md-12'>" ;
                           echo"<div>";                           
                              echo"<div class='row'>";
                                    echo" <ul>";
                                      echo"<li class='fz_search-result'>";
                                        echo _e('No Data To Search','freezoner');
                                        echo"</li>";
                                   echo"</ul>";
                                echo"</div>";
                            echo"</div>";
                        echo"</div>";
                      ?>
                        <?php wp_reset_query(); ?>
                    <?php endif ?>
                </div>
                
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
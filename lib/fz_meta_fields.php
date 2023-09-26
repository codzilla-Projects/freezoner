<?php 

/*********************************



Add Link Meta Box To Slider



**********************************/



function fz_add_slider_data_meta() {



    add_meta_box( "slider_extra_data", "Additional Data" , "fz_slider_data_callback", array('sliders'), "normal" );



}



add_action( 'add_meta_boxes', 'fz_add_slider_data_meta' );



/* Display the post meta box. */



function fz_slider_data_callback( $object, $box ) { 



    $fz_slider_link_text = esc_attr( get_post_meta( $object->ID, 'fz_slider_link_text', true ) );

    $fz_slider_link_url = esc_attr( get_post_meta( $object->ID, 'fz_slider_link_url', true ) );

?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <div class="form-group row mt-3">

        <div class="col-lg-12 col-md-12 col-sm-12">

            <div class="row">

                <div class="col-lg-3 col-md-3 col-sm-3">

                    <label for="fz_slider_link_text"><?php _e('Link Text: ','freezoner'); ?></label>

                </div>

                <div class="col-lg-9 col-md-9 col-sm-9">

                    <input type="text"  name="fz_slider_link_text" class="form-control w-100" value="<?php echo $fz_slider_link_text; ?>"><br>

                </div>

            </div>

        </div>

    </div>



    <div class="form-group row mt-3">

        <div class="col-lg-12 col-md-12 col-sm-12">

            <div class="row">

                <div class="col-lg-3 col-md-3 col-sm-3">

                    <label for="fz_slider_link_url"><?php _e('Link URL: ','freezoner'); ?></label>

                </div>

                <div class="col-lg-9 col-md-9 col-sm-9">

                    <input type="text"  name="fz_slider_link_url" class="form-control w-100" value="<?php echo $fz_slider_link_url; ?>"><br>

                </div>

            </div>

        </div>



    </div>

<?php



}



/*********************************



Add Link Meta Box To Services



**********************************/



function fz_add_services_data_meta() {



    add_meta_box( "services_extra_data","Additional Data" , "fz_services_data_callback", array('services'), "normal" );



}



add_action( 'add_meta_boxes', 'fz_add_services_data_meta' );







/* Display the post meta box. */



function fz_services_data_callback( $object, $box ) { 



    $fz_services_link = esc_attr( get_post_meta( $object->ID, 'fz_services_link', true ) );
    $fz_services_image = esc_attr( get_post_meta( $object->ID, 'fz_services_image', true ) );

?>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <div class="form-group row mt-3">

        <div class="col-lg-12 col-md-12 col-sm-12">

            <div class="row">

                <div class="col-lg-3 col-md-3 col-sm-3">

                    <label for="fz_services_link"><?php _e('Link Youtube: ','freezoner'); ?></label>

                </div>

                <div class="col-lg-9 col-md-9 col-sm-9">

                    <input type="text"  name="fz_services_link" class="form-control w-100" value="<?php echo $fz_services_link; ?>"><br>

                </div>

            </div>

        </div>

    </div>
    <div class="form-group row mt-3">

        <div class="col-lg-12 col-md-12 col-sm-12">

            <div class="row">

                <div class="col-lg-3 col-md-3 col-sm-3">

                    <label for="fz_services_image"><?php _e('Link Image: ','freezoner'); ?></label>

                </div>

                <div class="col-lg-9 col-md-9 col-sm-9">

                    <input type="text"  name="fz_services_image" class="form-control w-100" value="<?php echo $fz_services_image; ?>"><br>

                </div>

            </div>

        </div>

    </div>


<?php



}





/*********************************



Add Link Meta Box To Services



**********************************/



function fz_add_events_data_meta() {



    add_meta_box( "events_extra_data","Additional Data" , "fz_events_data_callback", array('events'), "normal" );



}



add_action( 'add_meta_boxes', 'fz_add_events_data_meta' );







/* Display the post meta box. */



function fz_events_data_callback( $object, $box ) { 



    $fz_events_number       = esc_attr( get_post_meta( $object->ID, 'fz_events_number', true ) );

    $fz_events_vacant       = esc_attr( get_post_meta( $object->ID, 'fz_events_vacant', true ) );

    $fz_events_registration = esc_attr( get_post_meta( $object->ID, 'fz_events_registration', true ) );

    $fz_events_date         = esc_attr( get_post_meta( $object->ID, 'fz_events_date', true ) );

    $fz_events_start        = esc_attr( get_post_meta( $object->ID, 'fz_events_start', true ) );

    $fz_events_end          = esc_attr( get_post_meta( $object->ID, 'fz_events_end', true ) );

    $fz_events_location     = esc_attr( get_post_meta( $object->ID, 'fz_events_location', true ) );

    $fz_events_image     = esc_attr( get_post_meta( $object->ID, 'fz_events_image', true ) );

    $fz_events_trainee     = esc_attr( get_post_meta( $object->ID, 'fz_events_trainee', true ) );

?>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <div class="form-group row mt-3">

        <div class="col-lg-12 col-md-12 col-sm-12">

            <div class="row">

                <div class="col-lg-3 col-md-3 col-sm-3">

                    <label for="fz_events_number"><?php _e('Total No: ','freezoner'); ?></label>

                </div>

                <div class="col-lg-9 col-md-9 col-sm-9">

                    <input type="text"  name="fz_events_number" class="form-control w-100" value="<?php echo $fz_events_number; ?>"><br>

                </div>



                <div class="col-lg-3 col-md-3 col-sm-3">

                    <label for="fz_events_vacant"><?php _e('Vacant Slots: ','freezoner'); ?></label>

                </div>

                <div class="col-lg-9 col-md-9 col-sm-9">

                    <input type="text"  name="fz_events_vacant" class="form-control w-100" value="<?php echo $fz_events_vacant; ?>"><br>

                </div>



                <div class="col-lg-3 col-md-3 col-sm-3">

                    <label for="fz_events_registration"><?php _e('Registration Fees: ','freezoner'); ?></label>

                </div>

                <div class="col-lg-9 col-md-9 col-sm-9">

                    <input type="text"  name="fz_events_registration" class="form-control w-100" value="<?php echo $fz_events_registration; ?>"><br>

                </div>



                <div class="col-lg-3 col-md-3 col-sm-3">

                    <label for="fz_events_date"><?php _e('Date: ','freezoner'); ?></label>

                </div>

                <div class="col-lg-9 col-md-9 col-sm-9">

                    <input type="date"  name="fz_events_date" class="form-control w-100" value="<?php echo $fz_events_date; ?>"><br>

                </div>



                <div class="col-lg-3 col-md-3 col-sm-3">

                    <label for="fz_events_start"><?php _e('Start Time: ','freezoner'); ?></label>

                </div>

                <div class="col-lg-9 col-md-9 col-sm-9">

                    <input type="time" onchange="onTimeChange()" id="timeInput"  name="fz_events_start" class="form-control w-100" value="<?php echo $fz_events_start; ?>"><br>

                </div>



                <div class="col-lg-3 col-md-3 col-sm-3">

                    <label for="fz_events_end"><?php _e('End Time: ','freezoner'); ?></label>

                </div>

                <div class="col-lg-9 col-md-9 col-sm-9">

                    <input type="time" onchange="onTimeChange()" id="timeInput"  name="fz_events_end" class="form-control w-100" value="<?php echo $fz_events_end; ?>"><br>

                </div>



                <div class="col-lg-3 col-md-3 col-sm-3">

                    <label for="fz_events_location"><?php _e('Location: ','freezoner'); ?></label>

                </div>

                <div class="col-lg-9 col-md-9 col-sm-9">

                    <input type="text"  name="fz_events_location" class="form-control w-100" value="<?php echo $fz_events_location; ?>"><br>

                </div>


                <div class="col-lg-3 col-md-3 col-sm-3">

                    <label for="fz_events_image"><?php _e('Image Url: ','freezoner'); ?></label>

                </div>
                <div class="col-lg-9 col-md-9 col-sm-9">

                    <input type="text"  name="fz_events_image" class="form-control w-100" value="<?php echo $fz_events_image; ?>"><br>

                </div>

                <div class="col-lg-3 col-md-3 col-sm-3">

                    <label for="fz_events_trainee"><?php _e('Trainee: ','freezoner'); ?></label>

                </div>

                 <div class="col-lg-9 col-md-9 col-sm-9">

                    <input type="text"  name="fz_events_trainee" class="form-control w-100" value="<?php echo $fz_events_trainee; ?>"><br>

                </div>

            </div>

        </div>

    </div>



<?php



}

add_action( 'save_post', 'fz_save_custom_meta', 10, 2 );



function fz_save_custom_meta($post_id){



    

    if( isset($_POST['fz_slider_link_text']) ){



        update_post_meta($post_id, 'fz_slider_link_text', $_POST['fz_slider_link_text']);



    }



    else



        delete_post_meta($post_id,'fz_slider_link_text');





    if( isset($_POST['fz_slider_link_url']) ){



        update_post_meta($post_id, 'fz_slider_link_url', $_POST['fz_slider_link_url']);



    }



    else



        delete_post_meta($post_id,'fz_slider_link_url');





    if( isset($_POST['fz_services_link']) ){



        update_post_meta($post_id, 'fz_services_link', $_POST['fz_services_link']);



    }



    else



        delete_post_meta($post_id,'fz_services_link');

    if( isset($_POST['fz_services_image']) ){



        update_post_meta($post_id, 'fz_services_image', $_POST['fz_services_image']);



    }



    else



        delete_post_meta($post_id,'fz_services_image');



    if( isset($_POST['fz_events_number'])){



        update_post_meta($post_id, 'fz_events_number', $_POST['fz_events_number']);

       



    }



    else



        delete_post_meta($post_id,'fz_events_number');





    if( isset($_POST['fz_events_vacant'])){



        update_post_meta($post_id, 'fz_events_vacant', $_POST['fz_events_vacant']);

    }



    else



        delete_post_meta($post_id,'fz_events_vacant');



    if( isset($_POST['fz_events_registration'])){



        update_post_meta($post_id, 'fz_events_registration', $_POST['fz_events_registration']);



    }



    else



        delete_post_meta($post_id,'fz_events_registration');



    if( isset($_POST['fz_events_date'])){



        update_post_meta($post_id, 'fz_events_date', $_POST['fz_events_date']);

       



    }



    else



        delete_post_meta($post_id,'fz_events_date');



    if( isset($_POST['fz_events_start'])){



        update_post_meta($post_id, 'fz_events_start', $_POST['fz_events_start']);

       



    }



    else



        delete_post_meta($post_id,'fz_events_start');







    if( isset($_POST['fz_events_end'])){



        update_post_meta($post_id, 'fz_events_end', $_POST['fz_events_end']);

       



    }



    else



        delete_post_meta($post_id,'fz_events_end');







    if( isset($_POST['fz_events_location'])){



        update_post_meta($post_id, 'fz_events_location', $_POST['fz_events_location']);

       



    }



    else



        delete_post_meta($post_id,'fz_events_location');

    if( isset($_POST['fz_events_image'])){



        update_post_meta($post_id, 'fz_events_image', $_POST['fz_events_image']);

       



    }



    else



        delete_post_meta($post_id,'fz_events_image');

    if( isset($_POST['fz_events_trainee'])){



        update_post_meta($post_id, 'fz_events_trainee', $_POST['fz_events_trainee']);

       



    }



    else



        delete_post_meta($post_id,'fz_events_trainee');

}




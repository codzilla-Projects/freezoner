<?php 

function main_content_area_callback(){

	$wp_editor_settings = array( 

		'quicktags' => array( 'buttons' => 'strong,em,del,ul,ol,li,close' ), // note that spaces in this list seem to cause an issue

		'textarea_rows'=> 2

	);    

	if( isset( $_POST['fz_save'] ) && !empty( $_POST['fz_save']) ){

		foreach ($_POST as $key => $value) {

			if(in_array($key,['fz_map_code'])){

				$value = stripcslashes($value);

			}				

			update_option( $key, $value);

		}

	}

?>

<div class="container-fluid text-right padding-right-4">

	<div class="row">

		<div class="col-sm-12 col-md-12 col-lg-12 bg-col12">
			<!-- Top Navigation -->
			<header class="codrops-header">
				<h1 class="text-center fz-title"><span>General settings</span></h1>
			</header>
		</div>
			<br/>
		<div class="col-sm-3 col-md-3 col-lg-3 pl-0">

			<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">

				<a class="nav-link active" id="v-pills-firstsection-tab" data-toggle="pill" href="#v-pills-firstsection" role="tab" aria-controls="v-pills-firstsection" aria-selected="true">Logos</a>

				<a class="nav-link" id="v-pills-secondsection-tab" data-toggle="pill" href="#v-pills-secondsection" role="tab" aria-controls="v-pills-secondsection" aria-selected="false">Contact Us </a>

				<a class="nav-link" id="v-pills-thirdsection-tab" data-toggle="pill" href="#v-pills-thirdsection" role="tab" aria-controls="v-pills-thirdsection" aria-selected="false">Social Media</a>

			</div>

		</div>

		<div class="col-sm-9 col-md-9 col-lg-9 gray_back pr-0">

	  		<form class="form-horizontal" method="post" action="#">

			    <div class="tab-content" id="v-pills-tabContent">

			        <div class="tab-pane fade show active" id="v-pills-firstsection" role="tabpanel" aria-labelledby="v-pills-firstsection-tab">

						<div class="form-group">

						  <label for="fz_website_logo" class="col-sm-12 text-left control-label text-white">ID picture or logo</label>

						  <div class="col-sm-12 text-left">

						    <input class="first_img_url fz_half" type="text" name="fz_logo_img" size="60" value="<?php echo get_option('fz_logo_img'); ?>">

						    <a href="#" class="first_img_upload btn btn-info">Choose</a>

						    <img class="first_img" src="<?php echo get_option('fz_logo_img'); ?>" height="100" style="max-width:100%" />

						  </div>

						</div>
			        </div>

			        <div class="tab-pane fade" id="v-pills-secondsection" role="tabpanel" aria-labelledby="v-pills-secondsection-tab">

						<div class="form-group">

							<label for="fz_phone" class="col-sm-12 text-left control-label text-white">Phone Number</label>

							<div class="col-sm-12 text-left">

								<input type="text" class="form-control" id="fz_phone" name="fz_phone" value="<?php echo get_option('fz_phone'); ?>">

							</div>

						</div>	

						<div class="form-group">

							<label for="fz_email" class="col-sm-12 text-left control-label text-white">email E-mail Address</label>

							<div class="col-sm-12 text-left">

								<input type="text" class="form-control" id="fz_email" name="fz_email" value="<?php echo get_option('fz_email'); ?>">

							</div>

						</div>

						<div class="form-group">

							<label for="fz_location" class="col-sm-12 text-left control-label text-white">Location</label>

							<div class="col-sm-12 text-left">

								<input type="text" class="form-control" id="fz_location" name="fz_location" value="<?php echo get_option('fz_location'); ?>">

							</div>

						</div>

				    </div>	      

					<div class="tab-pane fade" id="v-pills-thirdsection" role="tabpanel" aria-labelledby="v-pills-thirdsection-tab">

						<div class="form-group">

							<label for="fz_fb" class="col-sm-12 text-left control-label text-white">Facebook</label>

							<div class="col-sm-12 text-left">

								<input type="text" class="form-control" id="fz_fb" name="fz_fb" value="<?php echo get_option('fz_fb'); ?>">

							</div>

						</div>

						<div class="form-group">

							<label for="fz_youtube" class="col-sm-12 text-left control-label text-white">You Tube</label>

							<div class="col-sm-12 text-left">

								<input type="text" class="form-control" id="fz_youtube" name="fz_youtube" value="<?php echo get_option('fz_youtube'); ?>">

							</div>

						</div>

						<div class="form-group">

							<label for="fz_insta" class="col-sm-12 text-left control-label text-white">Instagram</label>

							<div class="col-sm-12 text-left">

								<input type="text" class="form-control" id="fz_insta" name="fz_insta" value="<?php echo get_option('fz_insta'); ?>">

							</div>

						</div>

						<div class="form-group">

							<label for="fz_linkedin" class="col-sm-12 text-left control-label text-white">Linked In</label>

							<div class="col-sm-12 text-left">

								<input type="text" class="form-control" id="fz_linkedin" name="fz_linkedin" value="<?php echo get_option('fz_linkedin'); ?>">

							</div>

						</div>

						<div class="form-group">

							<label for="fz_whatsapp" class="col-sm-12 text-left control-label text-white">WhatsApp</label>

							<div class="col-sm-12 text-left">

								<input type="text" class="form-control" id="fz_whatsapp" name="fz_whatsapp" value="<?php echo get_option('fz_whatsapp'); ?>">

							</div>

						</div>

					</div>

			    </div>

				<div class="form-group">

					<div class="col-sm-12">

					<input type="submit" class="btn btn-default btn-block btn-lg fz_save_route" name="fz_save" value="Save Options">

					</div>

				</div>

			</form>

	 	</div>

	</div>

</div><!-- /container -->

<?php

}
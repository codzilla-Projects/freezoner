<?php 
function home_page_content_callback(){
	   
	if( isset( $_POST['fz_save'] ) && !empty( $_POST['fz_save']) ){
		foreach ($_POST as $key => $value) {		
			update_option( $key, $value);
		}
	}
?>

<div class="container-fluid text-right padding-right-4">
	<div class="row">
		<div class="col-sm-12 col-md-12 col-lg-12 bg-col12">
			<!-- Top Navigation -->
			<header class="codrops-header">
				<h1 class="text-center fz-title"><span>Home Page Options</span></h1>
			</header>
		</div>
			<br/>
	</div>
		<div class="row">

		<div class="col-sm-3 pl-0">

			<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">

				<a class="nav-link active" id="v-pills-firstsection-tab" data-toggle="pill" href="#v-pills-firstsection" role="tab" aria-controls="v-pills-firstsection" aria-selected="true">Slider Option</a>		

			</div>

		</div>

		<div class="col-sm-9 gray_back pr-0">
	  		<form class="form-horizontal" method="post" action="#">
			    <div class="tab-content" id="v-pills-tabContent">
			        <div class="tab-pane fade show active" id="v-pills-firstsection" role="tabpanel" aria-labelledby="v-pills-firstsection-tab">

						<div class="form-group">
							<label for="slider_num" class="col-sm-6 text-white control-label">Slider Number Show</label>
							<div class="col-sm-12">
								<input type="number" class="form-control" id="slider_num" name="slider_num" value="<?php echo get_option('slider_num'); ?>">
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
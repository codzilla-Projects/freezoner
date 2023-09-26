<?php  get_header(); ?>

	<div class="back-to-home rounded d-none d-sm-block">

            <a href="<?php bloginfo('url'); ?>" class="btn btn-icon btn-soft-primary"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home icons"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg></a>

        </div>
		<section class="bg-home d-flex align-items-center mt-5">

            <div class="container mt-5">

                <div class="row justify-content-center mt-5">

                    <div class="col-lg-8 col-md-12 text-center mt-5 ">

                        <img src="<?= fz_URL .'assets/images/404.jpg'; ?>" style="height: 200px;" class="img-fluid mt-5" alt="">

                        <h3 class="text-uppercase mt-4 h3"><?php _e('oops, Something went wrong','freezoner'); ?></h3>

                        <div class="text-capitalize text-dark mb-4 error-page"><?php _e('Page Not Found','freezoner'); ?></div>

                        <div class="text-capitalize text-dark mb-4 error-page"><?php _e('Sorry about this outage, it seems something went wrong','freezoner'); ?></div>
                        <p class="text-muted para-desc mx-auto text-center"></p>

                    </div><!--end col-->

                </div><!--end row-->



                <div class="row mb-5">

                    <div class="col-md-12 text-center ">  

                        <a href="<?php bloginfo('url'); ?>" class="theme-btn btn-style-one rounded"><span class="txt"><?php _e('Return TO Home Page','freezoner'); ?></span></a>

                    </div><!--end col-->

                </div><!--end row-->

            </div><!--end container-->

        </section>

<?php  get_footer(); ?>
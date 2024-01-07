<!DOCTYPE html>
<html lang="zxx">
	
    <head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		
        <title>Helping Hands</title>
		@livewireStyles()

		
        <!-- All Plugins Css -->
        <link href="{{ asset('frontend/assets/css/plugins.css')}}" rel="stylesheet">
		 

        <!-- Custom CSS -->
        <link href="{{ asset('frontend/assets/css/styles.css')}}" rel="stylesheet">
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="shortcut icon" href="{{ asset('frontend/assets/img/logo_black.png') }}" type="image/x-icon">
		{{-- @livewireStyles --}}
    </head>
	
    <body class="blue-skin">
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <!-- <div class="Loader"></div> -->
		
        <!-- ============================================================== -->
        <!-- Main wrapper - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <div id="main-wrapper">
		
            <!-- ============================================================== -->
            <!-- Top header  -->
            <!-- ============================================================== -->
            <!-- Start Navigation -->
            @include('frontend.layouts.header')
			
			<!-- End Navigation -->
			<div class="clearfix"></div>
			<!-- ============================================================== -->
			<!-- Top header  -->
			<!-- ============================================================== -->
			@yield('content')
			
		
            @include('frontend.layouts.footer')

		
			
			<!-- Log In Modal -->
			@livewire('home.jobs.login-modal')
			<!-- End Modal -->

			<!-- Upload Resume -->
			<div class="modal fade" id="upload-resume" tabindex="-1" role="dialog" aria-labelledby="resumeupload" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered login-pop-form" role="document">
					<div class="modal-content" id="resumeupload">
						<div class="modal-header">
							<h4>Upload Resume</h4>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="ti-close"></i></span></button>
						</div>
						<div class="modal-body">
							
							<div class="login-form">
								<form>
								
									<div class="form-row">
										<div class="col-lg-6 col-md-12">
											<div class="form-group">
												<label>Full Name</label>
												<input type="text" class="form-control" placeholder="Username">
											</div>
										</div>
										
										<div class="col-lg-6 col-md-12">
											<div class="form-group">
												<label>E-Mail ID</label>
												<input type="email" class="form-control" placeholder="ucicl@gmail.com">
											</div>
										</div>
									</div>
									
									<div class="form-group">
										<label>Paste Your Resume</label>
										<textarea class="form-control ht-150" placeholder="Copy & Paste Resume"></textarea>
									</div>
									
									<div class="form-group">
										<label class="light">doc, docx,pdf,txt,png</label>
										<div class="custom-file">
											<input type="file" class="custom-file-input" id="uploadResume">
											<label class="custom-file-label" for="uploadResume"><i class="ti-link mr-1"></i>Upload Resume</label>
										</div>
									</div>
									
									<div class="form-group">
										<button type="submit" class="btn dark-2 btn-md full-width pop-login">Upload Resume</button>
									</div>
								
								</form>
							</div>
							
						</div>
					</div>
				</div>
			</div>
			<!-- Upload Resume -->			

		</div>
		<!-- ============================================================== -->
		<!-- End Wrapper -->
		<!-- ============================================================== -->
		
        @include('frontend.layouts.scripts')
		@livewireScripts()
		@yield('scripts')
		
        		<!-- ============================================================== -->

		<!-- ============================================================== -->
		<!-- This page plugins -->
		<!-- ============================================================== -->
		
	</body>

</html>
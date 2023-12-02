<!DOCTYPE html>
<html lang="zxx">
	
    <head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		
        <title>Helping Hands</title>
		
        <!-- All Plugins Css -->
        <link href="{{ asset('frontend/assets/css/plugins.css')}}" rel="stylesheet">
		 

        <!-- Custom CSS -->
        <link href="{{ asset('frontend/assets/css/styles.css')}}" rel="stylesheet">
        <link rel="shortcut icon" href="{{ asset('frontend/assets/img/logo_black.png')}}" type="image/x-icon">
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
			<div class="header header-transparent dark-text">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12">
							<nav id="navigation" class="navigation navigation-landscape">
								<div class="nav-header">
									<a class="nav-brand" href="#">
										<img src="../assets/img/logo_black.png" class="logo" alt="" />
									</a>
									<div class="nav-toggle"></div>
								</div>
								<div class="nav-menus-wrapper">
									<ul class="nav-menu">
									
										<li class="active"><a href="#">Home<span class="submenu-indicator"></span></a>
										</li>
										
										<li><a href="#">Explore<span class="submenu-indicator"></span></a>
											<ul class="nav-dropdown nav-submenu">
									
												<li><a href="#">Freelancers<span class="submenu-indicator"></span></a>
													<ul class="nav-dropdown nav-submenu">
														<li><a href="../pages/freelancer/search-freelancers.html">Search Freelancers</a></li>                                    
													</ul>
												</li>
												
												<li><a href="#">Employers<span class="submenu-indicator"></span></a>
													<ul class="nav-dropdown nav-submenu">
														<li><a href="../pages/employer/search-employers.html">Search Employers</a></li>                                    
													</ul>
												</li>
												
											</ul>
										</li>
										
										<li><a href="dashboard.html">Dashboard</a></li>
										
										<li><a href="#">Pages<span class="submenu-indicator"></span></a>
											<ul class="nav-dropdown nav-submenu">
												<li><a href="about-us.html">About Us</a></li> 
												<li><a href="pricing.html">Pricing</a></li>
												<li><a href="contact.html">Contact Us</a></li>
												<li><a href="faq.html">FAQ's</a></li>
											</ul>
										</li>
										
									</ul>
									
									<ul class="nav-menu nav-menu-social align-to-right">
										
										<li>
											<a href="javascript:void(0);" data-toggle="modal" data-target="#upload-resume">
												<i class="fa fa-upload mr-1"></i>Upload Resume
											</a>
										</li>
										<li class="add-listing dark-bg">
											<a href="#" data-toggle="modal" data-target="#login">
												 <i class="ti-user mr-1"></i> Sign in
											</a>
										</li>
									</ul>
								</div>
							</nav>
						</div>
					</div>
				</div>
			</div>
			<!-- End Navigation -->
			<div class="clearfix"></div>
			<!-- ============================================================== -->
			<!-- Top header  -->
			<!-- ============================================================== -->
			
			
			<!-- ============================ Hero Banner  Start================================== -->
			<div class="hero-banner full jumbo-banner" style="background:#f4f9fd url(assets/img/bg2.png);">
				<div class="container">
					<div class="row align-items-center">	
					
						<div class="col-lg-7 col-md-8">
							<h1>Find <span class="text-info">your job</span> & make sure goal!</h1>
							<p class="lead">Your dream job is waiting for you.</p>
							<form class="search-big-form banner-search shadow mt-3">
								<div class="row m-0">
									<div class="col-lg-5 col-md-5 col-sm-12 p-0">
										<div class="form-group">
											<i class="ti-search"></i>
											<input type="text" class="form-control b-0 b-r l-radius" placeholder="Job Title or Keywords">
										</div>
									</div>
									
									
									<div class="col-lg-5 col-md-4 col-sm-12 p-0">
										<div class="form-group">
											<select id="jb-category" class="js-states form-control b-0">
												<option value="">&nbsp;</option>
												<option value="1">Carpenter</option>
												<option value="2">Plumber</option>
												<option value="3">Interior Designer</option>
												<option value="4">Electrician</option>
												<option value="5">Worker</option>
												<option value="6">Plasterer</option>
												<option value="7">Painter</option>
												<option value="8">Tile Setter</option>
												<option value="9">Carpet Setter</option>
											</select>
										</div>
									</div>
									
									<div class="col-lg-2 col-md-3 col-sm-12 p-0">
										<button type="button" class="btn dark-3 full-width r-radius">Search</button>
									</div>
								</div>
							</form>
								
						</div>
						
						<div class="col-lg-5 col-md-4">
							<img src="../assets/img/a-2.png" alt="latest property" class="img-fluid">
						</div>
					
					</div>
				</div>
			</div>
			<!-- ============================ Hero Banner End ================================== -->

			<!-- ============================ Newest Designs Start ==================================== -->
			<section class="min-sec">
				<div class="container">
				
					<div class="row justify-content-center">
						<div class="col-lg-7 col-md-9">
							<div class="sec-heading">
								<h2>Top Featured <span class="theme-cl-2">Jobs</span></h2>
								<p>Here are some top featured jobs.</p>
							</div>
						</div>
					</div>
					
					<div class="row justify-content-center">
								
						<!-- Single Item -->
						<div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
							<div class="job_grid_02">
								<img src="../assets/img/job-featured.png" class="_featured_jbs" alt="">
								<div class="jobs-like">
									<label class="toggler toggler-danger"><input type="checkbox"><i class="fa fa-heart"></i></label>
								</div>
								<div class="jb_types fulltime">Full Time</div>
								<div class="jb_grid_01_thumb">
									<a href="employer-detail.html"><img src="../assets/img/carpenter.png" class="img-fluid" alt=""></a>
								</div>
								<div class="jb_grid_01_caption">
									<h4 class="_jb_title"><a href="job-detail.html">Carpenter</a></h4>
									<!-- <div class="_emp_jb">A.K Infra &amp; Reality Developers Pvt. Ltd.</div> -->
								</div>
								<div class="jb_grid_01_footer">
									<a href="job-detail.html" class="_jb_apply">View Job</a>
								</div>
							</div>
						</div>
						
						<!-- Single Item -->
						<div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
							<div class="job_grid_02">
								<div class="jobs-like">
									<label class="toggler toggler-danger"><input type="checkbox"><i class="fa fa-heart"></i></label>
								</div>
								<div class="jb_types parttime">Part Time</div>
								<div class="jb_grid_01_thumb">
									<a href="employer-detail.html"><img src="../assets/img/plumber.png" class="img-fluid" alt=""></a>
								</div>
								<div class="jb_grid_01_caption">
									<h4 class="_jb_title"><a href="job-detail.html">Plumber</a></h4>
									<!-- <div class="_emp_jb">A.K Infra Developers</div> -->
								</div>
								<div class="jb_grid_01_footer">
									<a href="job-detail.html" class="_jb_apply">View Job</a>
								</div>
							</div>
						</div>
						
						<!-- Single Item -->
						<div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
							<div class="job_grid_02">
								<div class="jobs-like">
									<label class="toggler toggler-danger"><input type="checkbox"><i class="fa fa-heart"></i></label>
								</div>
								<div class="jb_types parttime">Part Time</div>
								<div class="jb_grid_01_thumb">
									<a href="employer-detail.html"><img src="../assets/img/electrician.png" class="img-fluid" alt=""></a>
								</div>
								<div class="jb_grid_01_caption">
									<h4 class="_jb_title"><a href="job-detail.html">Electrician</a></h4>
									<!-- <div class="_emp_jb">A.K. Infra Technology</div> -->
								</div>
								<div class="jb_grid_01_footer">
									<a href="job-detail.html" class="_jb_apply">View Job</a>
								</div>
							</div>
						</div>
						
						<!-- Single Item -->
						<div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
							<div class="job_grid_02">
								<img src="../assets/img/job-featured.png" class="_featured_jbs" alt="">
								<div class="jobs-like">
									<label class="toggler toggler-danger"><input type="checkbox"><i class="fa fa-heart"></i></label>
								</div>
								<div class="jb_types fulltime">Full Time</div>
								<div class="jb_grid_01_thumb">
									<a href="employer-detail.html"><img src="../assets/img/int_desinger.png" class="img-fluid" alt=""></a>
								</div>
								<div class="jb_grid_01_caption">
									<h4 class="_jb_title"><a href="job-detail.html">Interior Designer</a></h4>
									<!-- <div class="_emp_jb">Waft Technologies</div> -->
								</div>
								<div class="jb_grid_01_footer">
									<a href="job-detail.html" class="_jb_apply">View Job</a>
								</div>
							</div>
						</div>
						
						<!-- Single Item -->
						<div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
							<div class="job_grid_02">
								<div class="jobs-like">
									<label class="toggler toggler-danger"><input type="checkbox"><i class="fa fa-heart"></i></label>
								</div>
								<div class="jb_types contract">Contract</div>
								<div class="jb_grid_01_thumb">
									<a href="employer-detail.html"><img src="../assets/img/plasterer.png" class="img-fluid" alt=""></a>
								</div>
								<div class="jb_grid_01_caption">
									<h4 class="_jb_title"><a href="job-detail.html">Plasterer</a></h4>
									<!-- <div class="_emp_jb">Themezhub Infotech</div> -->
								</div>
								<div class="jb_grid_01_footer">
									<a href="job-detail.html" class="_jb_apply">View Job</a>
								</div>
							</div>
						</div>
						
						<!-- Single Item -->
						<div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
							<div class="job_grid_02">
								<div class="jobs-like">
									<label class="toggler toggler-danger"><input type="checkbox"><i class="fa fa-heart"></i></label>
								</div>
								<div class="jb_types contract">Contract</div>
								<div class="jb_grid_01_thumb">
									<a href="employer-detail.html"><img src="../assets/img/painter.jpg" class="img-fluid" alt=""></a>
								</div>
								<div class="jb_grid_01_caption">
									<h4 class="_jb_title"><a href="job-detail.html">Painter</a></h4>
									<!-- <div class="_emp_jb">Simran Web Soft</div> -->
								</div>
								<div class="jb_grid_01_footer">
									<a href="job-detail.html" class="_jb_apply">View Job</a>
								</div>
							</div>
						</div>
						
						<!-- Single Item -->
						<div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
							<div class="job_grid_02">
								<div class="jobs-like">
									<label class="toggler toggler-danger"><input type="checkbox"><i class="fa fa-heart"></i></label>
								</div>
								<div class="jb_types contract">Contract</div>
								<div class="jb_grid_01_thumb">
									<a href="employer-detail.html"><img src="../assets/img/tile_setter.png" class="img-fluid" alt=""></a>
								</div>
								<div class="jb_grid_01_caption">
									<h4 class="_jb_title"><a href="job-detail.html">Tile Setter</a></h4>
									<!-- <div class="_emp_jb">Shai Web Infotech</div> -->
								</div>
								<div class="jb_grid_01_footer">
									<a href="job-detail.html" class="_jb_apply">View Job</a>
								</div>
							</div>
						</div>
						
						<!-- Single Item -->
						<div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
							<div class="job_grid_02">
								<img src="../assets/img/job-featured.png" class="_featured_jbs" alt="">
								<div class="jobs-like">
									<label class="toggler toggler-danger"><input type="checkbox"><i class="fa fa-heart"></i></label>
								</div>
								<div class="jb_types parttime">Part Time</div>
								<div class="jb_grid_01_thumb">
									<a href="employer-detail.html"><img src="../assets/img/carpet.png" class="img-fluid" alt=""></a>
								</div>
								<div class="jb_grid_01_caption">
									<h4 class="_jb_title"><a href="job-detail.html">Carpet Setter</a></h4>
									<!-- <div class="_emp_jb">Hello Inductries</div> -->
								</div>
								<div class="jb_grid_01_footer">
									<a href="job-detail.html" class="_jb_apply">View Job</a>
								</div>
							</div>
						</div>
						
					</div>
					
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12">
							<div class="mt-3 text-center">
								<a href="#" class="_browse_more-2 light">Browse More Jobs</a>
							</div>
						</div>
					</div>
					
				</div>
			</section>
			<!-- ============================ Newest Designs End ==================================== -->
			
			<!-- ============================ Category Section Start ==================================== -->
			<section class="gray-light">
				<div class="container">
				
					<div class="row justify-content-center">
						<div class="col-lg-7 col-md-9">
							<div class="sec-heading">
								<h2>Popular Jobs <span class="theme-cl-2">Category</span></h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							</div>
						</div>
					</div>
					
					<div class="row justify-content-center">
										
						<!-- Single Category -->
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="urip_cated shadow">
								<div class="urip_cated_avater">
									<i class="ti-bar-chart"></i>
								</div>
								<div class="urip_cated_caps">
									<h3 class="cats_urip_title"><a href="#">Accounting & Finance</a></h3>
									<span>310 Jobs Found</span>
								</div>
							</div>
						</div>
						
						<!-- Single Category -->
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="urip_cated shadow">
								<div class="urip_cated_avater">
									<i class="ti-palette"></i>
								</div>
								<div class="urip_cated_caps">
									<h3 class="cats_urip_title"><a href="#">Art & Design</a></h3>
									<span>200 Jobs Found</span>
								</div>
							</div>
						</div>
						
						<!-- Single Category -->
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="urip_cated shadow">
								<div class="urip_cated_avater">
									<i class="ti-car"></i>
								</div>
								<div class="urip_cated_caps">
									<h3 class="cats_urip_title"><a href="#">Transportation</a></h3>
									<span>100k Jobs Found</span>
								</div>
							</div>
						</div>
						
						<!-- Single Category -->
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="urip_cated shadow">
								<div class="urip_cated_avater">
									<i class="ti-home"></i>
								</div>
								<div class="urip_cated_caps">
									<h3 class="cats_urip_title"><a href="#">Telecommunications</a></h3>
									<span>507 Jobs Found</span>
								</div>
							</div>
						</div>
						
						<!-- Single Category -->
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="urip_cated shadow">
								<div class="urip_cated_avater">
									<i class="ti-desktop"></i>
								</div>
								<div class="urip_cated_caps">
									<h3 class="cats_urip_title"><a href="#">Designing & Multimedia</a></h3>
									<span>10k Jobs Found</span>
								</div>
							</div>
						</div>
						
						<!-- Single Category -->
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="urip_cated shadow">
								<div class="urip_cated_avater">
									<i class="ti-brush-alt"></i>
								</div>
								<div class="urip_cated_caps">
									<h3 class="cats_urip_title"><a href="#">Education Training</a></h3>
									<span>102 Jobs Found</span>
								</div>
							</div>
						</div>
						
						<!-- Single Category -->
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="urip_cated shadow">
								<div class="urip_cated_avater">
									<i class="ti-car"></i>
								</div>
								<div class="urip_cated_caps">
									<h3 class="cats_urip_title"><a href="#">Automotive Jobs</a></h3>
									<span>45 Jobs Found</span>
								</div>
							</div>
						</div>
						<!-- Single Category -->
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="urip_cated shadow">
								<div class="urip_cated_avater">
									<i class="ti-bar-chart-alt"></i>
								</div>
								<div class="urip_cated_caps">
									<h3 class="cats_urip_title"><a href="#">Banking Jobs</a></h3>
									<span>32 Jobs Found</span>
								</div>
							</div>
						</div>
								
					</div>
				</div>
			</section>
			<!-- ============================ Category Section End ==================================== -->
			
			<!-- ============================ Candidates Section Start ==================================== -->
			<section class="min-sec">
				<div class="container">
				
					<div class="row justify-content-center">
						<div class="col-lg-7 col-md-9">
							<div class="sec-heading">
								<h2>High Qualified <span class="theme-cl-2">Candidates</span></h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							</div>
						</div>
					</div>
					
					<div class="row justify-content-center">
								
						<!-- Single Item -->
						<div class="col-lg-4 col-md-6 col-sm-12">
							<div class="_freelacers_120 large">
								<div class="jobs-like"><label class="toggler toggler-danger"><input type="checkbox"><i class="fa fa-heart"></i></label></div>
								<div class="_freelacers_120_thumb">
									<img src="../assets/img/verify.svg" class="verified" width="15" alt="">
									<a href="freelancer-detail.html"><img src="../assets/img/team-1.jpg" class="img-fluid circle" alt=""></a>
								</div>
								<div class="_freelacers_120_caption">
									<div class="_freelan_laft"><i class="ti-location-pin mr-1"></i>Allahabad, UP</div>
									<h4><a href="freelancer-detail.html">Tiffany H. Mueller</a></h4>
									<span class="_freel_spec">Sr, Java Developer</span>
								</div>
								<div class="_freelacers_120_body">
									<div class="_free0o9">
										<ul>
											<li><span>HTML5</span></li>
											<li><span>CSS3</span></li>
											<li><span>PHP</span></li>
											<li><span>Bootstrap</span></li>
											<li><span>JavaScript</span></li>
											<li><span>3 More</span></li>
										</ul>
									</div>
									<div class="_freelacers_121_foot">
										<a href="freelancer-detail.html" class="btn btn-theme blue light">View Profile</a>	
									</div>
								</div>
							</div>
						</div>
						
						<!-- Single Item -->
						<div class="col-lg-4 col-md-6 col-sm-12">
							<div class="_freelacers_120 large">
								<div class="jobs-like"><label class="toggler toggler-danger"><input type="checkbox"><i class="fa fa-heart"></i></label></div>
								<div class="_freelacers_120_thumb">
									<img src="../assets/img/verify.svg" class="verified" width="15" alt="">
									<a href="freelancer-detail.html"><img src="../assets/img/author.png" class="img-fluid circle" alt=""></a>
								</div>
								<div class="_freelacers_120_caption">
									<div class="_freelan_laft"><i class="ti-location-pin mr-1"></i>Lucknow, UP</div>
									<h4><a href="freelancer-detail.html">Doris A. Christiansen</a></h4>
									<span class="_freel_spec">Apps Developer</span>
								</div>
								<div class="_freelacers_120_body">
									<div class="_free0o9">
										<ul>
											<li><span>HTML5</span></li>
											<li><span>CSS3</span></li>
											<li><span>PHP</span></li>
											<li><span>Bootstrap</span></li>
											<li><span>JavaScript</span></li>
											<li><span>3 More</span></li>
										</ul>
									</div>
									<div class="_freelacers_121_foot">
										<a href="freelancer-detail.html" class="btn btn-theme blue light">View Profile</a>	
									</div>
								</div>
							</div>
						</div>
						
						<!-- Single Item -->
						<div class="col-lg-4 col-md-6 col-sm-12">
							<div class="_freelacers_120 large">
								<div class="jobs-like"><label class="toggler toggler-danger"><input type="checkbox"><i class="fa fa-heart"></i></label></div>
								<div class="_freelacers_120_thumb">
									<img src="../assets/img/verify.svg" class="verified" width="15" alt="">
									<a href="freelancer-detail.html"><img src="../assets/img/team-2.jpg" class="img-fluid circle" alt=""></a>
								</div>
								<div class="_freelacers_120_caption">
									<div class="_freelan_laft"><i class="ti-location-pin mr-1"></i>London, UK</div>
									<h4><a href="freelancer-detail.html">Catherine K. Gordon</a></h4>
									<span class="_freel_spec">Joomla Developer</span>
								</div>
								<div class="_freelacers_120_body">
									<div class="_free0o9">
										<ul>
											<li><span>HTML5</span></li>
											<li><span>CSS3</span></li>
											<li><span>PHP</span></li>
											<li><span>Bootstrap</span></li>
											<li><span>JavaScript</span></li>
											<li><span>3 More</span></li>
										</ul>
									</div>
									<div class="_freelacers_121_foot">
										<a href="freelancer-detail.html" class="btn btn-theme blue light">View Profile</a>	
									</div>
								</div>
							</div>
						</div>
						
						<!-- Single Item -->
						<div class="col-lg-4 col-md-6 col-sm-12">
							<div class="_freelacers_120 large">
								<div class="jobs-like"><label class="toggler toggler-danger"><input type="checkbox"><i class="fa fa-heart"></i></label></div>
								<div class="_freelacers_120_thumb">
									<img src="../assets/img/verify.svg" class="verified" width="15" alt="">
									<a href="freelancer-detail.html"><img src="../assets/img/team-3.jpg" class="img-fluid circle" alt=""></a>
								</div>
								<div class="_freelacers_120_caption">
									<div class="_freelan_laft"><i class="ti-location-pin mr-1"></i>Montral, Canada</div>
									<h4><a href="freelancer-detail.html">Charles P. Daniels</a></h4>
									<span class="_freel_spec">Magento Developer</span>
								</div>
								<div class="_freelacers_120_body">
									<div class="_free0o9">
										<ul>
											<li><span>HTML5</span></li>
											<li><span>CSS3</span></li>
											<li><span>PHP</span></li>
											<li><span>Bootstrap</span></li>
											<li><span>JavaScript</span></li>
											<li><span>3 More</span></li>
										</ul>
									</div>
									<div class="_freelacers_121_foot">
										<a href="freelancer-detail.html" class="btn btn-theme blue light">View Profile</a>	
									</div>
								</div>
							</div>
						</div>
						
						<!-- Single Item -->
						<div class="col-lg-4 col-md-6 col-sm-12">
							<div class="_freelacers_120 large">
								<div class="jobs-like"><label class="toggler toggler-danger"><input type="checkbox"><i class="fa fa-heart"></i></label></div>
								<div class="_freelacers_120_thumb">
									<img src="../assets/img/verify.svg" class="verified" width="15" alt="">
									<a href="freelancer-detail.html"><img src="../assets/img/team-4.jpg" class="img-fluid circle" alt=""></a>
								</div>
								<div class="_freelacers_120_caption">
									<div class="_freelan_laft"><i class="ti-location-pin mr-1"></i>Canada, USA</div>
									<h4><a href="freelancer-detail.html">Manuel T. Snider</a></h4>
									<span class="_freel_spec">PHP Developer</span>
								</div>
								<div class="_freelacers_120_body">
									<div class="_free0o9">
										<ul>
											<li><span>HTML5</span></li>
											<li><span>CSS3</span></li>
											<li><span>PHP</span></li>
											<li><span>Bootstrap</span></li>
											<li><span>JavaScript</span></li>
											<li><span>3 More</span></li>
										</ul>
									</div>
									<div class="_freelacers_121_foot">
										<a href="freelancer-detail.html" class="btn btn-theme blue light">View Profile</a>	
									</div>
								</div>
							</div>
						</div>
						
						<!-- Single Item -->
						<div class="col-lg-4 col-md-6 col-sm-12">
							<div class="_freelacers_120 large">
								<div class="jobs-like"><label class="toggler toggler-danger"><input type="checkbox"><i class="fa fa-heart"></i></label></div>
								<div class="_freelacers_120_thumb">
									<img src="../assets/img/verify.svg" class="verified" width="15" alt="">
									<a href="freelancer-detail.html"><img src="../assets/img/team-5.jpg" class="img-fluid circle" alt=""></a>
								</div>
								<div class="_freelacers_120_caption">
									<div class="_freelan_laft"><i class="ti-location-pin mr-1"></i>Liverpool, UK</div>
									<h4><a href="freelancer-detail.html">Shrenivashan Yadav</a></h4>
									<span class="_freel_spec">UI/UX Specialist</span>
								</div>
								<div class="_freelacers_120_body">
									<div class="_free0o9">
										<ul>
											<li><span>HTML5</span></li>
											<li><span>CSS3</span></li>
											<li><span>PHP</span></li>
											<li><span>Bootstrap</span></li>
											<li><span>JavaScript</span></li>
											<li><span>3 More</span></li>
										</ul>
									</div>
									<div class="_freelacers_121_foot">
										<a href="freelancer-detail.html" class="btn btn-theme blue light">View Profile</a>	
									</div>
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</section>
			<!-- ============================ Candidates Section End ==================================== -->
			
			<!-- ============================ Featured Themes Start ==================================== -->
			<section class="gray-light">
				<div class="container">
				
					<div class="row justify-content-center">
						<div class="col-lg-7 col-md-9">
							<div class="sec-heading">
								<h2>What People <span class="theme-cl-2">Saying</span></h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="col-lg-12 col-md-12">
							<div class="owl-carousel owl-theme middle-arrow-hover" id="reviews-slide">
							
								<!-- Single Review -->
								<div class="item testimonial-center">
									<div class="smart-tes-author">
										<div class="st-author-box">
											<div class="st-author-thumb">
												<img src="../assets/img/team-1.jpg" class="img-fluid" alt="" />
											</div>
											<div class="st-author-info">
												<h4 class="st-author-title">Adam Williams</h4>
												<span class="st-author-subtitle theme-cl">CEO Of Microwoft</span>
											</div>
										</div>
									</div>
									<div class="smart-tes-content">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et.</p>
									</div>
								</div>
								
								<!-- Single Review -->
								<div class="item testimonial-center">
									<div class="smart-tes-author">
										<div class="st-author-box">
											<div class="st-author-thumb">
												<img src="../assets/img/team-2.jpg" class="img-fluid" alt="" />
											</div>
											<div class="st-author-info">
												<h4 class="st-author-title">Lilly Wikdoner</h4>
												<span class="st-author-subtitle theme-cl">Content Writer</span>
											</div>
										</div>
									</div>
									<div class="smart-tes-content">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et.</p>
									</div>
								</div>
								
								<!-- Single Review -->
								<div class="item testimonial-center">
									<div class="smart-tes-author">
										<div class="st-author-box">
											<div class="st-author-thumb">
												<img src="../assets/img/team-3.jpg" class="img-fluid" alt="" />
											</div>
											<div class="st-author-info">
												<h4 class="st-author-title">Shaurya Williams</h4>
												<span class="st-author-subtitle theme-cl">Manager Of Doodle</span>
											</div>
										</div>
									</div>
									<div class="smart-tes-content">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et.</p>
									</div>
								</div>
								
								<!-- Single Review -->
								<div class="item testimonial-center">
									<div class="smart-tes-author">
										<div class="st-author-box">
											<div class="st-author-thumb">
												<img src="../assets/img/team-4.jpg" class="img-fluid" alt="" />
											</div>
											<div class="st-author-info">
												<h4 class="st-author-title">Shrithi Setthi</h4>
												<span class="st-author-subtitle theme-cl">CEO Of Applio</span>
											</div>
										</div>
									</div>
									<div class="smart-tes-content">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et.</p>
									</div>
								</div>
								
							</div>
						</div>
					</div>
					
				</div>
			</section>
			<!-- ============================ Featured Themes End ==================================== -->
			
			<!-- ============================ News Updates Start ==================================== -->
			<section class="min-sec">
				<div class="container">
				
					<div class="row justify-content-center">
						<div class="col-lg-7 col-md-9">
							<div class="sec-heading">
								<h2>Latest Updates & News</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							</div>
						</div>
					</div>
					
					<div class="row">
						
						<!-- Single blog Grid -->
						<div class="col-lg-4 col-md-4 col-sm-12">
							<div class="blog-wrap-grid">
								
								<div class="blog-thumb">
									<a href="blog-detail.html"><img src="../assets/img/b-1.jpg" class="img-fluid" alt=""></a>
								</div>
								
								<div class="blog-info">
									<span class="post-date">By Shilpa Sheri</span>
								</div>
								
								<div class="blog-body">
									<h4 class="bl-title"><a href="blog-detail.html">Why people choose listio for own properties</a></h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore. </p>
								</div>
								
								<div class="blog-cates">
									<ul>
										<li><a href="#" class="blog-cates-list style-4">Health</a></li>
										<li><a href="#" class="blog-cates-list style-3">Business</a></li>
									</ul>
								</div>
								
							</div>
						</div>
						
						<!-- Single blog Grid -->
						<div class="col-lg-4 col-md-4 col-sm-12">
							<div class="blog-wrap-grid">
								
								<div class="blog-thumb">
									<a href="blog-detail.html"><img src="../assets/img/b-2.jpg" class="img-fluid" alt=""></a>
								</div>
								
								<div class="blog-info">
									<span class="post-date">By Shaurya</span>
								</div>
								
								<div class="blog-body">
									<h4 class="bl-title"><a href="blog-detail.html">List of benifits and impressive listeo services</a></h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore. </p>
								</div>
								
								<div class="blog-cates">
									<ul>
										<li><a href="#" class="blog-cates-list style-1">Banking</a></li>
										<li><a href="#" class="blog-cates-list style-5">Stylish</a></li>
									</ul>
								</div>
								
							</div>
						</div>
						
						<!-- Single blog Grid -->
						<div class="col-lg-4 col-md-4 col-sm-12">
							<div class="blog-wrap-grid">
								
								<div class="blog-thumb">
									<a href="blog-detail.html"><img src="../assets/img/b-3.jpg" class="img-fluid" alt=""></a>
								</div>
								
								<div class="blog-info">
									<span class="post-date">By Admin K.</span>
								</div>
								
								<div class="blog-body">
									<h4 class="bl-title"><a href="blog-detail.html">What people says about listio properties</a></h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore. </p>
								</div>
								
								<div class="blog-cates">
									<ul>
										<li><a href="#" class="blog-cates-list style-1">Fashion</a></li>
										<li><a href="#" class="blog-cates-list style-2">Wedding</a></li>
									</ul>
								</div>
								
							</div>
						</div>
						
					</div>
					
				</div>
			</section>
			<!-- ============================ News Updates End ==================================== -->
			
            @include('frontend.layouts.footer')

		
			
			<!-- Log In Modal -->
			<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="registermodal" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered login-pop-form" role="document">
					<div class="modal-content" id="registermodal">
						<div class="modal-header">
							<h4>Sign In</h4>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="ti-close"></i></span></button>
						</div>
						<div class="modal-body">
							
							<div class="login-form">
								<form>
								
									<div class="form-group">
										<label>User Name</label>
										<input type="text" class="form-control" placeholder="Username">
									</div>
									
									<div class="form-group">
										<label>Password</label>
										<input type="password" class="form-control" placeholder="*******">
									</div>
									
									<div class="form-group">
										<button type="submit" class="btn dark-2 btn-md full-width pop-login">Login</button>
									</div>
								
								</form>
							</div>
							
							<div class="form-group text-center">
								<span>Or Signin with</span>
							</div>
							
							<div class="social_logs mb-4">
								<ul class="shares_jobs text-center">
									<li><a href="#" class="share fb"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#" class="share gp"><i class="fa fa-google"></i></a></li>
									<li><a href="#" class="share ln"><i class="fa fa-linkedin"></i></a></li>
								</ul>
							</div>
							
						</div>
						<div class="modal-footer">
							<div class="mf-link"><i class="ti-user"></i>Haven't An Account?<a href="javascript:void(0)" class="theme-cl"> Sign Up</a></div>
							<div class="mf-forget"><a href="#"><i class="ti-help"></i>Forget Password</a></div>
						</div>
					</div>
				</div>
			</div>
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
        		<!-- ============================================================== -->
		<!-- All Jquery -->
		<!-- ============================================================== -->
		<script src="{{ asset('frontend/assets/js/jquery.min.js')}}"></script>
		<script src="{{ asset('frontend/assets/js/popper.min.js')}}"></script>
		<script src="{{ asset('frontend/assets/js/bootstrap.min.js')}}"></script>
		<script src="{{ asset('frontend/assets/js/select2.min.js')}}"></script>
		<script src="{{ asset('frontend/assets/js/owl.carousel.min.js')}}"></script>
		<script src="{{ asset('frontend/assets/js/ion.rangeSlider.min.js')}}"></script>
		<script src="{{ asset('frontend/assets/js/counterup.min.js')}}"></script>
		<script src="{{ asset('frontend/assets/js/materialize.min.js')}}"></script>
		<script src="{{ asset('frontend/assets/js/metisMenu.min.js')}}"></script>
		<script src="{{ asset('frontend/assets/js/custom.js')}}"></script>
		<!-- ============================================================== -->
		<!-- This page plugins -->
		<!-- ============================================================== -->
		
	</body>

</html>
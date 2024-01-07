@extends('frontend.layouts.master')
@section('content')
    <!-- ============================ Hero Banner  Start================================== -->
    <div class="hero-banner full jumbo-banner" style="background:#f4f9fd url(assets/img/bg2.png);">
        <div class="container">
            <div class="row align-items-center">


                @livewire('home.jobs.create-form')
                {{-- @livewire('Livewire.Home.Jobs.CreateForm') --}}
                {{-- <div class="col-lg-8 col-md-8">
						<form class="row">
							<div class="col-lg-12 mt-2">


								<p class="lead">Choose From More Than 10 thousand Freelancer on the Go</p>

							</div>
							<div class="col-lg-6 col-md-12">
								<div class="form-group">
									<label>Job Title</label>
									<input type="text" class="form-control with-light" placeholder="Job Title" />
								</div>
							</div>

							<div class="col-lg-6 col-md-12">
								<div class="form-group">
									<label>Skills Required To Job</label>
									<input type="text" class="form-control with-light"
										placeholder="plumber, carpenter" />
								</div>
							</div>

							<div class="col-lg-6 col-md-12">
								<div class="form-group">
									<label>Estimated Time</label>
									<input type="text" class="form-control with-light" placeholder="In days" />
								</div>
							</div>

							<div class="col-lg-6 col-md-12">
								<div class="form-group">
									<label>Pay Rate</label>
									<input type="text" class="form-control with-light" placeholder="+91 256 584 7863" />
								</div>
							</div>

							<div class="col-lg-12 col-md-12">
								<div class="form-group">
									<label>Job Description</label>
									<textarea class="form-control with-light">About Your Query</textarea>
								</div>
							</div>

							<!-- <div class="col-lg-12 col-md-12">
									<div class="form-group">
										<div class="custom-file">
											<input type="file" class="custom-file-input" id="upfile">
											<label class="custom-file-label" for="upfile">Upload file</label>
										</div>
									</div>
								</div> -->

							<div class="col-lg-12 col-md-12">
								<div class="form-group">
									<button type="button" class="btn dark-3">Publish Job</button>
								</div>
							</div>

						</form>
					</div> --}}


                <div class="col-lg-4 col-md-4">
                    <img src="{{ asset('frontend/assets/img/a-2.png') }}" alt="latest property" class="img-fluid">
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
                        <h2>Top Featured <span class="theme-cl-2">Services</span></h2>
                        <p>Here are some top featured Services.</p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">

                <!-- Single Item -->
                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                    <div class="job_grid_02">
                        <img src="{{ asset('frontend/assets/img/job-featured.png') }}" class="_featured_jbs" alt="">
                        <div class="jobs-like">
                            <label class="toggler toggler-danger"><input type="checkbox"><i class="fa fa-heart"></i></label>
                        </div>
                        <div class="jb_types fulltime">Full Time</div>
                        <div class="jb_grid_01_thumb">
                            <a href="../pages/freelancer/job-detail.html"><img
                                    src="{{ asset('frontend/assets/img/carpenter.png') }}" class="img-fluid"
                                    alt=""></a>
                        </div>
                        <div class="jb_grid_01_caption">
                            <h4 class="_jb_title"><a href="./search-candidates.html">Carpenter</a></h4>
                            <!-- <div class="_emp_jb">A.K Infra &amp; Reality Developers Pvt. Ltd.</div> -->
                        </div>
                        <div class="jb_grid_01_footer">
                            <a href="./search-candidates.html" class="_jb_apply">View Candidates</a>
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
                            <a href="employer-detail.html"><img src="{{ asset('frontend/assets/img/plumber.png') }}"
                                    class="img-fluid" alt=""></a>
                        </div>
                        <div class="jb_grid_01_caption">
                            <h4 class="_jb_title"><a href="./search-candidates.html">Plumber</a></h4>
                            <!-- <div class="_emp_jb">A.K Infra Developers</div> -->
                        </div>
                        <div class="jb_grid_01_footer">
                            <a href="./search-candidates.html" class="_jb_apply">View Candidates</a>
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
                            <a href="employer-detail.html"><img src="{{ asset('frontend/assets/img/electrician.png') }}"
                                    class="img-fluid" alt=""></a>
                        </div>
                        <div class="jb_grid_01_caption">
                            <h4 class="_jb_title"><a href="./search-candidates.html">Electrician</a></h4>
                            <!-- <div class="_emp_jb">A.K. Infra Technology</div> -->
                        </div>
                        <div class="jb_grid_01_footer">
                            <a href="./search-candidates.html" class="_jb_apply">View Candidates</a>
                        </div>
                    </div>
                </div>

                <!-- Single Item -->
                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                    <div class="job_grid_02">
                        <img src="{{ asset('frontend/assets/img/job-featured.png') }}" class="_featured_jbs" alt="">
                        <div class="jobs-like">
                            <label class="toggler toggler-danger"><input type="checkbox"><i class="fa fa-heart"></i></label>
                        </div>
                        <div class="jb_types fulltime">Full Time</div>
                        <div class="jb_grid_01_thumb">
                            <a href="employer-detail.html"><img src="{{ asset('frontend/assets/img/int_desinger.png') }}"
                                    class="img-fluid" alt=""></a>
                        </div>
                        <div class="jb_grid_01_caption">
                            <h4 class="_jb_title"><a href="./search-candidates.html">Interior Designer</a></h4>
                            <!-- <div class="_emp_jb">Waft Technologies</div> -->
                        </div>
                        <div class="jb_grid_01_footer">
                            <a href="./search-candidates.html" class="_jb_apply">View Candidates</a>
                        </div>
                    </div>
                </div>

                <!-- Single Item -->
                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                    <div class="job_grid_02">
                        <div class="jobs-like">
                            <label class="toggler toggler-danger"><input type="checkbox"><i
                                    class="fa fa-heart"></i></label>
                        </div>
                        <div class="jb_types contract">Contract</div>
                        <div class="jb_grid_01_thumb">
                            <a href="employer-detail.html"><img src="{{ asset('frontend/assets/img/plasterer.png') }}"
                                    class="img-fluid" alt=""></a>
                        </div>
                        <div class="jb_grid_01_caption">
                            <h4 class="_jb_title"><a href="./search-candidates.html">Plasterer</a></h4>
                            <!-- <div class="_emp_jb">Themezhub Infotech</div> -->
                        </div>
                        <div class="jb_grid_01_footer">
                            <a href="./search-candidates.html" class="_jb_apply">View Candidates</a>
                        </div>
                    </div>
                </div>

                <!-- Single Item -->
                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                    <div class="job_grid_02">
                        <div class="jobs-like">
                            <label class="toggler toggler-danger"><input type="checkbox"><i
                                    class="fa fa-heart"></i></label>
                        </div>
                        <div class="jb_types contract">Contract</div>
                        <div class="jb_grid_01_thumb">
                            <a href="employer-detail.html"><img src="{{ asset('frontend/assets/img/painter.jpg') }}"
                                    class="img-fluid" alt=""></a>
                        </div>
                        <div class="jb_grid_01_caption">
                            <h4 class="_jb_title"><a href="./search-candidates.html">Painter</a></h4>
                            <!-- <div class="_emp_jb">Simran Web Soft</div> -->
                        </div>
                        <div class="jb_grid_01_footer">
                            <a href="./search-candidates.html" class="_jb_apply">View Candidates</a>
                        </div>
                    </div>
                </div>

                <!-- Single Item -->
                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                    <div class="job_grid_02">
                        <div class="jobs-like">
                            <label class="toggler toggler-danger"><input type="checkbox"><i
                                    class="fa fa-heart"></i></label>
                        </div>
                        <div class="jb_types contract">Contract</div>
                        <div class="jb_grid_01_thumb">
                            <a href="employer-detail.html"><img src="{{ asset('frontend/assets/img/tile_setter.png') }}"
                                    class="img-fluid" alt=""></a>
                        </div>
                        <div class="jb_grid_01_caption">
                            <h4 class="_jb_title"><a href="./search-candidates.html">Tile Setter</a></h4>
                            <!-- <div class="_emp_jb">Shai Web Infotech</div> -->
                        </div>
                        <div class="jb_grid_01_footer">
                            <a href="./search-candidates.html" class="_jb_apply">View Candidates</a>
                        </div>
                    </div>
                </div>

                <!-- Single Item -->
                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                    <div class="job_grid_02">
                        <img src="{{ asset('frontend/assets/img/job-featured.png') }}" class="_featured_jbs"
                            alt="">
                        <div class="jobs-like">
                            <label class="toggler toggler-danger"><input type="checkbox"><i
                                    class="fa fa-heart"></i></label>
                        </div>
                        <div class="jb_types parttime">Part Time</div>
                        <div class="jb_grid_01_thumb">
                            <a href="employer-detail.html"><img src="{{ asset('frontend/assets/img/carpet.png') }}"
                                    class="img-fluid" alt=""></a>
                        </div>
                        <div class="jb_grid_01_caption">
                            <h4 class="_jb_title"><a href="./search-candidates.html">Carpet Setter</a></h4>
                            <!-- <div class="_emp_jb">Hello Inductries</div> -->
                        </div>
                        <div class="jb_grid_01_footer">
                            <a href="./search-candidates.html" class="_jb_apply">View Candidates</a>
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
@endsection

@section('scripts')
    <script>
      
        document.addEventListener('livewire:init', function() {
            Livewire.on('success', function() {
                $('#kt_modal_add_user').modal('hide');
                $('#kt_modal_upload').modal('hide');
                window.LaravelDataTables['monitors-table'].ajax.reload();
            });

            Livewire.on('login_first', function() {

            })
        });
    </script>
@endsection

@extends('frontend.layouts.master')
@section('content')
       <!-- ============================ Hero Banner  Start================================== -->
       <div class="hero-banner full jumbo-banner" style="background:#f4f9fd url(assets/img/bg2.png);">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-7 col-md-8">
                  
                 

                    <form id="candidateForm" class="row" action="{{ route('candidates-store') }}">
                        <div class="col-12">
                            <h2>Candidates Information</h2>
                            <span>Fill the form below to create new candidates</span>
                        </div>

                        <div class="col-lg-6 col-md-12">
                            <div class="form-group">
                                <label>First Name</label>
                                <input type="text" class="form-control with-light"
                                    placeholder="First name" />
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group">
                                <label>Last Name</label>
                                <input type="text" class="form-control with-light"
                                    placeholder="Last Name" />
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group">
                                <label>Email Address</label>
                                <input type="email" class="form-control with-light"
                                    placeholder="yourname@email.com" />
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group">
                                <label>Contact</label>
                                <input type="text" class="form-control with-light"
                                    placeholder="Contact number" />
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control with-light"
                                    placeholder="password" />
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group">
                                <label>Confirm Password</label>
                                <input type="password" class="form-control with-light"
                                    placeholder="repeat password" />
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group">
                                <label>Skills</label>
                                <select class="form-control" name="employmentType">
                                    <option value="select">Select</option>
                                    <option value="fullTime">Full Time</option>
                                    <option value="partTime">Part Time</option>
                                    <option value="contract">Contract</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-12">
                            <div class="form-group">
                                <label>Wage Rate</label>
                                <input type="text" class="form-control with-light"
                                    placeholder="Rs1234/hr" />
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="upfile">
                                    <label class="custom-file-label" for="upfile">Upload file</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <button type="button" class="btn dark-3">Create account</button>
                            </div>
                        </div>
                    </form>

                </div>

                <div class="col-lg-5 col-md-4">
                    <img src="{{ asset('frontend/assets/img/a-2.png') }}" alt="latest property" class="img-fluid">
                </div>

            </div>
        </div>
    </div>
    <!-- ============================ Hero Banner End ================================== -->
@endsection
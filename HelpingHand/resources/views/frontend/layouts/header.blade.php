<div class="header header-transparent dark-text">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <nav id="navigation" class="navigation navigation-landscape">
                    <div class="nav-header">
                        <a class="nav-brand" href="#">
                            <img src="{{ asset('frontend/assets/img/logo_black.png') }}" class="logo" alt="" />
                        </a>
                        <div class="nav-toggle"></div>
                    </div>
                    <div class="nav-menus-wrapper">
                        <ul class="nav-menu">
                        
                            <li class="active"><a href="#">Home<span class="submenu-indicator"></span></a>
                            </li>
                            
                            <li><a href="#" >Explore<span class="submenu-indicator"></span></a>
                                <ul class="nav-dropdown">
                        
                                    <li><a href="#">Sign In Freelancers</span></a>
                                        {{-- <ul class="nav-dropdown nav-submenu">
                                            <li><a href="#">Search Freelancers</a></li>                                    
                                        </ul> --}}
                                    </li>
                                    
                                    <li><a href="#">Employers<span class="submenu-indicator"></span></a>
                                        <ul class="nav-dropdown nav-submenu">
                                            <li><a href="#">Search Employers</a></li>                                    
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

@extends('layout.landing_main')
@section('content_web')
   <!-- Banner Section -->
   <section class="page-banner">
            <div class="image-layer" style="background-image:url(/web/images/custom/Servicesheader.jpg);"></div>
            <div class="shape-1"></div>
            <div class="shape-2"></div>
            <div class="banner-inner">
                <div class="auto-container">
                    <div class="inner-container clearfix">
                        <h1 style="font-weight: 400;">WE SHAPE THE PERFECT SOLUTIONS</h1>
                        <div class="page-nav">
                            <ul class="bread-crumb clearfix">
                                <li><a href="/">Home</a></li>
                                <li class="active">Services</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Banner Section -->


        <!--Services Section-->
        <section class="services-section">
            <div class="auto-container">
                <div class="row clearfix">
                    <!--Title Block-->
                   <!--  <div class="title-block col-xl-6 col-lg-12 col-md-12 col-sm-12">
                        <div class="inner">
                            <div class="sec-title">
                                <h2>We Shape the Perfect <br>Solutions<span class="dot">.</span></h2>
                                <div class="lower-text">End to end Digital and IT solutions for business transformation.</div>
                            </div>
                        </div>
                    </div> -->
                    <!--Service Block-->
                    <div class="service-block col-xl-4 col-lg-6 col-md-6 col-sm-12">
                    <a href="{{route('web_dev')}}"> 
                        <div class="inner-box">
                            <div class="bottom-curve"></div>
                            <div class="icon-box"><span><img src="{{ url('/') }}/web/images/custom/service/Webdevelopment.png" style="height: 64px;width: 64px;" ></span></div>
                            <h6><a href="{{route('web_dev')}}">Enterprise <br>Web Development</a></h6>
                        </div>
                      </a>
                    </div>
                    <!--Service Block-->
                    <div class="service-block col-xl-4 col-lg-6 col-md-6 col-sm-12">
                       <a href="{{route('mobile_app_development')}}">
                            <div class="inner-box">
                                <div class="bottom-curve"></div>
                                <div class="icon-box"><span><img src="{{ url('/') }}/web/images/custom/service/MobileApp.png" style="height: 64px;width: 64px;" ></span></div>
                                <h6><a href="{{route('mobile_app_development')}}">Mobile App <br>Development</a></h6>
                            </div>
                        </a>   
                    </div>
                    <!--Service Block-->
                    <div class="service-block col-xl-4 col-lg-6 col-md-6 col-sm-12">
                        <a href="{{route('digital_transmition')}}"> 
                            <div class="inner-box">
                                <div class="bottom-curve"></div>
                                <div class="icon-box"><span><img src="{{ url('/') }}/web/images/custom/service/DigitalTransformation.png" style="height: 64px;width: 64px;" ></span></div>
                                <h6><a href="{{route('digital_transmition')}}">digital <br>Transformation</a></h6>
                            </div>
                        </a>       
                    </div>
                    <!--Service Block-->
                    <div class="service-block col-xl-4 col-lg-6 col-md-6 col-sm-12">
                        <a href="{{route('qa')}}">
                            <div class="inner-box">
                                <div class="bottom-curve"></div>
                                <div class="icon-box"><span><img src="{{ url('/') }}/web/images/custom/service/QualityAssurance.png" style="height: 64px;width: 64px;" ></span></div>
                                <h6><a href="{{route('qa')}}">Quality Assurance<br> and Automation </a></h6>
                            </div>
                        </a>    
                    </div>
                    <!--Service Block-->
                    <div class="service-block col-xl-4 col-lg-6 col-md-6 col-sm-12">
                      <a href="{{route('managed_services')}}">
                        <div class="inner-box">
                            <div class="bottom-curve"></div>
                            <div class="icon-box"><span><img src="{{ url('/') }}/web/images/custom/service/managedService.png" style="height: 64px;width: 64px;" ></span></div>
                            <h6><a href="{{route('managed_services')}}">Managed <br>Service</a></h6>
                        </div>
                        </a>   
                    </div>
                    <!--Service Block-->
                    <div class="service-block col-xl-4 col-lg-6 col-md-6 col-sm-12">
                    <a href="{{route('telecom_services')}}">
                        <div class="inner-box">
                            <div class="bottom-curve"></div>
                            <div class="icon-box"><span><img src="{{ url('/') }}/web/images/custom/service/TelecomService.png" style="height: 64px;width: 64px;" ></span></div>
                            <h6><a href="{{route('telecom_services')}}">Telecom <br>Services</a></h6>
                        </div>
                    </a> 
                    </div>
                </div>
            </div>
        </section>

        <!-- We Work Section -->
        <section class="we-work-section">
            <div class="auto-container">
                <div class="sec-title centered">
                    <h2>Our Technological Capabilities<span class="dot"></span></h2>
                </div>
                <!--Work Tabs-->
                <div class="work-tabs tabs-box">

                    <!--Tab Btns-->
                    <ul class="tab-btns tab-buttons clearfix">
                        <li data-tab="#tab-1" class="tab-btn active-btn"><span>Mobile </span></li>
                        <li data-tab="#tab-2" class="tab-btn"><span>Front End </span></li>
                        <li data-tab="#tab-3" class="tab-btn"><span>Back End</span></li>
                        <li data-tab="#tab-4" class="tab-btn"><span>Framework</span></li>
                      
                    </ul>

                    
                    <!--Tabs Container-->
                    <div class="tabs-content text-center">

                        <!--Tab-->
                        <div class="tab active-tab" id="tab-1">
                            <div class="row clearfix">
                                
                                <div class="text-col col-lg-12 col-md-12 col-sm-12">
                                    <img src="{{ url('/') }}/web/images/custom/technology/apple-logo.png" alt="apple_logo" style="height: 80px;width: 80px; margin-right:60px" > 
                                    <img src="{{ url('/') }}/web/images/custom/technology/android.png" alt="android_logo" style="height: 80px;width: 80px; margin-right:60px" >
                                    <img src="{{ url('/') }}/web/images/custom/technology/react.png" alt="react_logo" style="height: 80px;width: 80px; margin-right:60px" >
                                    <img src="{{ url('/') }}/web/images/custom/technology/flutter.png" alt="flutter_logo" style="height: 80px;width: 80px; margin-right:60px" >
                                    
                                </div>
                            </div>
                        </div>

                        <!--Tab-->
                        <div class="tab" id="tab-2">
                            <div class="row clearfix">
                                
                                <div class="text-col col-lg-12 col-md-12 col-sm-12">
                                    <img src="{{ url('/') }}/web/images/custom/technology/css3.png" alt="css3" style="height: 80px;width: 80px; margin-right:60px" >
                                    <img src="{{ url('/') }}/web/images/custom/technology/js.jpg" alt="js" style="height: 80px;width: 80px; margin-right:60px" >
                                    <img src="{{ url('/') }}/web/images/custom/technology/html.png" alt="flutter_logo" style="height: 80px;width: 80px; margin-right:60px" >
                                </div>
                            </div>
                        </div>

                        <!--Tab-->
                        <div class="tab" id="tab-3">
                            <div class="row clearfix">
                                
                                <div class="text-col col-lg-12 col-md-12 col-sm-12">
                                    <img src="{{ url('/') }}/web/images/custom/technology/php.png" alt="php_logo" style="height: 80px;width: 80px; margin-right:60px" >
                                    <img src="{{ url('/') }}/web/images/custom/technology/node.png" alt="node_logo" style="height: 80px;width: 80px; margin-right:60px" >
                                    <img src="{{ url('/') }}/web/images/custom/technology/microsoft-net-logo.jpg" alt="dotnet_logo" style="height: 80px;width: 80px; margin-right:60px" >
                                    <img src="{{ url('/') }}/web/images/custom/technology/python.png" alt="python_logo" style="height: 80px;width: 80px; margin-right:60px" >
                                </div>
                            </div>
                        </div>
                        <div class="tab" id="tab-4">
                            <div class="row clearfix">
                                
                                <div class="text-col col-lg-12 col-md-12 col-sm-12">
                                    <img src="{{ url('/') }}/web/images/custom/technology/angular.png" alt="angular_logo" style="height: 80px;width: 80px; margin-right:60px" >
                                    <img src="{{ url('/') }}/web/images/custom/technology/react.png" alt="react_logo" style="height: 80px;width: 80px; margin-right:60px" >
                                    <img src="{{ url('/') }}/web/images/custom/technology/laravel.png" alt="php_logo" style="height: 80px;width: 80px; margin-right:60px" >
                                    <img src="{{ url('/') }}/web/images/custom/technology/django.png" alt="node_logo" style="height: 80px;width: 80px; margin-right:60px" >
                                    </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <!-- Call To Section -->
        <section class="call-to-section-two alternate">
            <div class="auto-container">
                <div class="inner clearfix">
                    <h2>We’re Ready to Bring Bigger <br>& Stronger Projects</h2>
                    <div class="link-box">
                        <a class="theme-btn btn-style-two" href="{{route('contact')}}">
                            <i class="btn-curve"></i>
                            <span class="btn-title">Contact with us</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>



@endsection


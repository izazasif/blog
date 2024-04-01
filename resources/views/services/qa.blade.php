
@extends('layout.landing_main')
@section('content_web')
   <!-- Banner Section -->
   <section class="page-banner">
            <div class="image-layer" style="background-image:url(web/images/custom/Servicesheader.jpg);"></div>
            <div class="shape-1"></div>
            <div class="shape-2"></div>
            <div class="banner-inner">
                <div class="auto-container">
                    <div class="inner-container clearfix">
                        <h1 style="font-weight: 400;">QUALITY ASSURANCE AND AUTOMATION</h1>
                        <div class="page-nav">
                            <ul class="bread-crumb clearfix">
                                <li><a href="/">Home</a></li>
                                <li><a href="{{route('services')}}">Services</a></li>
                                <li class="active">QUALITY ASSURANCE AND AUTOMATION</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Banner Section -->

        <div class="sidebar-page-container">
            <div class="auto-container">
                <div class="row clearfix">

                    <!--Content Side-->
                    <div class="content-side col-lg-8 col-md-12 col-sm-12">
                        <div class="service-details">
                            <div class="main-image image">
                                <img src="{{ url('/') }}/web/images/custom/service/auto.png" alt="">
                            </div>
                            <div class="text-content">
                                <h3>QUALITY ASSURANCE AND AUTOMATION</h3>
                                <p>
                                    In today’s competitive digital world you cannot afford building a mediocre product. We deliver an uncompromised quality through complete automation of the testing process, offering a competitive advantage of a reliable and efficient software solution. Quality assurance is one of the most important processes for any company as it gives higher accuracy.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!--Sidebar Side-->
                    <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                        <aside class="sidebar blog-sidebar">

                            <div class="sidebar-widget services">
                                <div class="widget-inner">
                                    <div class="sidebar-title">
                                        <h4>Why QA & automation?</h4>
                                    </div>
                                    <ul>
                                        <li><a>Reduced Cost of an Error</a></li>
                                        <li><a>Saves times & Money</a></li>
                                        <li><a>Unlimited Scalability</a></li>
                                        <li><a>Minimized Human Factor</a></li>
                                        <li><a>Better User Experience</a></li>
                                        <li><a>Enhanced User Satisfaction</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="sidebar-widget call-up">
                                <div class="widget-inner">
                                    <div class="sidebar-title">
                                        <h4>need  help?</h4>
                                    </div>
                                    <div class="text">Don't hesitate to reach out to us with any questions you may have at info@miaki.co. Our team is standing by, eager to provide you with the answers you need.</div>
                                    <div class="email"><a href="email:info@miaki.co"><span
                                                class="icon flaticon-email"> info@miaki.co</span></a></div>
                                </div>
                            </div>


                        </aside>
                    </div>

                </div>
            </div>
        </div>

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


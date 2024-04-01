
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
                        <h1 style="font-weight: 400;">DIGITAL TRANSFORMATION</h1>
                        <div class="page-nav">
                            <ul class="bread-crumb clearfix">
                                <li><a href="/">Home</a></li>
                                <li><a href="{{route('services')}}">Services</a></li>
                                <li class="active">DIGITAL TRANSFORMATION</li>
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
                                <img src="{{ url('/') }}/web/images/custom/service/digital.png" alt="">
                            </div>
                            <div class="text-content">
                                <h3>DIGITAL TRANSFORMATION</h3>
                                <p>
                                    We collaborate in developing a digital transformation strategy that is aligned to your key business objectives and leverages modern technologies to produce a significant competitive advantage. With a comprehensive suite of services to aid in digital transformation, Miaki can help support and accelerate your organization’s journey.
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
                                        <h4>Why digital transformation?</h4>
                                    </div>
                                    <ul>
                                        <li><a>Enhanced data collection</a></li>
                                        <li><a>Data-driven customer insights</a></li>
                                        <li><a>Better customer experience</a></li>
                                        <li><a>Encourages digital culture</a></li>
                                        <li><a>Increased profits</a></li>
                                        <li><a>PImproved productivity</a></li>
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


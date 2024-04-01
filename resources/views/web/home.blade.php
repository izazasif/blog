@extends('layout.landing_main')
@section('content_web')

<!-- Banner Section -->
<section class="banner-section banner-one">

<div class="left-based-text">
    <div class="base-inner">
        <!-- <div class="hours">
            <ul class="clearfix">
                <li><span>mon - fri</span></li>
                <li><span>9am - 7pm</span></li>
            </ul>
        </div> -->
        <!-- <div class="social-links">
            <ul class="clearfix">
                <li><a href="#"><span>Twitter</span></a></li>
                <li><a href="#"><span>Facebook</span></a></li>
                <li><a href="#"><span>Youtube</span></a></li>
            </ul>
        </div> -->
    </div>
</div>

<div class="banner-carousel owl-theme owl-carousel">
    <!-- Slide Item -->
    <div class="slide-item">
        <div class="image-layer" style="background-image: url({{ url('/') }}/web/images/custom/slide2.jpg);"></div>
        <div class="left-top-line"></div>
        <div class="right-bottom-curve"></div>
        <div class="right-top-curve"></div>
        <div class="auto-container">
            <div class="content-box">
                <div class="content">
                    <div class="inner">
                        <div class="sub-title">welcome to Miaki</div>
                        <h1>Creating Happiness for<br> our employees, <br> customer & society</h1>
                        <!-- <div class="link-box">
                            <a class="theme-btn btn-style-one" href="about.html">
                                <i class="btn-curve"></i>
                                <span class="btn-title">Discover More</span>
                            </a>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Slide Item -->
    <div class="slide-item">
        <div class="image-layer" style="background-image: url({{ url('/') }}/web/images/custom/slide1.jpg);"></div>
        <div class="left-top-line"></div>
        <div class="right-bottom-curve"></div>
        <div class="right-top-curve"></div>
        <div class="auto-container">
            <div class="content-box">
                <div class="content">
                    <div class="inner">
                        <div class="sub-title">welcome to Miaki</div>
                        <h1>Digital Service provider <br> with quality service <br>& innovation</h1>
                        <!-- <div class="link-box">
                            <a class="theme-btn btn-style-one" href="about.html">
                                <i class="btn-curve"></i>
                                <span class="btn-title">Discover More</span>
                            </a>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    

</div>
</section>
<!--End Banner Section -->






<!--About Section-->
<section class="about-section">
<div class="auto-container">
    <div class="row clearfix">
        <!--Image Column-->
        <div class="image-column col-xl-6 col-lg-12 col-md-12 col-sm-12">
            <div class="inner">
                <div class="image-block wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms"><img
                        src="{{ url('/') }}/web/images/custom/perfect.jpg" alt="" style="object-fit:cover;"></div>
                <!-- <div class="image-block wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms"><img
                        src="images/resource/custom.jpg" alt=""></div> -->
                <!-- <div class="image-block wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms"><img
                        src="images/resource/featured-image-2.jpg" alt=""></div> -->
            </div>
        </div>
        <!--Text Column-->
        <div class="text-column col-xl-6 col-lg-12 col-md-12 col-sm-12">
            <div class="inner">
                <div class="sec-title">
                    <h2>A perfect fusion of<br>talent, teamwork & technologies<span class="dot">.</span></h2>
                    <!-- <div class="lower-text">The quality of an Organization can never exceed the quality of brains that make it up</div> -->
                </div>
                <div class="text">
                    <p>
                        Miaki Is an organisation of dedicated team who are relentlessly working to make difference in the spectrum of Tech & Digital Services.
                    </p>
                </div>
                <div class="text clearfix">
                    <ul>
                        <li>Multi Country Service Provider </li>
                        <li>Managed Services Partner in Digital Space</li>
                        <li>Creation of Companies & Ideas</li>
                    </ul>
                    <div class="since"><span class="txt">Since <br>2011</span></div>
                </div>
                <!-- <div class="link-box">
                    <a class="theme-btn btn-style-one" href="website-about.html">
                        <i class="btn-curve"></i>
                        <span class="btn-title">Discover More</span>
                    </a>
                </div> -->
            </div>
        </div>
    </div>
</div>
</section>







<!--Services Section-->
<section class="services-section-two">
<div class="auto-container">
    <div class="sec-title">
        <!--Title Block-->
        <div class="row clearfix">
            <div class="column col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <h2>LET’S CREATE SOMETHING together<span class="dot">.</span></h2>
            </div>
            <!-- <div class="column col-xl-6 col-lg-12 col-md-12 col-sm-12"> -->
                <!-- <div class="lower-text">
                    Our service offerings are aligned to the changing world of our customers. 
                    Our portfolio of services range from designing strategy to delivering impact.
                </div> -->
            <!-- </div> -->
        </div>
    </div>
    <div class="services">
        <div class="row clearfix">
            <!--Service Block-->
            <div class="service-block-two col-xl-4 col-lg-6 col-md-6 col-sm-12">
                <a href="{{route('web_dev')}}"> 
                <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="bottom-curve"></div>
                    <div class="icon-box"><span><img src="{{ url('/') }}/web/images/custom/service/Webdevelopment.png" style="height: 64px;width: 64px;" ></span></div>
                    <h5><a href="{{route('web_dev')}}">Enterprise <br>Web Development</a></h5>
                    <div class="link-box"><a href="{{route('web_dev')}}"><span class="fa fa-angle-right"></span></a></div>
                </div>
                </a>
               
            </div>
            
            <!--Service Block-->
            <div class="service-block-two col-xl-4 col-lg-6 col-md-6 col-sm-12">
                <a href="{{route('mobile_app_development')}}">
                 
                <div class="inner-box wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <div class="bottom-curve"></div>
                    <div class="icon-box"><span><img src="{{ url('/') }}/web/images/custom/service/MobileApp.png" style="height: 64px;width: 64px;" ></span></div>
                    <h5><a href="{{route('mobile_app_development')}}">Mobile <br>App Development</a></h5>
                    <div class="link-box"><a href="{{route('mobile_app_development')}}"><span class="fa fa-angle-right"></span></a></div>
                </div>

                </a>
               
            </div>

            <!--Service Block-->
            <div class="service-block-two col-xl-4 col-lg-6 col-md-6 col-sm-12">
                <a href="{{route('digital_transmition')}}"> 
                <div class="inner-box wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                    <div class="bottom-curve"></div>
                    <div class="icon-box"><span><img src="{{ url('/') }}/web/images/custom/service/DigitalTransformation.png" style="height: 64px;width: 64px;" ></span></div>
                    <h5><a href="{{route('digital_transmition')}}">Digital <br>Transformation</a></h5>
                    <div class="link-box"><a href="{{route('digital_transmition')}}"><span class="fa fa-angle-right"></span></a></div>
                </div>

                </a>
               
            </div>

            <!--Service Block-->
            <div class="service-block-two col-xl-4 col-lg-6 col-md-6 col-sm-12">
                <a href="{{route('qa')}}">
                <div class="inner-box wow fadeInUp" data-wow-delay="900ms" data-wow-duration="1500ms">
                    <div class="bottom-curve"></div>
                    <div class="icon-box"><span><img src="{{ url('/') }}/web/images/custom/service/QualityAssurance.png" style="height: 64px;width: 64px;" ></span></div>
                    <h5><a href="{{route('qa')}}">Quality Assurance <br>and Automation</a></h5>
                    <div class="link-box"><a href="{{route('qa')}}"><span class="fa fa-angle-right"></span></a></div>
                </div>
                </a>
               
            </div>

            
             <!--Service Block-->
             <div class="service-block-two col-xl-4 col-lg-6 col-md-6 col-sm-12">
                <a href="{{route('managed_services')}}">
                <div class="inner-box wow fadeInUp" data-wow-delay="900ms" data-wow-duration="1500ms">
                    <div class="bottom-curve"></div>
                    <div class="icon-box"><span><img src="{{ url('/') }}/web/images/custom/service/managedService.png" style="height: 64px;width: 64px;" ></span></div>
                    <h5><a href="{{route('managed_services')}}">Managed <br>Service</a></h5>
                    <div class="link-box"><a href="{{route('managed_services')}}"><span class="fa fa-angle-right"></span></a></div>
                </div>

                </a>
             
            </div>
            

             <!--Service Block-->
             <div class="service-block-two col-xl-4 col-lg-6 col-md-6 col-sm-12">
                <a href="{{route('telecom_services')}}">
                <div class="inner-box wow fadeInUp" data-wow-delay="900ms" data-wow-duration="1500ms">
                    <div class="bottom-curve"></div>
                    <div class="icon-box"><span><img src="{{ url('/') }}/web/images/custom/service/TelecomService.png" style="height: 64px;width: 64px;" ></span></div>
                    <h5><a href="{{route('telecom_services')}}">Telecom <br>Services</a></h5>
                    <div class="link-box"><a href="{{route('telecom_services')}}"><span class="fa fa-angle-right"></span></a></div>
                </div>
                </a>
               
            </div>

        </div>
    </div>
</div>
</section>





<!--Agency Section-->
<section class="agency-section" > 
<div class="auto-container">
    <div class="row clearfix">
        <!--Left Column-->
        <div class="left-col col-xl-6 col-lg-12 col-md-12 col-sm-12">
            <div class="inner">
                <div class="sec-title">
                    <h2>Mission<br> Vision<span class="dot">.</span></h2>
                </div>

                <!--Default Tabs-->
                <div class="default-tabs tabs-box">

                    <!--Tab Btns-->
                    <ul class="tab-btns tab-buttons clearfix">
                        <li data-tab="#tab-1" class="tab-btn active-btn"><span>Our Mission</span></li>
                        <li data-tab="#tab-2" class="tab-btn"><span>Our Vision</span></li>
                        <li data-tab="#tab-3" class="tab-btn"><span>Our Values</span></li>
                    </ul>

                    <!--Tabs Container-->
                    <div class="tabs-content">

                        <!--Tab-->
                        <div class="tab active-tab" id="tab-1">
                            <div class="content">
                                <div class="text">
                                    To become the TRUSTED digital service provider through QUALITY SERVICES & INNOVATION.
                                </div>
                            </div>
                        </div>

                        <!--Tab-->
                        <div class="tab" id="tab-2">
                            <div class="content">
                                <div class="text">"CREATE HAPPINESS" with our employees, customers & society.</div>
                            </div>
                        </div>

                        <!--Tab-->
                        <div class="tab" id="tab-3">
                            <div class="content">
                                <div class="text">Best in what we do, Keep promises, Be respectfull, Teamwork.</div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!--Right Column-->
        <div class="right-col col-xl-6 col-lg-12 col-md-12 col-sm-12">
            <div class="inner">
                <div class="text"> Together we build lasting relationships with the power of technology and our passion for extreme quality.</div>
                <div class="featured-block-two clearfix">
                    <div class="image"><img src="{{ url('/') }}/web/images/custom/mission_vission.jpg" alt="" style="height: 230px"></div>
                    <div class="text">
                        <ul>
                            <li>Be known as a “Great place to Work”.</li>
                            <li>Keep improving our quality year on year.</li>
                            <li>Never lose a relationship.</li>
                            <li>Be the best in whatever we do.</li>
                            <li>Uphold respect and honour over all else.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>




<!--Features Section-->
<section class="features-section-two">
<div class="auto-container">
    <div class="content-container">
        <div class="row clearfix">
            <!--Left Column-->
            <div class="left-col col-lg-5 col-md-12 col-sm-12">
                <div class="inner">
                    <div class="sec-title">
                        <h2>OUR VALUES<span class="dot">.</span></h2>
                    </div>
                    <div class="features">
                        <div class="feature">
                            <div class="count"><span>01</span></div>
                            <h5>Best In What We Do</h5>
                            <div class="sub-text">Each one of us is extremely passionate about service, quality and technology.</div>
                        </div>
                        <div class="feature">
                            <div class="count"><span>02</span></div>
                            <h5>Teamwork</h5>
                            <div class="sub-text">Focused, goal-oriented, adept and honourable are qualities our clients most associate us with.</div>
                        </div>
                        <div class="feature">
                            <div class="count"><span>03</span></div>
                            <h5>Keep Promises</h5>
                            <div class="sub-text">We value relationships & believe in building strong lasting mutually beneficial business partnerships.</div>
                        </div>
                        <div class="feature">
                            <div class="count"><span>04</span></div>
                            <h5>Be Respectful</h5>
                            <div class="sub-text">An environment in which employees don't work because they have to, but because they love to.</div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Right Column-->
            <div class="right-col col-lg-7 col-md-12 col-sm-12">
                <div class="inner">
                    <div class="image-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <img src="{{ url('/') }}/web/images/custom/values.jpg" style="object-fit:cover;" alt="">
                        <div class="cap-box">
                            <div class="cap-inner">
                                <h5>Total design freedom for everyone</h5>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
</section>
<br>
<!--  new Edition -->
    <!-- Team Section -->
    <section class="team-section no-padd-top" id="team">
        <!-- <div class="container">
            <div class="row">
                
            </div>
        </div> -->
            <div class="auto-container">
                <div class="sec-title centered">
                    <h2 style="font-size: 34px;">What Our Client Say About US<span class="dot">!</span></h2>
                </div>
            </div> 
             <div class="auto-container">
                <div class="carousel-box">
                    <div class="team-carousel__one-page owl-theme owl-carousel">
                        <!-- Team-->
                        @foreach($test as $tests)
                        <?php 
                                      $description = strip_tags($tests->testimonial_description);
                                      $search = array("Powered by");
                                      $replace = array(" ");
                                      $new_string = str_replace($search, $replace, $description);
                                      $search1 = array("Froala Editor");
                                        $replace = array(" ");
                                        $new_string1 = str_replace($search1, $replace, $new_string);
                                    
                         ?>
                            <!-- <div class="how-it-works-card__inner" style="border: 2px solid #ffc107;height:372px;">
                               
                                    <div class="widget-inner" style="padding: 15px;">
                                    <div class="sidebar-title" style="text-align: start;margin-bottom: -14px;">
                                        <img src="{{ url('/') }}/img/quote.png" alt="" style="width:8%;">
                                        </div>
                                        <br>
                                        <div class="sidebar-title" style="text-align: start;margin-bottom: -18px;">
                                            <h6 style="margin-top:-7px;">{{$tests->testimonial_titile}}</h6>
                                        </div>
                                    
                                        <div class="text" style="text-align: justify;"> 
                                        <p style="line-height: 1.5em;"> {!! substr($description,0,340)  !!}</p>
                                        </div>  
                                        <br>         
                                        <div class="phone" > 
                                        <img src="{{ asset($tests->testimonial_logo) }}" alt=""class="rounded-circle" style="height: 49px;width: 51px;margin-top:-44px;"> 
                                        <h6 style="margin-left: 69px;margin-top: -40px;line-height: .9em;">{{$tests->testimonial_company_name}}</h6> 
                                        </div>
                                    </div>
                            </div> -->
                            <div class="sidebar-widget call-up" style="height: 100%;border: 2px solid #ffc107;padding: 17px;border-radius: 10px;">
                                <div class="widget-inner">
                                    <div class="sidebar-title">
                                    <img src="{{ url('/') }}/img/quote.png" alt="" style="width:8%;">
                                        <h6 style="top: 11px;">{{$tests->testimonial_titile}}</h6>
                                    </div>
                                    <div class="text"> <p style="line-height: 1.5em;text-align: justify;">{!!  $new_string1  !!}</p></div>
                                    <div class="phone" style="margin-top: 61px;">
                                        <img src="{{ asset($tests->testimonial_logo) }}" alt=""class="rounded-circle" style="height: 49px;width: 51px;bottom: 12px;position: fixed;"> 
                                        <h6 style="margin-left: 65px;line-height: .9em;bottom: 0px;position: fixed;text-align: left;">{{$tests->testimonial_company_name}}</h6> 
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        

                    </div>
                </div>
            </div>
        </section>


<!-- End New Edition -->

<!-- Gallery Section -->
<section class="gallery-section-two">
<div class="auto-container">
    <div class="sec-title centered">
        <h2>Our work showcase<span class="dot">.</span></h2>
    </div>
</div>
<!--Porfolio Tabs-->
<div class="project-tab">
    <!-- <div class="auto-container">
        <div class="tab-btns-box">
            <!--Tabs Header-->
            <!-- <div class="tabs-header">
                <ul class="product-tab-btns clearfix">
                    
                    
                </ul>
            </div>
        </div>
    </div>  -->
    <!--Tabs Content-->
    <div class="p-tabs-content">
        <!--Portfolio Tab / Active Tab-->
        <div class="p-tab active-tab" id="p-tab-1">
            <div class="project-carousel owl-theme owl-carousel">

                <!-- Gallery Item -->
                <div class="gallery-item">
                    <div class="inner-box">
                        <figure class="image"><img src="{{ url('/') }}/web/images/custom/portfolio/BDAPPS.png" alt="" style="width:100%;height: auto;border-radius:7px;display: block;"></figure>
                        <a href="{{ url('/') }}/web/images/custom/portfolio/BDAPPS.png" class="lightbox-image overlay-box"
                            data-fancybox="gallery"></a>
                        <div class="cap-box">
                            <div class="cap-inner">
                                <!-- <div class="cat"><span>Graphic</span></div> -->
                                <div class="title">
                                    <h5 style="color:white;">BDAPPS</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Gallery Item -->
                <div class="gallery-item">
                    <div class="inner-box">
                        <figure class="image"><img src="{{ url('/') }}/web/images/custom/portfolio/Goama.png" alt="" style="width:100%;height: auto;border-radius:7px;display: block;"></figure>
                        <a href="{{ url('/') }}/web/images/custom/portfolio/Goama.png" class="lightbox-image overlay-box"
                            data-fancybox="gallery"></a>
                        <div class="cap-box">
                            <div class="cap-inner">
                                <!-- <div class="cat"><span>Graphic</span></div> -->
                                <div class="title">
                                    <h5 style="color:white;">Go-games</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Gallery Item -->
                <div class="gallery-item">
                    <div class="inner-box">
                        <figure class="image"><img src="{{ url('/') }}/web/images/custom/portfolio/GoNsave.png" alt="" style="width:100%;height: auto;border-radius:7px;display: block;"></figure>
                        <a href="{{ url('/') }}/web/images/custom/portfolio/GoNsave.png" class="lightbox-image overlay-box"
                            data-fancybox="gallery"></a>
                        <div class="cap-box">
                            <div class="cap-inner">
                                <!-- <div class="cat"><span>Graphic</span></div> -->
                                <div class="title">
                                    <h5 style="color:white;">GoNsave</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Gallery Item -->
                <div class="gallery-item">
                    <div class="inner-box">
                        <figure class="image"><img src="{{ url('/') }}/web/images/custom/portfolio/Admy.png" alt="" style="width:100%;height: auto;border-radius:7px;display: block;"></figure>
                        <a href="{{ url('/') }}/web/images/custom/portfolio/Admy.png" class="lightbox-image overlay-box"
                            data-fancybox="gallery"></a>
                        <div class="cap-box">
                            <div class="cap-inner">
                                <!-- <div class="cat"><span>Graphic</span></div> -->
                                <div class="title">
                                    <h5 style="color:white;">admybd</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Gallery Item -->
                <div class="gallery-item">
                    <div class="inner-box">
                        <figure class="image"><img src="{{ url('/') }}/web/images/custom/portfolio/AppMaker.png" alt="" style="width:100%;height: auto;border-radius:7px;display: block;"></figure>
                        <a href="{{ url('/') }}/web/images/custom/portfolio/AppMaker.png" class="lightbox-image overlay-box"
                            data-fancybox="gallery"></a>
                        <div class="cap-box">
                            <div class="cap-inner">
                                <!-- <div class="cat"><span>Graphic</span></div> -->
                                <div class="title">
                                    <h5 style="color:white;">AppMaker</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Gallery Item -->
                <div class="gallery-item">
                    <div class="inner-box">
                        <figure class="image"><img src="{{ url('/') }}/web/images/custom/portfolio/CHAMPS.png" alt="" style="width:100%;height: auto;border-radius:7px;display: block;"></figure>
                        <a href="{{ url('/') }}/web/images/custom/portfolio/CHAMPS.png" class="lightbox-image overlay-box"
                            data-fancybox="gallery"></a>
                        <div class="cap-box">
                            <div class="cap-inner">
                                <!-- <div class="cat"><span>Graphic</span></div> -->
                                <div class="title">
                                    <h5 style="color:white;">CHAMPS</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Gallery Item -->
                <div class="gallery-item">
                    <div class="inner-box">
                        <figure class="image"><img src="{{ url('/') }}/web/images/custom/portfolio/iAlo.png" alt="" style="width:100%;height: auto;border-radius:7px;display: block;"></figure>
                        <a href="{{ url('/') }}/web/images/custom/portfolio/iAlo.png" class="lightbox-image overlay-box"
                            data-fancybox="gallery"></a>
                        <div class="cap-box">
                            <div class="cap-inner">
                                <!-- <div class="cat"><span>Graphic</span></div> -->
                                <div class="title">
                                    <h5 style="color:white;">I-alo</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Gallery Item -->
                <div class="gallery-item">
                    <div class="inner-box">
                        <figure class="image"><img src="{{ url('/') }}/web/images/custom/portfolio/Kheli.png" alt="" style="width:100%;height: auto;border-radius:7px;display: block;"></figure>
                        <a href="{{ url('/') }}/web/images/custom/portfolio/Kheli.png" class="lightbox-image overlay-box"
                            data-fancybox="gallery"></a>
                        <div class="cap-box">
                            <div class="cap-inner">
                                <!-- <div class="cat"><span>Graphic</span></div> -->
                                <div class="title">
                                    <h5 style="color:white;">Kheli</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Gallery Item -->
                <div class="gallery-item">
                    <div class="inner-box">
                        <figure class="image"><img src="{{ url('/') }}/web/images/custom/portfolio/mSticker.png" alt="" style="width:100%;height: auto;border-radius:7px;display: block;"></figure>
                        <a href="{{ url('/') }}/web/images/custom/portfolio/mSticker.png" class="lightbox-image overlay-box"
                            data-fancybox="gallery"></a>
                        <div class="cap-box">
                            <div class="cap-inner">
                                <!-- <div class="cat"><span>Graphic</span></div> -->
                                <div class="title">
                                    <h5 style="color:white;">m-sticker</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Gallery Item -->
                <div class="gallery-item">
                    <div class="inner-box">
                        <figure class="image"><img src="{{ url('/') }}/web/images/custom/portfolio/mVault.png" alt="" style="width:100%;height: auto;border-radius:7px;display: block;"></figure>
                        <a href="{{ url('/') }}/web/images/custom/portfolio/mVault.png" class="lightbox-image overlay-box"
                            data-fancybox="gallery"></a>
                        <div class="cap-box">
                            <div class="cap-inner">
                                <!-- <div class="cat"><span>Graphic</span></div> -->
                                <div class="title">
                                    <h5 style="color:white;">m-vault</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Gallery Item -->
                <div class="gallery-item">
                    <div class="inner-box">
                        <figure class="image"><img src="{{ url('/') }}/web/images/custom/portfolio/robitube.png" alt="" style="width:100%;height: auto;border-radius:7px;display: block;"></figure>
                        <a href="{{ url('/') }}/web/images/custom/portfolio/robitube.png" class="lightbox-image overlay-box"
                            data-fancybox="gallery"></a>
                        <div class="cap-box">
                            <div class="cap-inner">
                                <!-- <div class="cat"><span>Graphic</span></div> -->
                                <div class="title">
                                    <h5 style="color:white;">RobiTube</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Gallery Item -->
                <div class="gallery-item">
                    <div class="inner-box">
                        <figure class="image"><img src="{{ url('/') }}/web/images/custom/portfolio/health.png" alt="" style="width:100%;height: auto;border-radius:7px;display: block;"></figure>
                        <a href="{{ url('/') }}/web/images/custom/portfolio/health.png" class="lightbox-image overlay-box"
                            data-fancybox="gallery"></a>
                        <div class="cap-box">
                            <div class="cap-inner">
                                <!-- <div class="cat"><span>Graphic</span></div> -->
                                <div class="title">
                                    <h5><a href="#">mHealth</a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                

            </div>
        </div>


    </div>

</div>
</section>









<!-- Features Section -->
<section class="features-section jarallax" data-jarallax data-speed="0.3" data-imgPosition="50% -100%">
<!-- <div class="image-layer" style="background-image: url(images/background/image-3.jpg);"></div> -->
<img src="images/custom/AboutOurvalues.jpg" class="jarallax-img" alt="">
<div class="auto-container">
    <div class="content-box">
        <h2>Quality That Defines Us<span>.</span></h2>
        <div class="features clearfix">
            <div class="feature-block">
                <div class="inner">
                    <div class="icon-box">
                        <!-- <span class="flaticon-design-tools"></span> -->
                        <img class="quality-img" src="{{ url('/') }}/web/images/custom/quality/1.png">
                    </div>
                    <h6>latest <br>technology</h6>
                </div>
            </div>
            
            <div class="feature-block">
                <div class="inner">
                    <div class="icon-box">
                        <!-- <span class="flaticon-idea"></span> -->
                        <img class="quality-img" src="{{ url('/') }}/web/images/custom/quality/2.png">
                    </div>
                    <h6>amazing <br>free support</h6>
                </div>
            </div>
            
            <div class="feature-block">
                <div class="inner">
                    <div class="icon-box">
                        <!-- <span class="flaticon-clock"></span> -->
                        <img class="quality-img" src="{{ url('/') }}/web/images/custom/quality/3.png">
                    </div>
                    <h6>quick <br>services</h6>
                </div>
            </div>
            
             <div class="feature-block">
                <div class="inner">
                    <div class="icon-box">
                        <!-- <span class="flaticon-clock"></span> -->
                        <img class="quality-img" src="{{ url('/') }}/web/images/custom/quality/4.png">
                    </div>
                    <h6> Go- <br>Getters</h6>
                </div>
            </div>
             
            <div class="feature-block">
                <div class="inner">
                    <div class="icon-box">
                        <!-- <span class="flaticon-clock"></span> -->
                        <img class="quality-img" src="{{ url('/') }}/web/images/custom/quality/5.png">
                    </div>
                    <h6>Versatile</h6>
                </div>
            </div>
            <div class="feature-block">
                <div class="inner">
                    <div class="icon-box">
                        <!-- <span class="flaticon-clock"></span> -->
                        <img class="quality-img" src="{{ url('/') }}/web/images/custom/quality/6.png">
                    </div>
                    <h6>Perfectionist</h6>
                </div>
            </div>
            
        </div>
        
    </div>
</div>
</section>
<!-- End Funfacts Section -->







<!--Sponsors Section-->
<section class="sponsors-section" style="margin-top: 40px;">
<div class="sec-title centered">
    <h2 >Our Clients<span class="dot">.</span></h2>
</div>
<div class="sponsors-outer">
    <!--Sponsors-->
    <div class="auto-container">
        <!--Sponsors Carousel-->
        <div class="sponsors-carousel owl-theme owl-carousel">
            
            <div class="slide-item">
                <figure class="image-box"><img src="{{ url('/') }}/web/images/custom/partner/partner1.png" style="height:150px;" alt=""></figure>
            </div>
            <div class="slide-item">
                <figure class="image-box"><img src="{{ url('/') }}/web/images/custom/partner/partner2.png" style="height:150px;" alt=""></figure>
            </div>
            <div class="slide-item">
                <figure class="image-box"><img src="{{ url('/') }}/web/images/custom/partner/partner3.png" style="height:150px;" alt=""></figure>
            </div>
            <div class="slide-item">
                <figure class="image-box"><img src="{{ url('/') }}/web/images/custom/partner/partner4.png" style="height:150px;" alt=""></figure>
            </div>
            <div class="slide-item">
                <figure class="image-box"><img src="{{ url('/') }}/web/images/custom/partner/partner5.png" style="height:150px;" alt=""></figure>
            </div>
            <div class="slide-item">
                <figure class="image-box"><img src="{{ url('/') }}/web/images/custom/partner/partner6.png" style="height:150px;" alt=""></figure>
            </div>
            <div class="slide-item">
                <figure class="image-box"><img src="{{ url('/') }}/web/images/custom/partner/partner30.png" style="height:150px;" alt=""></figure>
            </div>
            <div class="slide-item">
                <figure class="image-box"><img src="{{ url('/') }}/web/images/custom/partner/partner8.png" style="height:150px;" alt=""></figure>
            </div>
            <div class="slide-item">
                <figure class="image-box"><img src="{{ url('/') }}/web/images/custom/partner/partner9.png" style="height:150px;" alt=""></figure>
            </div>
            <div class="slide-item">
                <figure class="image-box"><img src="{{ url('/') }}/web/images/custom/partner/partner10.png" style="height:150px;" alt=""></figure>
            </div>
            <div class="slide-item">
                <figure class="image-box"><img src="{{ url('/') }}/web/images/custom/partner/partner11.png" style="height:150px;" alt=""></figure>
            </div>
            <div class="slide-item">
                <figure class="image-box"><img src="{{ url('/') }}/web/images/custom/partner/partner12.png" style="height:150px;" alt=""></figure>
            </div>
            <div class="slide-item">
                <figure class="image-box"><img src="{{ url('/') }}/web/images/custom/partner/partner13.png" style="height:150px;" alt=""></figure>
            </div>
            <div class="slide-item">
                <figure class="image-box"><img src="{{ url('/') }}/web/images/custom/partner/partner14.png" style="height:150px;" alt=""></figure>
            </div>
            <div class="slide-item">
                <figure class="image-box"><img src="{{ url('/') }}/web/images/custom/partner/partner15.png" style="height:150px;" alt=""></figure>
            </div>
            <div class="slide-item">
                <figure class="image-box"><img src="{{ url('/') }}/web/images/custom/partner/partner16.png" style="height:150px;" alt=""></figure>
            </div>
            <div class="slide-item">
                <figure class="image-box"><img src="{{ url('/') }}/web/images/custom/partner/partner17.png" style="height:150px;" alt=""></figure>
            </div>
            <div class="slide-item">
                <figure class="image-box"><img src="{{ url('/') }}/web/images/custom/partner/partner19.png" style="height:150px;" alt=""></figure>
            </div>
            <div class="slide-item"> 
                <figure class="image-box"><img src="{{ url('/') }}/web/images/custom/partner/partner20.png" style="height:150px;" alt=""></figure>
            </div>
            <div class="slide-item">
                <figure class="image-box"><img src="{{ url('/') }}/web/images/custom/partner/partner21.png" style="height:150px;" alt=""></figure>
            </div>
            <div class="slide-item">
                <figure class="image-box"><img src="{{ url('/') }}/web/images/custom/partner/partner22.png" style="height:150px;" alt=""></figure>
            </div>
            <div class="slide-item">
                <figure class="image-box"><img src="{{ url('/') }}/web/images/custom/partner/partner23.png" style="height:150px;" alt=""></figure>
            </div>
            <div class="slide-item">
                <figure class="image-box"><img src="{{ url('/') }}/web/images/custom/partner/partner24.png" style="height:150px;" alt=""></figure>
            </div>
            <div class="slide-item">
                <figure class="image-box"><img src="{{ url('/') }}/web/images/custom/partner/partner25.png" style="height:150px;" alt=""></figure>
            </div>
            <div class="slide-item">
                <figure class="image-box"><img src="{{ url('/') }}/web/images/custom/partner/partner26.png" style="height:150px;" alt=""></figure>
            </div>
            <div class="slide-item">
                <figure class="image-box"><img src="{{ url('/') }}/web/images/custom/partner/partner27.png" style="height:150px;" alt=""></figure>
            </div>
            <div class="slide-item">
                <figure class="image-box"><img src="{{ url('/') }}/web/images/custom/partner/partner28.png" style="height:150px;" alt=""></figure>
            </div>
            <!-- <div class="slide-item">
                <figure class="image-box"><a href="#"><img src="images/custom/partner/partner29.png" alt=""></a></figure>
            </div> -->
            <!-- <div class="slide-item">
                <figure class="image-box"><a href="#"><img src="images/custom/partner/partner30.png" alt=""></a></figure>
            </div> -->
            <div class="slide-item">
                <figure class="image-box"><img src="{{ url('/') }}/web/images/custom/partner/partner31.png" style="height:150px;" alt=""></figure>
            </div>
            <div class="slide-item">
                <figure class="image-box"><img src="{{ url('/') }}/web/images/custom/partner/partner32.png" style="height:150px;" alt=""></figure>
            </div>
        </div>
    </div>
</div>
</section>












<!-- Call To Section -->
<section class="call-to-section">
<div class="auto-container">
    <div class="inner clearfix">
        <div class="shape-1 wow slideInRight" data-wow-delay="0ms" data-wow-duration="1500ms"></div>
        <div class="shape-2 wow fadeInDown" data-wow-delay="0ms" data-wow-duration="1500ms"></div>
        <h2>Let's Get Your Project <br>Started!</h2>
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
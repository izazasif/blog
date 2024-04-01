
@extends('layout.landing_main')
@section('content_web')
   <!-- Banner Section -->
   <section class="page-banner">
            <div class="image-layer" style="background-image:url(/web/images/custom/contact-us.png);"></div>
            <div class="shape-1"></div>
            <div class="shape-2"></div>
            <div class="banner-inner">
                <div class="auto-container">
                    <div class="inner-container clearfix">
                        <h1>Contact</h1>
                        <div class="page-nav">
                            <ul class="bread-crumb clearfix">
                                <li><a href="/">Home</a></li>
                                <li class="active">Contact</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Banner Section -->

        <!--Contact Section-->
        <section class="get-quote-two" >
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-12">
                        @if (session('message'))
                            <div class="alert alert-success" role="alert">
                            {{ session('message') }}
                            </div>
                            @endif
                    </div>
                </div>
                <div class="row clearfix">
                    <!--Left Column-->
                    <div class="left-col col-lg-6 col-md-12 col-sm-12">
                        <div class="inner">
                            <div class="sec-title">
                                <h2>We are always here to help you<span class="dot">.</span></h2>
                            </div>
                            <div class="text">There are many variatns of passages the majority have suffered alteration
                                in some foor randomised words believable.</div>
                            <div class="info">
                                <ul>
                                    <li class="address">
                                        <span class="icon flaticon-pin-1"></span>
                                        <strong>Visit Us</strong>
                                        Road #19/A House #8
                                        Banani, Dhaka 1213
                                    </li>
                                    <li>
                                        <span class="icon flaticon-email-2"></span>
                                        <strong>Email address</strong>
                                        <a href="mailto:info@miaki.co">info@miaki.co</a>
                                    </li>
                                    <li>
                                        <span class="icon flaticon-call"></span>
                                        <strong>Call now</strong>
                                        <a href="tel:+88 0184 3900 056">+88 0184 3900 056</a><br>
                                        <a href="0967 8232 777">+88 0967 8232 777</a>
                                        
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--Right Column-->
                    <div class="right-col col-lg-6 col-md-12 col-sm-12">
                        <div class="inner">
                            <div class="form-box">
                                <div class="default-form">
                                    <form method="post" action="{{route('contact')}}" id="contact-form">
                                    @csrf
                                        <div class="row clearfix">
                                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                                <div class="field-inner">
                                                    <input type="text" name="username" value="" placeholder="Your Name"
                                                        required="">
                                                </div>
                                            </div>
                                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                                <div class="field-inner">
                                                    <input type="email" name="email" value=""
                                                        placeholder="Email Address" required="">
                                                </div>
                                            </div>
                                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                                <div class="field-inner">
                                                    <input type="text" name="phone" value="" placeholder="Phone Number"
                                                        required="">
                                                </div>
                                            </div>
                                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                                <div class="field-inner">
                                                    <input type="text" name="subject" value="" placeholder="Subject"
                                                        required="">
                                                </div>
                                            </div>
                                            <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                                <div class="field-inner">
                                                    <textarea name="message" placeholder="Write Message"
                                                        required=""></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                                <button class="theme-btn btn-style-one">
                                                    <i class="btn-curve"></i>
                                                    <span class="btn-title">Send message</span>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="miaki_map">
            <div class="auto-container">
                <div class="row">

                    <div class="inner" style="padding: 20px 0px">
                        <div class="form-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="default-form">
                                <iframe class="map-iframe"
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1085.3811069819774!2d90.40896407749578!3d23.79112037708376!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c7c6df560017%3A0x7d9d65d5ca4ee173!2sMiaki%20Media%20Ltd.!5e0!3m2!1sen!2sbd!4v1627529348600!5m2!1sen!2sbd"
                                        style="border:0;" aria-hidden="false" tabindex="0">
                                </iframe>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>



@endsection


@extends('layout.landing_main')
@section('content_web')

  <!-- Banner Section -->
   <section class="page-banner">
            <div class="image-layer" style="background-image:url(images/background/image-7.jpg);"></div>
            <div class="shape-1"></div>
            <div class="shape-2"></div>
            <div class="banner-inner" style="height:370px;">
                <div class="auto-container">
                    <div class="inner-container clearfix">
                        <h1 style="margin-top: -55px;!importance;font-size: 74px;"> {{$data->job_title}}  </h1>
                        <div class="page-nav">
                            <ul class="bread-crumb clearfix">
                                <li><a href="index-main.html">{{$data->category_name}}  </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
    </section>

<section class="checkout-page" style="margin-top: -102px;">
            <div class="auto-container">
                       <div class="product-details__reveiw" >
                       <p style="margin-bottom: -6px;">Job Opening > <span style="color:#ffc107;top: 0px;
    left: -10px;"> {{$data->job_title}}</span>  </p>
                        </div><!-- /.product-details__reveiw -->
                <div class="row">
                @if (session('message'))
                <div class="alert alert-success" role="alert">
                {{ session('message') }}
                </div>
                @endif
                    <div class="col-lg-6">
                       <a href="{{route('job_description',$data->slug)}}"> <h6>&larr;  Back </h6> </a>
                        <h6 class="checkout__title" style="font-size: 27px;font-weight: 600;">Apply With Your Resume </h6><!-- /.checkout__title -->
                        <p style="margin-top: -14px;color:black;line-height: 1.3em;text-align:justify;">Please Complete The below Form and Attach Your Resume To Apply</p>
                        <div class="default-form" style="margin-top: -14px;margin-left: -15px;">
                            <div class="row">
                              <form role="form" method="POST" action="{{route('apply.form')}}" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" value="{{ $data->id }}" name="job_id" >
                                <div class="col-md-12 form-group">
                                    <div class="field-inner">
                                        <label for="" style="color:black;">First Name</label>
                                        <input type="text" placeholder="First Name" name="f_name" style="background-color:white;border: 1px solid black;height: 50px;border-radius: 0px;" required>
                                    </div><!-- /.field-inner -->
                                </div><!-- /.col-md-12 form-group -->
                                <div class="col-md-12 form-group">
                                    <div class="field-inner">
                                    <label for="" style="color:black;">Last  Name</label>
                                        <input type="text" placeholder="Last Name" name="l_name" style="background-color:white;border: 1px solid black;height: 50px;border-radius: 0px;required">
                                    </div><!-- /.field-inner -->
                                </div><!-- /.col-md-12 form-group -->
                                <div class="col-md-12 form-group">
                                    <div class="field-inner">
                                    <label for="" style="color:black;">Enter Your Email Address </label>
                                        <input type="email" placeholder="Email Address" name="email" style="background-color:white;border: 1px solid black;height: 50px;border-radius: 0px;" required>
                                       
                                    </div><!-- /.field-inner -->
                                </div><!-- /.col-md-12 form-group -->
                                <div class="col-md-12 form-group">
                                    <div class="field-inner">
                                      <label for="" style="color:black;">Phone Number </label>
                                        <input type="text" placeholder="Phone" name="phone_number" style="background-color:white;border: 1px solid black;height: 50px;border-radius: 0px;" required>
                                        <p>Please Include Your Country and Area Code </p>
                                    </div><!-- /.field-inner -->
                                </div><!-- /.col-md-12 form-group -->
                                  <div class="col-md-12 form-group">
                                    <div class="field-inner">
                                      <label for="" style="color:black;">Upload Resume </label>
                                        <input type="file" name="cv_file" style="background-color:white;border: 1px solid black;height: 75px;border-radius: 0px;">
                                        <p>FIles Type Accepted Only :PDF  </p>
                                        @if ($errors->has('cv_file'))
                                        <span class="text-danger">{{ $errors->first('cv_file') }}</span>
                                        @endif
                                    </div><!-- /.field-inner -->
                                </div><!-- /.col-md-12 form-group -->
                                <div class="text-right d-flex justify-content-left" style="margin-left: 10px;">

                                    <!-- <a class="theme-btn btn-style-one" type="submit" value="Submit!" >
                                        <i class="btn-curve"></i>
                                        <span class="btn-title">Submit </span>
                                    </a> -->
                                    <button class="theme-btn btn-style-one" type="submit">
                                        <i class="btn-curve"></i>
                                        <span class="btn-title">Submit </span>
                                    </button>
                                </div>
                            </form>
                            </div><!-- /.row -->
                        </div><!-- /.default-form -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
                <div class="row">
                    <div class="col-lg-9 col-md-9 col-sm-12">
                        <p style="text-align: justify;line-height:1.4em;margin-top: -10px;color:black;">
                        IMPORTANT:  By providing your email address and any other personal information on this website, you hereby grant your consent to the collection, use, 
                        and disclosure of your information in compliance with applicable regulations and policies.
                        </p>
                    </div>
                </div>
            </div><!-- /.container -->
        </section><!-- /.checkout-page -->

@endsection


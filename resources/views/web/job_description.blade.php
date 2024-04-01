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
                        <h1 style="margin-top: -57px;!importance;font-size: 74px;">{{$data->job_title}} </h1>
                        <div class="page-nav">
                            <ul class="bread-crumb clearfix">
                                <li><a href="index-main.html">{{$data->category_name}}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
    </section>
<section class="checkout-page" style="margin-top: -102px;">
               <?php 
                  $description = $data->job_description;
                 $search = array("Powered by");
                 $replace = array(" ");
                 $new_string = str_replace($search, $replace, $description);
                 $search1 = array("Froala Editor");
                 $replace = array(" ");
                 $new_string1 = str_replace($search1, $replace, $new_string);
                 ?>
            <div class="auto-container">
                       <div class="product-details__reveiw" >
                       <p style="margin-bottom: -6px;">Job Opening > <span style="color:#ffc107;top: 0px;
    left: -10px;"> {{$data->job_title}}  </span></p>
                        </div><!-- /.product-details__reveiw -->
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <h4> {{$data->job_title}}  </h4>
                        <div class="text" >
                        
                        <p style="line-height: 1.3em;text-align:justify;">{!! $new_string1 !!}</p>
                        </div>
                            <div class="text-right d-flex justify-content-center" style="margin-top:40px;">

                                <a class="theme-btn btn-style-one" href="{{route('career_form',$data->id)}}">
                                    <i class="btn-curve"></i>
                                    <span class="btn-title">Apply For The Job </span>
                                </a>
                            </div>
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-1 d-none d-lg-block">
                        <hr style="width:1px;height:800px;margin-left:30px;">
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-5 col-md-5 d-none d-md-block">
                        
                            <div class="text-right d-flex justify-content-left" style="margin-top: 20px;">

                                <a class="theme-btn btn-style-one" href="{{route('career_form',$data->id)}}">
                                    <i class="btn-curve"></i>
                                    <span class="btn-title">Apply For The Job </span>
                                </a>
                            </div>
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
    
            </div><!-- /.container -->
        </section><!-- /.checkout-page -->

@endsection


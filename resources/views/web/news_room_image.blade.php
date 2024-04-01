
@extends('layout.landing_main')
@section('content_web')
<br>
<br>
 <?php 
      $description1 = strip_tags($data->newsroom_description, 800);
      $search = array("Powered", "by","Froala");
      $replace = array(" ");
      $new_string = str_replace($search, $replace, $description1);
  ?>
<section class="team-section no-padd-top" id="team">
<div class="container">
<a href="{{route('newsroom')}}" > <h6 style="margin-top: 18px;">&larr;  Back </h6> </a>
<a href="{{route('newsroom_details',$data->id)}}">  <h5 style="color: black;">{{$data->newsroom_title}}</h5></a>
    <div class="row" style="margin-top: -15px;">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <p style=" text-align:justify; line-height: 1.5em;"> {!! substr($new_string,0, 800) !!}</p>
      </div>
  
    </div>
  </div> 
  </section>
 <!-- Gallery Section -->
 <section class="gallery-section" style="top: -53px;">
            <div class="container">
                <!--MixitUp Galery-->
                <div class="mixitup-gallery">
                    <!--Filter-->
                    <div class="filter-list row">
                        @foreach($images as $image)
                        <!-- Gallery Item -->
                        <div class="gallery-item mix all web-design col-lg-3 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <figure class="image"><img src="{{asset('website/newsroom/'.$image)}}" alt=""></figure>
                                <a href="{{asset('website/newsroom/'.$image)}}" class="lightbox-image overlay-box"
                                    data-fancybox="gallery"></a>
                                <!-- <div class="cap-box">
                                    <div class="cap-inner">
                                  
                                        <div class="title">
                                            <h5><a href="#">ADMYBD</a></h5>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                        @endforeach 
                     </div>
                </div>
            </div>
        </section>

@endsection


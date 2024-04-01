@extends('layout.landing_main')
@section('content_web')
<!-- @php 
$count=1;
@endphp -->
<br>
<br>
@foreach($data as $ev)
<br>
 <?php 
      $description1 = strip_tags($ev->newsroom_description, 800);
      $search = array("Powered", "by","Froala");
      $replace = array(" ");
      $new_string = str_replace($search, $replace, $description1);
  ?>
<section class="team-section no-padd-top" id="team">
<div class="container">
  <h5 style="color: black;margin-top: -15px;"><a href="{{route('newsroom_details',$ev->id)}}">{{$ev->newsroom_title}}</a></h5>
    <div class="row" style="margin-top: -15px;">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <p style=" text-align:justify; line-height: 1.5em;"> {!! substr($new_string,0, 800) !!}</p>
      </div>
  
    </div>
  </div> 
  </section>
  
  <section class="page-banner" style="top: -17px;background:#222429;">

    <div class="container">
        <!-- <div class="row mt-3">
          <div class="col-lg-12 col-md-12 col-sm-12 mt-3"> -->
          <!-- <a href="{{route('newsroom_details',$ev->id)}}"> <img src="{{asset($ev->banner)}}" style="width:100%;height: 400px;object-fit: cover;" alt="" ></a> -->
          
          <!-- </div>
        </div> -->
        <div class="mixitup-gallery">
                    <!--Filter-->
                   
                    <div class="filter-list row">
                        <!-- Gallery Item -->

                        <div class="gallery-item mix all branding web-design col-lg-12 col-md-12 col-sm-12">
                            <div class="inner-box">
                                <figure class="image" style="margin-top:55px!important;"><img src="{{asset($ev->banner)}}" style="width:100%;height: 400px;object-fit: cover;" alt=""></figure>
                                <!-- <a href="{{asset($ev->banner)}}" class="lightbox-image overlay-box"
                                    data-fancybox="gallery"></a> -->
                                <div class="cap-box">
                                    <div class="cap-inner">
                                        <!-- <div class="cat"><span>Graphic</span></div> -->
                                        <div class="title">
                                            <h5><a href="{{route('newsroom_details',$ev->id)}}">Load More</a></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
        </div>               
        
     <br>
    </div> 
</section>

  @endforeach
 
@endsection


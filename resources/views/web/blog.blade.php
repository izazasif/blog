@extends('layout.landing_main')
@section('content_web')

 <!--Services Section-->
            <section class="services-section" >
                   <div class="container">
                       <div class="row" >
                       <!-- <div class="image-layer"  style="background-image:url({{ url('/') }}/web/images/background/image-7.jpg);background-repeat: no-repeat;
                                          background-origin: content-box;height: 479px;"> -->
                            <div class="col-lg-6 col-lg-6 col-sm-12">
                                <div class="team-card-three">
                                   <div class="team-card-three__inner">
                                        <div class="team-card-three__image">
                                            <div class="image-layer"  style="background-image:url('{{ asset('website/' .$data[0]['image']) }}');background-repeat: no-repeat;
                                                    background-origin: content-box;height:417px;background-size:cover;">
                                                   <br>
                                                   <br>
                                                   <br>
                                                   <br>
                                                   <br>
                                                   <br>
                                                   <br>
                                                   <br>
                                                   <br>
                                                   <br>
                                                   
                                                     
                                                    <div class="row" style="width: 100%">
                                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                                        <a href="{{route('blog_details',$data[0]['slug'])}}">
                                                            <h6 style="margin-left:40px;line-height: .9;text-align:center;background-color: rgb(0 0 0 / 83%);color: white;top: -12px;padding-bottom: 12px;padding-top: 12px;">
                                                            {{$data[0]['blog_titile']}}
                                                            </h6> 

                                                        </a>     
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                                           
                                                        </div>
                                                    </div>
                                            </div>
                                            
                                        </div>
                                     
                                    </div>
                                   
                                </div>
                            </div>
                            <?php 
                             $description1 = strip_tags($data[1]['blog_description']);
                              ?>
                                    <div class="col-lg-6 col-lg-6 col-sm-12 ">
                         
                                    <div class="row" style="background-color:#f1ebeb;margin-left: auto; margin-right: auto;">
                                             <div class="col-lg-6 col-md-6 col-sm-12">
                                           <a href="{{route('blog_details',$data[1]['slug'])}}"> 
                                             <div  style="background-color:#f1ebeb;height: 200px;margin-left: -15px;margin-right: -15px;">
 
                                             <img src="website/{{ $data[1]['image'] }}" style="height: 200px;width: 370px;" alt="">
                                             </div> 
                                            
                                             </a>
                                           </div>
                                          <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="sidebar-widget call-up">
                                                    <div class="widget-inner" style="padding: 15px;margin-left: -13px;">
                                                        
                                                        <div class="sidebar-title" style="margin-bottom: -6px;">
                                                          <a href="{{route('blog_details',$data[1]['slug'])}}"> <h4 style="font-size: 22px;">{{$data[1]['blog_titile']}}</h4> </a> 
                                                        </div>
                                                        <div class="sidebar-title" style="margin-bottom: -7px;font-size: 10px;color: black;">
                                                            <p>{{$data[1]['writer_name']}} | {{ Carbon\Carbon::parse($data[1]['created_at'])->format('l j, Y') }}</p>
                                                        </div>
                                                        <a href="{{route('blog_details',$data[1]['slug'])}}"> 
                                                        <div class="text" style="text-align: justify;line-height: 1.3em;color: black;font-size: 12px;">
                                                           
                                                            {!! substr($description1,0, 120) !!}
                                                        </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            
                                          </div>

                                      </div>
                                       <div class="row mt-3" style="background-color:#f1ebeb;margin-left: auto; margin-right: auto;">
                                          <div class="col-lg-6 col-md-6 col-sm-12">
                                           <a href="{{route('blog_details',$data[2]['slug'])}}">
                                          <div  style="background-color:#f1ebeb;height: 200px;margin-left: -15px;margin-right: -15px;">

                                            <img src="website/{{ $data[2]['image'] }}" style="height: 200px;width: 370px;" alt="">
                                            </div> 
                                           
                                            </a>
                                          </div>
                                          <?php 
                                           $description = strip_tags($data[2]['blog_description']);
                                           ?>
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="sidebar-widget call-up">
                                                    <div class="widget-inner" style="padding: 15px;margin-left: -13px;">
                                                        
                                                        <div class="sidebar-title" style="margin-bottom: -6px;">
                                                          <a href="{{route('blog_details',$data[2]['slug'])}}"> <h4 style="font-size: 22px;">{{$data[2]['blog_titile']}}</h4> </a> 
                                                        </div>
                                                        <div class="sidebar-title" style="margin-bottom: -7px;font-size: 10px;color: black;">
                                                            <p>{{$data[2]['writer_name']}} | {{ Carbon\Carbon::parse($data[2]['created_at'])->format('l j, Y') }}</p>
                                                        </div>
                                                        <a href="{{route('blog_details',$data[2]['slug'])}}">
                                                        <div class="text" style="text-align: justify;line-height: 1.3em;color: black;font-size: 12px;">
                                                           
                                                            {!! substr($description,0, 120) !!}
                                                        </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                           
                                        </div>

                                    </div>
                            </div>
                        
                        </div>
                   </div>
        </section>
        
        <section class="sponsors-section" style="margin-top: 1px;"> 
            <div class="container">
                <h4>All Posts</h4>
                <div class="row" style="margin-top: -13px;">
                @foreach($data1 as $data)
                <?php 
                 $description = strip_tags($data->blog_description);
                
                ?>
                    <div class="col-md-12 col-lg-4">
                        <a href="{{route('blog_details',$data->slug)}}">
                        <div class="how-it-works-card text-center" >
                            <div class="how-it-works-card__inner" style="height: 461px;">
                            <img style="width: 100%; height: 200px;border-radius: 3px;object-fit:cover;" src="website/{{$data->image}}" alt="" >
                            <div class="sidebar-widget call-up">
                                <div class="widget-inner" style="padding: 15px;">
                                    <div class="sidebar-title" style="text-align: start;margin-bottom: -19px;font-size: 14px;">
                                            <p>{{ $data->writer_name}} | {{ Carbon\Carbon::parse($data->created_at)->format('l j, Y')  }}</p>
                                        </div>
                                        <div class="sidebar-title" style="text-align: start;margin-bottom: 7px;">
                                           <a href="{{route('blog_details',$data->slug)}}"> <h4 >{{ $data->blog_titile}}</h4></a>
                                        </div> 
                                        <div class="text" style="text-align: justify;line-height: 1.4em;">  {!! substr($description,0, 180) !!}</div>
                                        <div class="phone" style="text-align: start;"> <a href="{{route('blog_details',$data->slug)}}" class="how-it-works-card__link">Read More</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    </div>
                @endforeach
                <div>
            </div>    

            </section>
@endsection


@extends('layout.landing_main')
@section('content_web')
<div class="sidebar-page-container">
            <div class="auto-container">
                <div class="row clearfix">
                <?php 
                  $description = $data->blog_description;
                 $search = array("Powered by");
                 $replace = array(" ");
                 $new_string = str_replace($search, $replace, $description);
                 $search1 = array("Froala Editor");
                 $replace = array(" ");
                 $new_string1 = str_replace($search1, $replace, $new_string);
                 ?>
                    <!--Content Side-->
                    <div class="content-side col-lg-8 col-md-12 col-sm-12">
                        <div class="blog-details">
                            <!--News Block-->
                            <div class="post-details">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <img src="{{ asset('website/'.$data->image)}}" style="height:400px;object-fit:cover;" alt="">
                                    </div>
                                    <div class="lower-box" style="margin-top: -22px;">
                                        <div class="post-meta">
                                        <p>{{ $data->writer_name}} | {{ Carbon\Carbon::parse($data->created_at)->format('l j, Y')  }}</p>
                                        </div>
                                        <h4 style="margin-top: -13px;">{{$data->blog_titile}}</h4>
                                        <div class="text" style="line-height: 1.3em;margin-top: -26px;text-align:justify;">
                                            {!! $new_string1 !!}
                                           
                                        </div>
                                    </div>
                                </div>
                               
                            </div>
                          
                            

                        </div>
                    </div>

                    <!--Sidebar Side-->
                    <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                        <aside class="sidebar blog-sidebar">
                            <!--Sidebar Widget-->
                    
                            <div class="sidebar-widget recent-posts">
                                <div class="widget-inner">
                                    <div class="sidebar-title">
                                        <h4 style="top: -20px;">Latest Posts</h4>
                                    </div>
                                @foreach($data_latest as $item)
                                    <div class="post" >
                                     
                                        <img src="{{asset('website/'.$item->image)}}" alt=""
                                class="rounded-circle" style="height: 75px;width: 75px;margin-top:-35px;margin-top: -34px;margin-left: -99px;">
                                        <h5 class="text" style="font-size: 19px;top: -59px;"><a href="{{route('blog_details',$item->slug)}}">{{$item->blog_titile}}</a></h5>
                                    </div>
                                @endforeach
                 

                                </div>
                            </div>
                          

                            


                        </aside>
                    </div>

                </div>
            </div>
        </div>
@endsection        
@extends('layout.landing_main')
@section('content_web')
<section class="page-banner">
<br>
<br>
        <div class="container">
          <br>
          @foreach($data as $news)
            <a href="{{route('newsroom_details')}}"><h4 style="color:white;margin-left:4px;">{{$news->newsroom_title}}</h4></a> 
             <div class="row">
                <div class="col-lg-12">
                   <div  style="background-color:#f1ebeb;height: 100%;margin-left: 4px;margin-right: 4px;">
                   <a href=""><img src="{{$news->banner}}" alt="" style="width:100%;height:200px;"></a>  
                    <!-- <img src="{{ url('/') }}/web/images/update-09-06-2021/events/event-1-1.jpg" alt="" style="width:170%;height: 100%;"> -->
                   </div>
                </div>
              </div>
            </div>
           @endforeach 
        </div>  
  </section>
 
@endsection


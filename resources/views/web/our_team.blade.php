@extends('layout.landing_main')
@section('content_web')

   <section class="page-banner">
            <div class="image-layer" style="background-image:url(images/background/image-7.jpg);"></div>
            <div class="shape-1"></div>
            <div class="shape-2"></div>
            <div class="banner-inner" style="height:415px;">
                <div class="auto-container">
                    <div class="inner-container clearfix">
                        <h1 style="margin-top: -35px;!importance;font-size: 74px;">Our Leadership Team  </h1>
                        
                    </div>
                </div>
            </div>
    </section>
        <section class="team-three team-three__about-two" style="padding-top: 30px;">
            <div class="container">
                <div class="row">
                  @foreach($data as $team_leader1)
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="team-card-three">
                        <div class="team-card-three__image">
                                    <img src="{{$team_leader1->image}}" style="height: 310px;border-radius: initial;object-fit:cover;" alt="">
                                </div>
                            
                                

                                <div class="about-leader-team" style="background-color: white;height:100%;">
                                     <div class="row">

                                     <div class="col-lg-12 col-sm-12 col-md-6">
                                     <h6 style="text-align:left;top: 11px;;margin-left: 13px;">{{$team_leader1->members_name}}</h6>
                                     </div>
                                     <div class="col-lg-12 col-sm-12 col-md-6">
                                     <p style="text-align:right;margin-top: -17px;margin-right: 12px;height:44px;">{{$team_leader1->members_designation}}</p>
                                     </div>
                                      
                                   
                                     </div>
                                    <!-- <div class="text" style="text-align:justify;margin-left: 13px;margin-right: 12px;!important;line-height: 1.3em;margin-top: 10px;">
                                    
                                    {!! nl2br(strip_tags(Illuminate\Support\Str::words($team_leader1->members_description,30))) !!} 
                                   </div> -->
                                </div>
                           
                        </div>
                    </div>
                   @endforeach 
                    
                
                </div> 
            </div><!-- /.auto-container -->

     

            <div class="container">
                <div class="row">
                @foreach($data1 as $team_leader2)
                    <div class="col-lg-3 col-md-4 col-sm-12">
                        <div class="team-card-three">
                        <div class="team-card-three__image">
                                    <img src="{{$team_leader2->image}}" alt="">
                                </div>
                            <div class="team-card-three__inner">
                                

                                <div class="about-leader-team" style="height:100%;">
                                     <div class="row">

                                     <div class="col-lg-12 col-sm-12 col-md-6">
                                     <h6 style="text-align:left;font-size:18px;margin-top: 13px;margin-left: 7px;" >{{$team_leader2->members_name}}</h6>
                                     <p style="text-align:left;margin-top: 3px;font-size:13px;margin-left: 9px; height: 39px;" >{{$team_leader2->members_designation}}</p>
                                     </div>
                                      
                                     </div>
                                     
                                    <!-- <div class="text" style="text-align:justify;font-size:13px;margin-left: 8px;!important;line-height: 1.5em;margin-top: -27px;">
                                   
                                    {!! nl2br(strip_tags(Illuminate\Support\Str::words($team_leader2->members_description,20))) !!} 
                                   </div> -->
                                </div>
                            </div> 
                        </div>
                    </div>  
                @endforeach 
                </div> 
            </div><!-- /.auto-container -->
        </section>

        
@endsection


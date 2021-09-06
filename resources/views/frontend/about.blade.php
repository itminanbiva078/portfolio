@extends('../layout/front')
@section('title')
@endsection
@push('css')
@endpush('')
@section('content')
        <div class="page-area" style="background-image: url('{{asset('public/front_asset/img/background/about_bg.jpg')}}')">

            <div class="breadcumb-overlay" ></div>

<!-- style=" background-image: url('{{asset('images/cover.jpg')}}');"
 -->
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="breadcrumb">
                            <div class="bread-inner">
                            	<div class="section-headline white-headline">
									<h2>About us</h2>
								</div>
								<ul class="breadcrumb-bg">
									<li class="home-bread"><a href="{{url('/')}}">Home</a></li>
									<li><a href="{{url('/about')}}">About us</a></li>
								</ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End breadcumb Area -->
        
        <!-- about-area start -->
        <div class="about-area bg-color area-padding">
            <div class="container">
                @foreach($abouts as $about)
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="about-image">
                        <img src="{{ asset ('uploads/about').'/'.$about->about_img }}" alt="">
                        </div>
                    </div>
                    <!-- column end -->
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="about-content">
                            <h5 class="sub-title">Who are we</h5>
							<h3>{{$about->about_title}}</h3>
                            <p>{{$about->about_description}}</p>
                            
                        </div>
                    </div>
                    <!-- column end -->
                </div> 
                @endforeach
            </div>
        </div>
        <!-- about-area end -->





<div class="work-station-area area-padding">
            <div class="container">
                <div class="row">
                    <!-- single-well end-->
                    <div class="col-md-12 col-sm-12 col-xs-12">
    @forelse($serv as $servic)

                        <div class="single-station">
                           <div class="top-content">
                               <div class="station-images">
                                   <img src="{{ asset ('public/front_asset/img/service/').'/'.$servic->service_img}}" alt="">
                                   <div class="image-text">
                                        <h4>{{$servic->img_title}} </h4>
                                       <span>{{$servic->service_location}}</span>
                                   </div>
                               </div>
                           </div>
                           <div class="main-station text-center">
                                <div class="station-img">
                                    <a href="#"><i class="{{$servic->service_icon}}"></i></a>
                                </div>
                                <div class="station-content">
                                   <h4>{{$servic->service_title}}</h4>
                                    <p>{{$servic->service_description}}</p>
                                    <a class="station-btn" href="#">Know more</a>
                                </div>
                            </div>
                        </div>
                          @empty
                    @endforelse
                    </div>
                    <!-- single-well end-->
                    
                    <!-- single-well end-->
                </div>
            </div>
           
        </div>

        <!-- start Brand area -->
        <div class="brand-area bg-color fix area-padding">
            <div class="container">
                <div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="section-head text-center">
                            <h5 class="sub-title">Our Clients</h5>
						    <h3>Best <span class="color">Clients</span></h3>
						</div>
					</div>
				</div>
                <div class="row">
                    @forelse($clients as $client)
                    <div class="brand-content">
                        
                        <div class="brand-items">
                            <div class="single-brand-item">
                                <a href="#"><img src="{{ asset ('public/front_asset/img/brand/').'/'.$client->logo_img}}" alt=""></a>
                            </div>
                        </div>
                    </div>
                     @empty
                     <div class="testi-item">
                         No Brand Found
                        </div>
                     @endforelse
                </div>
            </div>
        </div>
        <!-- End Brand area -->


        <!-- Start Banner Area -->
        <div class="team-area color-bg area-padding">
            <div class="container">
                <div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="section-head text-center">
         <h5 class="sub-title">Our Experts</h5>
						    <h3>Our <span class="color">Teams</span></h3>
						</div>
					</div>
				</div>
                <div class="row">
                    <div class="team-wraper">
                        <div class="team-inner">
                            <!-- Start Single team -->
                            @forelse($teams as $team)
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="single-team">
                                    <div class="team-img">
                                        <img src="{{asset ('uploads').'/'.$team->team_img}}" alt="">
                                    </div>
                                    <div class="team-content">
                                        <div class="team-data">
                                            <h4>{{$team->team_name}}</h4>
                                            <span>{{$team->team_designation}}</span>
                                        </div>
                                        <div class="team-text">
                                            <p>{{$team->team_description}}</p>
                                        </div>
                                        <div class="team-social">
                                            <ul>
                                                <li>
                                                    <a href="{{$team->team_social_link_1}}">
                                                        <i class="fa fa-facebook"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{$team->team_social_link_2}}">
                                                        <i class="fa fa-twitter"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{$team->team_social_link_3}}">
                                                        <i class="fa fa-google"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{$team->team_social_link_4}}">
                                                        <i class="fa fa-instagram"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @empty
                           @endforelse
                            
                                </div>
                            </div>
                            <!-- End Single team -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection  
@push('js')
@endpush     
		
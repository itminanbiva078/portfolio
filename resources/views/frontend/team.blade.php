@extends('../layout/front')
@section('title')
@endsection
@push('css')
@endpush('')
@section('content')
        <div class="page-area" style="background-image: url('{{asset('public/front_asset/img/background/about_bg.jpg')}}')">
            <div class="breadcumb-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="breadcrumb">
                            <div class="bread-inner">
                            	<div class="section-headline white-headline">
									<h2>Our team</h2>
								</div>
								<ul class="breadcrumb-bg">
									<li class="home-bread"><a href="{{url('/')}}">Home</a></li>
									<li><a href="{{url('/team')}}">teams</a></li>
								</ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End breadcumb Area -->
        <!-- Start Banner Area -->
        <div class="team-area area-padding">
            <div class="container">
                <div class="row">
                    <div class="team-wraper">
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
@foreach(App\Models\Front\Team_Social_Link::select('*')->where('team_id',$team->id)->get() as $social)
                                                <li>
                                                    <a href="{{$social->team_social_link_1}}">
                                                        <i class="fa fa-facebook"></i>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="{{$social->team_social_link_2}}">
                                                        <i class="fa fa-facebook"></i>
                                                    </a>
                                                </li>
                                                @endforeach
                                               
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
            </div>
        </div>
        @endsection
        @push('js')
        @endpush
@extends('../layout/front')
@section('title')
@endsection
@push('css')
@endpush
@section('content')
 <div class="page-area" style="background-image: url('{{asset('public/front_asset/img/background/about_bg.jpg')}}')">
            <div class="breadcumb-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="breadcrumb">
                            <div class="bread-inner">
                                <div class="section-headline white-headline">
                                    <h2>Services</h2>
                                </div>
                                <ul class="breadcrumb-bg">
                                    <li class="home-bread"><a href="{{url('/')}}">Home</a></li>
                                    <li><a href="{{url('/services')}}">Services</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="services-area area-padding">
            <div class="container">
                <div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="section-head text-center">
                            <h5 class="sub-title">Our offer</h5>
						    <h3>Our <span class="color">Services</span></h3>
						</div>
					</div>
				</div>
                <div class="row">
                    <div class="services-wrapper">
                        <!-- single-well end-->
                       @forelse($ser as $service)
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="single-services">
                               <div class="main-services">
                                    <div class="services-img">
                                        <a href="#"><i class="{{$service->service_icon}}"></i></a>
                                    </div>
                                    <div class="service-content">
                                        <h4>{{$service->title}}</h4>
                                        <p>{{$service->service_description}}</p>
                                        <a class="services-btn" href="#">Know more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @empty
                        @endforelse
                        <!-- single-well end-->
                    </div>
                </div>
            </div>
        </div>
  @endsection
      @push('js')
      @endpush
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
									<h2>Clients Reviews</h2>
								</div>
								<ul class="breadcrumb-bg">
									<li class="home-bread"><a href="{{url('/')}}">Home</a></li>
									<li><a href="{{url('/review')}}">Reviews</a></li>
								</ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End breadcumb Area -->
       <!--Reviews Area Start-->
		<div class="testimonial-area area-padding">
			<div class="container">
				<div class="row">
                    <div class="Reviews-content">
						<!-- start testimonial carousel -->
						<div class="review-inner">
						    <!-- Start single item -->
						    @forelse($reviews as $review)
							<div class="col-md-6 col-sm-6 col-xs-12">
								<div class="single-testi">
									<div class="testi-img ">
										<img src="{{ asset ('uploads/review').'/'.$review->client_img}}" alt="">
									</div>
									<div class="testi-text">
										<p>{{$review->client_speach}}</p>
										<div class="texti-name">
											<h4>{{$review->client_name}}</h4>
											<span class="guest-rev">{{$review->client_designation}}</span>
										</div>
									</div>
								</div>
							</div>
							@empty
							@endforelse
						</div>
					</div>
				</div>
			</div>
		</div>
  @endsection
  @push('js')
  @endpush
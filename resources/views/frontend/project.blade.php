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
									<h2>Project</h2>
								</div>
								<ul class="breadcrumb-bg">
									<li class="home-bread"><a href="{{url('/')}}">Home</a></li>
									<li><a href="{{url('/project')}}">Project</a></li>
								</ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End breadcumb Area -->
         <!-- Start portfolio Area -->
		<div class="portfolio-area area-padding">
			<div class="container">
				<div class="row">
                    <div class="portfolio-content">
                        <!-- single-awesome-project start -->
                        <div class="portfolio-single all-padding">
                            <div class="single-awesome-project">
                                <div class="awesome-img">
                                    <a class="venobox" data-gall="myGallery" href="img/project/default/1.jpg">
                                        <img src="{{ asset ('public/front_asset/img/project/default/1.jpg')}}" alt="" />
                                        <div class="add-actions text-center">
                                            <div class="project-dec">
                                                <h4>Creative design project</h4>
                                                <span>Web ,</span>
                                                <span>Creative</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- single-awesome-project end -->
                    </div>
				</div>	
			</div>
			<!-- End main content -->
		</div>
@endsection
@push('js')
@endpush
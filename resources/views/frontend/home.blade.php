@extends('../layout/front')
@section('title')
@endsection
@push('css')
@endpush('')
@section('content')

		<!-- Start Slider Area -->
		<div class="slide-area fix" data-stellar-background-ratio="0.6" style="background-image: url('{{asset('public/front_asset/img/background/about_bg.jpg')}}')">
            <div class="display-table">
                <div class="display-table-cell">
					<div class="container">
						<div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                            
                                <!-- Start Slider content -->
                                <div class="intro-content">
                                    @foreach($homes as $home)
                                    <div class="slide-content">
                                        <h1 class="title2">{{$home->title}} <span class="color"></span></h1>
                                        <p>{{$home->description}}</p>
                                        <div class="slider-button">
                                            <a class="slide-btn" href="{{url('/contact')}}">Contact us</a>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                
                                <!-- End Slider content -->
						    </div>
						</div>
					</div>
				</div>
            </div>
		</div>
		<!-- End Appointment Area -->
		<!-- about-area start -->
        <div class="about-area bg-color area-padding">
            <div class="container">
                <div class="row">
                  @foreach($abouts as $about)
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
                    @endforeach
                    <!-- column end -->
                </div>
            </div>
        </div>
        <!-- about-area end -->



        <!-- Welcome service area start -->
        <div class="work-station-area area-padding">
            <div class="container">
                <div class="row">
                    @forelse($serv as $servic)
                    <!-- single-well end-->
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="single-station">
                           <div class="top-content">
                               <div class="station-images">
                                   <img src="{{ asset ('public/front_asset/img/service/').'/'.$servic->service_img}}" alt="">
                                   <div class="image-text">
                                       <h4>{{$servic->img_title}}</h4>
                                       <span>{{$servic->service_location}}</span>
                                   </div>
                               </div>
                           </div>
                           <div class="main-station text-center">
								<div class="station-img">
									<a href="#"><i class="flaticon-television"></i></a>
								</div>
								<div class="station-content">
									<h4>{{$servic->service_title}}</h4>
									<p>{{$servic->service_description}}</p>
									<a class="station-btn" href="#">Know more</a>
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
        <!-- Welcome service area End -->




        <!-- service area start -->
        <div class="services-area bg-color area-padding">
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
        <!-- service area End -->
        





        <!-- Start portfolio Area -->
		<div class="portfolio-area fix area-padding">
			<div class="container-full">
			    <div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="section-head text-center">
                            <h5 class="sub-title">Our work</h5>
						    <h3>Best <span class="color">Projects</span></h3>
						</div>
					</div>
				</div>
				<div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="portfolio-content">
                            <!-- single-awesome-project start -->
                            <div class="portfolio-single all-padding">
                                <div class="single-awesome-project">
                                    <div class="awesome-img">
                                        <a class="venobox" data-gall="myGallery" href="img/project/default/1.jpg">
                                            <img src="img/project/default/1.jpg" alt="" />
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
      			</div>
			<!-- End main content -->
		</div>



    
		<!-- End portfolio Area --> 
        <!-- Start Team Banner area -->
        <div class="banner-area fix area-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                      @foreach($generals as $general)
                        <div class="banner-content">
                            <div class="banner-text text-center">
                               <h2>{{$general ->hire_title}}</h2>
                               <a class="hire-btn" href="#">Hire us</a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <!-- End Team Banner area -->
        
        
        <!-- Start contact Area -->
        <div class="contact-page area-padding">
            <div class="container">
               <div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="section-head text-center">
                            <h5 class="sub-title">Our contact</h5>
						    <h3>Contact <span class="color">us</span></h3>
						</div>
					</div>
				</div>
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="contact-head">
                            <h3>Request a Contact us</h3>
                            <p>Water The universal acceptance of website has given a tremendous opportunity for merchants to do crossborder transactions instantly and at reduced cost.</p>
                            <div class="contact-icon">
                               @foreach($generals as $general)
								<div class="single-contact">
									<h5>Location :</h5>
									<a href="#"><i class="fa fa-map"></i><span>{{$general ->company_add}}</span></a>
									<a href="#"><i class="fa fa-phone"></i><span>{{$general ->company_phone }}</span></a>
									<a href="#"><i class="fa fa-envelope"></i><span>{{$general ->company_email }}</span></a>
								</div>
                @endforeach
							</div>
                        </div>
                    </div>
                    <!-- End contact icon -->
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="contact-form">
                            <div class="row">
                                <form id="contactForm" method="POST" action="http://rockstheme.com/rocks/monata-live/monata/contact.php" class="contact-form">
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="name" class="form-control" placeholder="Name" required data-error="Please enter your name">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="email" class="email form-control" id="email" placeholder="Email" required data-error="Please enter your email">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <input type="text" id="msg_subject" class="form-control" placeholder="Subject" required data-error="Please enter your message subject">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <textarea id="message" rows="7" placeholder="Massage" class="form-control" required data-error="Write your message"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                                        <button type="submit" id="submit" class="contact-btn">Submit</button>
                                        <div id="msgSubmit" class="h3 text-center hidden"></div> 
                                        <div class="clearfix"></div>
                                    </div>   
                                </form>  
                            </div>
                        </div>
                    </div>
                    <!-- End contact Form -->
                </div>
            </div>
        </div>
        
        @endsection
		@push('js')
        @endpush
	

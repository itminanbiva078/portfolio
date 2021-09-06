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
                                    <h2>Contact us</h2>
                                </div>
                                <ul class="breadcrumb-bg">
                                    <li class="home-bread"><a href="{{url('/')}}">Home</a></li>
                                    <li><a href="{{url('/contact')}}">Contacts</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End breadcumb Area -->
        <!-- Start map Area -->
        <div class="map-area bg-color area-padding">
            <div class="container">
                <div class="row">
                    <!-- Start contact icon column -->
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <!-- Start Map -->
                        <div class="map-main">
                                     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3645.782325122701!2d91.11527091438985!3d23.968136284482455!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x37540594459e9af1%3A0xf88d7b5a1d173de5!2sPower%20House%20Rd%2C%20Brahmanbaria!5e0!3m2!1sen!2sbd!4v1611312175431!5m2!1sen!2sbd" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        </div>
                        <!-- End Map -->
                    </div>
                </div>
            </div>
        </div>
        <div class="contact-page area-padding">
            <div class="container">
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
                                <form  method="POST" action="{{url('/form')}}" class="contact-form">
                                    @csrf
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" class="form-control" placeholder="Name" required data-error="Please enter your name" name="name">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="email" class="email form-control" placeholder="Email" required data-error="Please enter your email" name="eamil">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <input type="text" class="form-control" placeholder="Subject" required data-error="Please enter your message subject" name="subject">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <textarea  rows="7" placeholder="Massage" class="form-control" required data-error="Write your message" name="message"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                                        <button type="submit"  value="submit" class="contact-btn">Submit</button>
                                        <div class="h3 text-center hidden"></div> 
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
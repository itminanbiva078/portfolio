    <header>
            <!-- header-area start -->
            <div id="sticker" class="header-area hidden-xs">
                <div class="container">
                    <div class="row">
                        <!-- logo start -->
                        <div class="col-md-3 col-sm-3">
                             @foreach(App\Models\Front\General::all() as $side)
                            <div class="logo">
                                <!-- Brand -->
                                <a class="navbar-brand page-scroll" href="{{url('/')}}">
                                    <img src="{{ asset ('public/front_asset/img/logo/').'/'.$side->logo_img}}" alt="">
                                </a>
                            </div>
                            @endforeach
                        </div>
                        <!-- logo end -->
                        <div class="col-md-9 col-sm-9">
                            <div class="header-right-link">
                                <!-- search option start -->
                                <form action="#">
                                    <div class="search-option">
                                        <input type="text" placeholder="Search...">
                                        <button class="button" type="submit"><i class="fa fa-search"></i></button>
                                    </div>
                                    <a class="main-search" href="#"><i class="fa fa-search"></i></a>
                                </form>
                                <!-- search option end -->
                                <div class="slice-btn"><span class="icon icon-menu"></span></div>
                            </div>
                            <!-- mainmenu start -->
                            <nav class="navbar navbar-default">
                                <div class="collapse navbar-collapse" id="navbar-example">
                                    <div class="main-menu">
                                        <ul class="nav navbar-nav navbar-right">
                                            <li><a class="pagess" href="{{url('/')}}">Home</a>
                                                
                                            </li>
                                            <li><a class="pagess" href="#">About us</a>
                                                <ul class="sub-menu">
                                                    <li><a href="{{url('/about')}}">About us</a></li>
                                                    <li><a href="{{url('/team')}}">Team</a></li>
                                                    <li><a href="{{url('/review')}}">Review</a></li>
                                                    
                                                </ul>
                                            </li>
                                            <li><a class="pagess" href="{{url('/services')}}">Services</a>
                                               
                                            </li>
                                            <li><a class="pagess" href="{{url('/project')}}">Projects</a>
                                                
                                            </li>
                                            
                                            <li><a href="{{url('/contact')}}">contacts</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </nav>
                            <!-- mainmenu end -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- header-area end -->
            <!-- mobile-menu-area start -->
            <div class="mobile-menu-area hidden-lg hidden-md hidden-sm">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mobile-menu">
                                <div class="logo">
                                    <a href="{{url('/')}}"><img src="{{ asset ('public/front_asset/img/logo/logo.png') }}" alt="" /></a>
                                </div>
                                <nav id="dropdown">
                                    <ul>
                                         <li><a class="pagess" href="{{url('/')}}">Home</a>
                                                
                                            </li>
                                            <li><a class="pagess" href="{{url('/about')}}">About us</a>
                                                <ul class="sub-menu">
                                                    <li><a href="{{url('/about')}}">About us</a></li>
                                                    <li><a href="{{url('/team')}}">Team</a></li>
                                                    <li><a href="{{url('/review')}}">Review</a></li>
                                                    
                                                </ul>
                                            </li>
                                            <li><a class="pagess" href="{{url('/services')}}">Services</a>
                                                <ul class="sub-menu">
                                                    <li><a href="{{url('/services')}}">All Services</a></li>
                                                    <li><a href="{{url('services_details')}}">Services Details</a></li>
                                                </ul>
                                            </li>
                                            <li><a class="pagess" href="{{url('/project')}}">Projects</a>
                                                
                                            </li>
                                            
                                            <li><a href="{{url('/contact')}}">contacts</a></li>
                                    </ul>
                                </nav>
                            </div>                  
                        </div>
                    </div>
                </div>
            </div>
            <!-- mobile-menu-area end -->       
        </header>
        <!-- header end -->
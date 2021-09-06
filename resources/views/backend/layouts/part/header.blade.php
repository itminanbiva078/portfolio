     <!-- header area -->
            <header class="header_area">
                <!-- logo -->
                <div class="sidebar_logo">
                    <a href="index.html">
  <img src="{{asset('public/backend_asset/panel/assets/images/logo.png')}}" alt="" class="img-fluid logo1">
   <img src="{{asset('public/backend_asset/panel/assets/images/logo_small.png')}}" alt="" class="img-fluid logo2">
                    </a>
                </div>
                <div class="sidebar_btn">
                    <button class="sidbar-toggler-btn"><i class="fas fa-bars"></i></button>
                </div>
                <ul class="header_menu">
                    <li><a href="#" class="search_btn" data-toggle="modal" data-target="#myModal"><i class="fas fa-search"></i></a>
                        <div class="modal fade search_box" id="myModal">
                              <button type="button" class="close m-2 text-white float-right" data-dismiss="modal">&times;</button>
                              
                        </div>
                    </li>
                   
                    
                    <li><a data-toggle="dropdown" href="#"><i class="far fa-user"></i></a>
                            <div class="user_item dropdown-menu dropdown-menu-right">
                                <div class="admin">
                                    <a href="#" class="user_link"><img src="{{asset('public/backend_asset/panel/assets/images/admin1.jpg')}}" alt=""></a>
                                </div>
                            <ul>
                                
                                
                                <li>

                                    <a href="{{ route('logout') }}"><span><i class="fas fa-unlock-alt"></i></span> Logout</a></li>
                           
                        </div>
                    </li>
                    <li>

                        <a class="responsive_menu_toggle" href="#"><i class="fas fa-bars"></i></a></li>
                </ul>
            </header><!-- / header area -->
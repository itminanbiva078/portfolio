
<!doctype html>
<html class="no-js" lang="en">
    
<!-- Mirrored from rockstheme.com/rocks/monata-live/monata/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Jan 2021 04:52:53 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>@yield('title')</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
@include('layout.part.style')
      
    </head>
    <body class="light-version">
       
        <div id="preloader"></div>
        <!-- header start -->
       @include('layout.part.header')        
       <!-- header end -->
        <div class="layer-drop"></div>
        <!--Appointment Box-->
              @include('layout.part.side')
        <!--End contact Form-->
        <!-- Start Slider Area -->
       
        
        @yield('content')
        <!-- Start Footer bottom Area -->
         @include('layout.part.footer') 

        <!-- all js here -->
 @include('layout.part.jsfile') 
        <!-- jquery latest version -->
        
    </body>

<!-- Mirrored from rockstheme.com/rocks/monata-live/monata/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Jan 2021 04:52:53 GMT -->
</html>


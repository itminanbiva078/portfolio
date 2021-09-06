<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="{{asset('public/backend_asset/panel/assets/images/favicon.png')}}" >
        <!--Page title-->
        <title>Admin easy Learning</title>
        <!--bootstrap-->
        <link rel="stylesheet" href="{{asset('public/backend_asset/panel/assets/css/bootstrap.min.css')}}">
        <!--font awesome-->
        <link rel="stylesheet" href="{{asset('public/backend_asset/panel/assets/css/all.min.css')}}">
        <!-- metis menu -->
        <link rel="stylesheet" href="{{asset('public/backend_asset/panel/assets/plugins/metismenu-3.0.4/assets/css/metisMenu.min.css')}}">
        <link rel="stylesheet" href="{{asset('public/backend_asset/panel/assets/plugins/metismenu-3.0.4/assets/css/mm-vertical-hover.css')}}">
        <!-- chart -->
   
        <!-- <link rel="stylesheet" href="assets/plugins/chartjs-bar-chart/chart.css"> -->
        <!--Custom CSS-->
        <link rel="stylesheet" href="{{asset('public/backend_asset/panel/assets/css/style.css')}}">
    </head>
    <body id="page-top">
        <!-- preloader -->
        <div class="preloader">
            <img src="{{asset('public/backend_asset/panel/assets/images/preloader.gif')}}" alt="">
        </div>
        <!-- wrapper -->
      
        <div class="wrapper">
         
       @include('backend.layouts.part.header')   
   @include('backend.layouts.part.sideber')
         

@yield('content')

 @include('backend.layouts.part.footer')
     
</div>

    </body>
</html>
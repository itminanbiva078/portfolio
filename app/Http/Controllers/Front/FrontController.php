<?php

namespace App\Http\Controllers\Front;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Models\Front\Home;
use App\Models\Front\About;
use App\Models\Front\General;
use App\Models\Front\Client;
use App\Models\Front\Team;
use App\Models\Front\Team_Social_Link;
use App\Models\Front\Review;
use App\Models\Front\Servive;
use App\Models\Front\Service_Cat;
use App\Models\Front\Project;
use App\Models\Front\Contact_form;

class FrontController extends Controller
{
    public function index()
    {
        $homes = Home::all();
         $abouts = About::all();
         $generals = General::all();
         $ser=Service_Cat::all();
           $serv =Servive::all();
           
    	return view('frontend.home',compact('homes','abouts','generals','ser','serv'));
    }

    public function about()
    {
       $abouts = About::all();
       $clients =Client::all();
       $teams =Team::all();
       $serv =Servive::all();
      
    	return view('frontend.about',compact('abouts','clients','teams','serv'));
    }
    public function team()
    {
         $teams =Team::all();
         
    	return view('frontend.team',compact('teams'));
    }
     public function review()
    {
        $reviews=Review::all();
    	return view('frontend.review',compact('reviews'));
    }
    
    public function services()
    {
        $ser=Service_Cat::all();
    	return view('frontend.services',compact('ser'));
    }
public function project()
    {
    	return view('frontend.project');
    }
    public function contact()
    {
         $generals = General::all();
    	return view('frontend.contact',compact('generals'));
    }
    public function form(Request $req)
    {
      $generals = General::all();

        $form = New Contact_form;
        $form->name=$req->name;
        $form->eamil=$req->eamil;
        $form->subject=$req->subject;
        $form->message=$req->message;
        $form->save();

        return view('frontend.contact',compact('generals'));
    }
   
}

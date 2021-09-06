<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\About;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $data=About::all();
       return view('backend.about',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     return view('backend.about');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $file=$request->file('about_img');
        $file->move('uploads/about',time().'_'.$file->getClientOriginalName());
       About::create(array(
        'about_title'=>$request->about_title,
        'about_description'=>$request->about_description,
   ));
   return redirect('/back_about') ;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=About::find($id);
        return view('backend.about_edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
       $d= array(
        'about_title'=>$request->about_title,
        'about_description'=>$request->about_description,
        'about_img'=>$request->about_img
   );
        $file=$request->file('about_img');
        if ( $file) {
           $dd=About::find($id);
           unlink('./uploads/about/'.$dd->about_img);
            $file->move('uploads/about',time().'_'.$file->getClientOriginalName());
            $d['about_img']=time().'_'.$file->getClientOriginalName();
         }
         About::where('id',$id)->update($d);
           return redirect('/back_about') ;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $data=About::FindOrFail($id);
      $data->delete();
       return redirect('/back_about') ;
    }
}

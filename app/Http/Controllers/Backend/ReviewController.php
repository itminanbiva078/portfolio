<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Review;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Review::all();
       return view('backend.review',compact('data'));
    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('backend.review');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $file=$request->file('client_img');
      $file->move('uploads/review',time().'_'.$file->getClientOriginalName());
      Review::create(array(
        'client_name'=> $request->client_name,
        'client_designation'=> $request->client_designation,
        'client_speach'=> $request->client_speach,
        'client_img'=>time().'_'.$file->getClientOriginalName(),
      ));
      return redirect('/back_review');
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
        $data=Review::find($id);
        return view('backend.review_edit',compact('data'));
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
       $d=array(
        'client_name'=> $request->client_name,
        'client_designation'=> $request->client_designation,
        'client_speach'=> $request->client_speach,
        'client_img'=> $request->client_img,
       );
             $file=$request->file('client_img');
             if ($file) {
              $dd=Review::find($id);
              unlink('./uploads/review/'.$dd->client_img);
            $file->move('uploads/review',time().'_'.$file->getClientOriginalName());
            $d['client_img']=time().'_'.$file->getClientOriginalName();
             }
             Review::where('id',$id)->update($d);
                   return redirect('/back_review');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=Review::findOrFail($id);
        $data->delete();
     return redirect('/back_review');
    }
}

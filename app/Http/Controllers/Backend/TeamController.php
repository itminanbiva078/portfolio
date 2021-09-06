<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Team;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $data=Team::all();
       return view('backend.team',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.team');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file=$request->file('team_img');
        $file->move('uploads',time().'_'.$file->getClientOriginalName());

       $data=Team::create(array(
        'team_name'=>$request->team_name,
        'team_designation'=>$request->team_designation,
        'team_description'=>$request->team_description,
        'team_icon'=>$request->team_icon,
        'team_img'=>time().'_'.$file->getClientOriginalName(),
       ));
    return redirect('/back_team');
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
        $data=Team::find($id);
        return view('backend.team_edit',compact('data'));
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
             'team_name'=>$request->team_name,
        'team_designation'=>$request->team_designation,
        'team_description'=>$request->team_description,
        'team_icon'=>$request->team_icon,
         );

 $file=$request->file('team_img');
          if($file) {
              $dd=Team::find($id);
              unlink('./uploads/'.$dd->team_img);
              $file->move('uploads',time().'_'.$file->getClientOriginalName());
            $d['team_img']=time().'_'.$file->getClientOriginalName();
          }
          Team::where('id',$id)->update($d);
          return redirect('/back_team');
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $data=Team::FindOrFail($id);
      $data->delete();
       return redirect('/back_team');

    }
}

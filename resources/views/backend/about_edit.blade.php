@extends('backend.layouts.app')
@section('content')
 <section class="table_area">
 <form action="{{url('/back_about/'.$data->id)}}" method="post" enctype="multipart/form-data">
  <input type="hidden" name="_method" value="PATCH">
  @csrf
     
               <div class="col-md-6">
               	<div class="form-group">
                    <label></label>
                    <input type="hidden" name="_method" class="form-control" value="PATCH" required>
                  </div>
                  <div class="form-group">
                    <label>Title</label>
                    <input type="text" name="about_title" class="form-control" value="{{$data->about_title}}" required>
                  </div>
                  <div class="form-group">
                    <label>Description</label>
                    <textarea name="about_description" cols="10" rows="4" class="form-control" value="">{{$data->about_description}}</textarea>
                  </div>
					<div class="form-group">
                    <label>Photo</label>
                    <input type="file" name="about_img" class="form-control" value="{{$data->about_img}}" required>
                  </div>
					
              </div>
              <div class="form-group">
                    <label></label>
                    <input type="submit" class="btn btn-primary btn-block" value="Submit" required>
                  </div>

    </form>

@endsection
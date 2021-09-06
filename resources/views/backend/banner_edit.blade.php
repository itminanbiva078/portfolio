@extends('backend.layouts.app')
@section('content')
 <section class="table_area">
 <form action="{{url('/banner/'.$data->id)}}" method="post" enctype="multipart/form-data">
  @csrf
     
               <div class="col-md-6">
               	<div class="form-group">
                    <label></label>
                    <input type="hidden" name="_method" class="form-control" value="PATCH" required>
                  </div>
                  <div class="form-group">
                    <label>Title</label>
                    <input type="text" name="title" class="form-control" value="{{$data->title}}" required>
                  </div>
                  <div class="form-group">
                    <label>Description</label>
                    <textarea name="description" cols="10" rows="4" class="form-control" value="">{{$data->description}}</textarea>
                  </div>
					<div class="form-group">
                    <label>Photo</label>
                    <input type="file" name="bg_img_header" class="form-control" value="{{$data->bg_img_header}}" required>
                  </div>
					
              </div>
              <div class="form-group">
                    <label></label>
                    <input type="submit" class="btn btn-primary btn-block" value="Submit" required>
                  </div>

    </form>

@endsection
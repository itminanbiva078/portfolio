 @extends('backend.layouts.app')
@section('content')

               <section class="table_area">
               <form action="{{url('/back_team/'.$data->id)}}" method="post" enctype="multipart/form-data">
                <input type="hidden" name="_method" value="PUT">
  @csrf
  <div class="col-xs-12 col-md-12">
               <div class="col-md-6">
                  <div class="form-group">
                   <label>Name</label>
                    <input type="text" name="team_name" class="form-control" value="{{$data->team_name}}" required>
                  </div> 
                  <div class="form-group">
                   <label>Designation</label>
                    <input type="text" name="team_designation" class="form-control" value="{{$data->team_designation}}" required>
                  </div> 
                  <div class="form-group">
                    <label>Description</label>
                    <textarea name="team_description" cols="10" rows="4" class="form-control">{{$data->team_description}}</textarea>
                  </div>
            
</div>
   <div class="col-md-6">
                  <div class="form-group">
                    <label>Icon</label>
                    <input type="text" name="team_icon" class="form-control" value="{{$data->team_icon}}" required>
                  </div>
                  <div class="form-group">
                    <label>Photo</label>
                    <input type="file" name="team_img" class="form-control" value="{{$data->team_img}}" required>
                  </div>           
              </div>
            <div class="form-group">
                    <label></label>
                    <input type="submit" class="btn btn-primary btn-block" value="Submit" required>
                  </div>
                </div>
    </form>
  

@endsection
  @extends('backend.layouts.app')
@section('content')

     <section class="table_area">
               <form action="{{url('/back_review/'.$data->id)}}" method="post" enctype="multipart/form-data">
                  <input type="hidden" name="_method" value="PATCH">

  @csrf
  <div class="col-xs-12 col-md-12">
    <div class="form-group">
                    <label></label>
                    <input type="hidden" name="_method" class="form-control" value="PATCH" required>
                  </div>
                  <div class="form-group">
                   <label>Name</label>
                    <input type="text" name="client_name" class="form-control" value="{{$data->client_name}}" required>
                  </div> 
                  <div class="form-group">
                   <label>Designation</label>
                    <input type="text" name="client_designation" class="form-control" value="{{$data->client_designation}}" required>
                  </div> 
                   <div class="form-group">
                   <label>Speach</label>
                    <input type="text" name="client_speach" class="form-control" value="{{$data->client_speach}}" required>
                  </div>
                  <div class="form-group">
                    <label>Photo</label>
                    <input type="file" name="client_img" class="form-control" value="{{$data->client_img}}" required>
                  </div>           
            
            <div class="form-group">
                    <label></label>
                    <input type="submit" class="btn btn-primary btn-block" value="Submit" required>
                  </div>
                </div>
    </form>
  

@endsection
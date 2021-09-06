  @extends('backend.layouts.app')
@section('content')

     <section class="table_area">
               <form action="{{url('/back_review')}}" method="post" enctype="multipart/form-data">
  @csrf
  <div class="col-xs-12 col-md-12">
                  <div class="form-group">
                   <label>Name</label>
                    <input type="text" name="client_name" class="form-control" value="" required>
                  </div> 
                  <div class="form-group">
                   <label>Designation</label>
                    <input type="text" name="client_designation" class="form-control" value="" required>
                  </div> 
                   <div class="form-group">
                   <label>Speach</label>
                    <input type="text" name="client_speach" class="form-control" value="" required>
                  </div>
                  <div class="form-group">
                    <label>Photo</label>
                    <input type="file" name="client_img" class="form-control" value="" required>
                  </div>           
            
            <div class="form-group">
                    <label></label>
                    <input type="submit" class="btn btn-primary btn-block" value="Submit" required>
                  </div>
                </div>
    </form>
  <div class="panel">
                <div class="panel_header">
                    <div class="panel_title"><span>FooTable with row toggler, sorting, filter and pagination</span></div>
                </div>
                <div class="panel_body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                             <tr>
                        <th>SL</th>
                        <th>Name</th>
                        <th>Designation</th>
                        <th>Speach</th>
                        <th>Photo</th>
                        <th>Action</th>
                      </tr>
                          </thead>
                          <tbody>
                               <?php $i=0; ?>

                      @forelse($data as $d)
                      <tr>
                        <td>{{$i+=1}}</td>
                        <td>{{$d->client_name }}</td>
            <td>{{$d->client_designation  }}</td>
            <td>{{$d->client_speach}}</td>
            <td>{{$d->client_img}}</td>
                        <td>
            
           <a href="{{url('/back_review/'.$d->id.'/edit')}}" class="btn btn-xs btn-primary">Edit</a>
          <form  action="{{url('/back_review/'.$d->id)}}" method="POST">
                        @csrf
                      <input type="hidden" name="_method" value="DELETE" >
                      <button type="submit"  onclick="return confirm('are you sure?')" class="btn btn-xs btn-danger" value="DELETE">Delet</button>
                    </form>
          </td>
                      </tr>
                      @empty
                       <tr>
          <td colspan="3">No item found!</td>
        </tr>
                    @endforelse
                          </tbody>
                        </table>
                    </div>
                </div>
            </div> 

@endsection
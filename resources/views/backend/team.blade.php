@extends('backend.layouts.app')
@section('content')

               <section class="table_area">
               <form action="{{url('/back_team')}}" method="post" enctype="multipart/form-data">
  @csrf
  <div class="col-xs-12 col-md-12">
               <div class="col-md-6">
                  <div class="form-group">
                   <label>Name</label>
                    <input type="text" name="team_name" class="form-control" value="" required>
                  </div> 
                  <div class="form-group">
                   <label>Designation</label>
                    <input type="text" name="team_designation" class="form-control" value="" required>
                  </div> 
                  <div class="form-group">
                    <label>Description</label>
                    <textarea name="team_description" cols="10" rows="4" class="form-control"></textarea>
                  </div>
            
</div>
   <div class="col-md-6">
                  <div class="form-group">
                    <label>Icon</label>
                    <input type="text" name="team_icon" class="form-control" value="" required>
                  </div>
                  <div class="form-group">
                    <label>Photo</label>
                    <input type="file" name="team_img" class="form-control" value="" required>
                  </div>           
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
                        <th>Description</th>
                        <th>Icon</th>
                        <th>Photo</th>
                        <th>Action</th>
                      </tr>
                          </thead>
                          <tbody>
                               <?php $i=0; ?>

                      @forelse($data as $d)
                      <tr>
                        <td>{{$i+=1}}</td>
                        <td>{{$d->team_name}}</td>
						<td>{{$d->team_designation}}</td>
            <td>{{$d->team_description}}</td>
            <td>{{$d->team_icon}}</td>
						<td>{{$d->team_img}}</td>
                        <td>
            
           <a href="{{url('/back_team/'.$d->id.'/edit')}}" class="btn btn-xs btn-primary">Edit</a>
          <form  action="{{url('/back_team/'.$d->id)}}" method="POST">
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
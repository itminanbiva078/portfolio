  @extends('backend.layouts.app')
@section('content')

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
                        <th>Email</th>
                        <th>Subject</th>
                        <th>Message</th>
                        <th>Action</th>
                      </tr>
                          </thead>
                          <tbody>
                               <?php $i=0; ?>

                      @forelse($data as $d)
                      <tr>
                        <td>{{$i+=1}}</td>
                        <td>{{$d->name}}</td>
						<td>{{$d->eamil}}</td>
						<td>{{$d->subject}}</td>
            <td>{{$d->message}}</td>
                        <td>
            
          <form  action="{{url('/back_contact/'.$d->id)}}" method="POST">
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
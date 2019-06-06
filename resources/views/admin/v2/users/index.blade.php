@extends('layouts.v2.admin')

@section('breadcrumb')
{{ Breadcrumbs::render('users') }}

@endsection


@section('content')

<div class="row">
  <div class="col-md-12">
      <div class="card">
        <div class="card-header card-header-primary">
          <h4 class="card-title ">Users</h4>
        </div>
        <div class="card-body">   
          <table class="table" id="datatable">
            <thead>  
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Role</th>
                <th scope="col">Email</th>
                <th scope="col"></th>
                
              </tr>
            </thead>
            <tbody>	
              @foreach($users as $user)
                <tr>
                  <td><a href="{{route('users.edit',$user->id)}}">{{$user->id}}</a></td>
                  <td>{{$user->name}}</td>
                  <td>{{$user->role ? $user->role->name : 'User without role'}}</td>
                  <td>{{$user->email}}</td>
                  <td>
                    <form action="{{route('users.destroy', $user->id)}}" method="POST">
                      @method('DELETE')
                      @csrf
                      <button type="submit" class="btn btn-danger btn-sm float-right">Delete User</button>
                    </form>
                    <a href="{{route('users.edit',$user->id)}}" class="btn btn-info btn-sm float-right">Edit</a></td>
                </tr>
              @endforeach
              </tbody>
          </table>
        </div>
    </div>
  </div>
</div>
 
@endsection     
   
  
<!-- Custom scripts for all pages-->

@section('js')
<script>
  $(document).ready( function () {
    $('#datatable').DataTable(
    {
      'iDisplayLength': -1,
      "lengthChange": false,  
      "info": false,  
      "paging": false,
      "pageLength": 0,
      "columnDefs": [{ 
      "targets": [-1], 
      "orderable": false,
      }],       
    });
  });
</script>
<script> //datatable css
$(document).ready(function() {
  $('.dataTables_filter input').addClass('form-control'); // add class form-control to search input
  
  $('table').removeClass('no-footer');
  $('.paginate_button').removeClass('paginate_button', 'current');
  $('#datatable_filter').append(' <a href="{{route('users.create')}}" class="btn btn-success" style="float:left;">Create User</a>');
 } );
</script>
  @endsection

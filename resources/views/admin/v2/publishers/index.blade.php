@extends('layouts.v2.admin')
@section('breadcrumb')
{{ Breadcrumbs::render('publishers') }}

@endsection

@section('content')
<div class="row">
		<div class="col-md-12">
			<div class="card m-auto w-50">
			  <div class="card-header card-header-primary">
				<h4 class="card-title ">Publishers</h4>
				@if($publishersTrashed->count())<ul class="nav nav-tabs" id="myTab" role="tablist">
						<li class="nav-item">
						  <a class="nav-link" id="table-tab" data-toggle="tab" href="#activetab" role="tab" aria-controls="home" aria-selected="true">Active</a>
						</li>
						<li class="nav-item">
						  <a class="nav-link" id="trashed-tab" data-toggle="tab" href="#trashtab" role="tab" aria-controls="profile" aria-selected="false">Trashed</a>
						</li>@endif
			</div>
			
				<div class="card-body">
						<div class="tab-content">
							<div class="tab-pane active" id="activetab" role="tabpanel" aria-labelledby="home-tab">
			  
				<table class="table" id="datatable">
					<thead>
					<tr>
						<th scope="col">ID</th>
						<th scope="col">Name</th>
						<th scope="col"></th>
					</tr>
					</thead>
					<tbody>	
						@foreach($publishers as $publisher)
						<tr>
							<td><a href="{{route('publishers.edit',$publisher->id)}}">{{$publisher->id}}</a></td>
							<td>{{$publisher->name}}</td>
							
							<td>
								<form action="{{route('publishers.destroy', $publisher->id)}}" method="POST">
									@method('DELETE')
									@csrf
									<button type="submit" class="btn btn-danger btn-sm float-right">Delete Publisher</button>
									
								</form>
								<a href="{{route('publishers.edit',$publisher->id)}}" class="btn btn-info btn-sm float-right">Edit</a>
							</td>
						</tr>
						@endforeach
				</tbody>
				</table>
			</div>
				<div class="tab-pane" id="trashtab" role="tabpanel" aria-labelledby="profile-tab">
						<table class="table" id="datatableTrash">
								<thead>
								<tr>
									<th scope="col">ID</th>
									<th scope="col">Name</th>
									<th scope="col"></th>
								</tr>
								</thead>
								<tbody>	
									@foreach($publishersTrashed as $publisher)
									
									<tr> 
										<td>{{$publisher->id}}</td>
										<td>{{$publisher->name}}</td>
										<td>
											<form method="POST" action="{{Route('publishers.update', ['publisher' => $publisher])}}">
													@method('PATCH')
													<button type="submit" class="btn btn-success btn-sm float-right">Restore Publisher</button>
													@csrf
												</form>
									</tr>
									@endforeach
							</tbody>
							</table>
					</div>
			</div>
		</div>
	</div>
</div>




@endsection

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
		} );
		$(document).ready( function () {
			$('#datatableTrash').DataTable(
			{
			  'iDisplayLength': -1,
			  "lengthChange": false,  
			  "info": false,  
			  "paging": false,
			  "pageLength": 25,
			  "columnDefs": [{ 
			  "targets": [-1], 
			  "orderable": false,
			  }],
			  });
		} );
		</script>
		<script> //datatable css
				$(document).ready(function() {
				  $('.dataTables_filter input').addClass('form-control'); // add class form-control to search input
				  
				  $('table').removeClass('no-footer');
				  $('.paginate_button').removeClass('paginate_button', 'current');
				  $('#datatable_filter').append(' <a href="{{route('publishers.create')}}" class="btn btn-success" style="float:left;">Create Publisher</a>');
				 } );
				</script>
@endsection
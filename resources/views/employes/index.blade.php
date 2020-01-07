@extends('layouts')

@section('content')
<div class="container mt-5">
<div class="row">
	<div class="col-md-6">
	<form action="{{ route('home') }}" method="get">
	  <div class="form-group row">
		<input type="text" class="pull-left mr-1 form-control col-md-2" name="ename" placeholder="Name" value="{{ old('ename') }}">
		<input type="text" class="pull-left mr-1 form-control col-md-2" name="des" placeholder="Designation" value="{{ old('des') }}">
		<input type="text" class="pull-left mr-1 form-control col-md-2" name="sal" placeholder="Salary" value="{{ old('sal') }}">
		<input type="submit" class="btn btn-info form-control col-md-2" value="Seach">
	 </div>
	</form>
	</div>
	<div class="col-md-6"><button class="btn btn-info pull-right mb-2"><a href="{{ route('create') }}">Add New Record</a></button></div>
</div>
	<table class="table table-striped">
		<thead><tr><td>Id</td><td>Employee Name</td><td>Designation</td><td>Salary</td><td>Actions</td></tr><thead>
		
		<tbody>
		@foreach($emp as $e)
			<tr>
				<td>{{$e->id}}</td>
				<td>{{$e->employeeName}}</td>
				<td>{{$e->designation}}</td>
				<td>{{$e->salary}}</td>
				<td>
					<a href="{{ action('EmployesController@edit',$e->id) }}"><i class="fa fa-edit"></i></a>
					<!--<form action="{{ route('destroy',$e->id) }}" method="post">
						@method('DELETE')
						@csrf
						<button class="fa fa-trash" onclick="return confirm('Are you sure!')"></button>
					</form> -->
					<a href="{{ route('destroy',$e->id) }}" onclick="return confirm('Are you sure!')"> <i class="fa fa-trash"></i></a>
				</td>
			</tr>
		@endforeach
		<tbody>
	</table>
</div>
@endsection
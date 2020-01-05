@extends('layouts')

@section('content')
<div class="container mt-5">
<div class="row">
	<div class="col-md-6">
		<input type="text" class="pull-left mr-1"><input type="button" class="btn btn-info pull-left" value="Seach">
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
				<td><a href="{{ route('edit',$e->id) }}"><i class="fa fa-pencil"></i></a><i class="fa fa-trash"></i></td>
			</tr>
		@endforeach
		<tbody>
	</table>
</div>
@endsection
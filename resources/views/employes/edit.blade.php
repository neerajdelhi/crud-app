@extends('layouts')

@section('content')
<div class="container mt-5">
	<div class="row">
		<div class="col-md-6"><h2>Edit Record</h2></div>
		<div class="col-md-6"><button class="btn btn-info pull-right"><a href="{{ route('home') }}">Go Back</a></button></div>
	</div>
	<form action="{{ route('update',$editemp->id) }}" method="post" enctype="multipart/form-data">
		 @csrf
		<div class="form-group">
			<input type="text" name="empname" class="form-control" placeholder="Employee Name" value="{{ $editemp->employeeName }}">
			@if($errors->has('empname'))
				<span class="text-danger">{{ $errors->first('empname') }}</span>
			@endif
		</div>
		<div class="form-group">
			<input type="text" name="des" class="form-control" placeholder="Designation" value="{{ $editemp->designation }}">
			@if($errors->has('des'))
				<span class="text-danger">{{ $errors->first('des') }}</span>
			@endif
		</div>
		<div class="form-group">
			<input type="text" name="salary" class="form-control" placeholder="Salary" value="{{ $editemp->salary }}">
			@if($errors->has('salary'))
				<span class="text-danger">{{ $errors->first('salary') }}</span>
			@endif
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-success">Submit</button>
		</div>
	</form>
</div>
@endsection
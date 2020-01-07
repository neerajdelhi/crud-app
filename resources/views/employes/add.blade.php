@extends('layouts')

@section('content')
<div class="container mt-5">
	<div class="row">
		<div class="col-md-6"><h2>Add a New Record</h2></div>
		<div class="col-md-6"><button class="btn btn-info pull-right"><a href="{{ route('home') }}">Go Back</a></button></div>
	</div>
	<form action="{{ route('store') }}" method="post" enctype="multipart/form-data">
		 @csrf
		<div class="form-group">
			<input type="text" name="empname" class="form-control" placeholder="Employee Name" value="{{ old('empname') }}">
			@if($errors->has('empname'))
				<span class="text-danger">{{ $errors->first('empname') }}</span>
			@endif
		</div>
		<div class="form-group">
			<input type="text" name="des" class="form-control" placeholder="Designation" value="{{ old('des') }}">
			@if($errors->has('des'))
				<span class="text-danger">{{ $errors->first('des') }}</span>
			@endif
		</div>
		<div class="form-group">
			<input type="text" name="salary" class="form-control" placeholder="Salary" value="{{ old('salary') }}">
			@if($errors->has('salary'))
				<span class="text-danger">{{ $errors->first('salary') }}</span>
			@endif
		</div>
		<div class="form-group">
			<input type="file" name="logo" class="form-control" placeholder="Please upload a logo">
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-success">Submit</button>
		</div>
	</form>
</div>
@endsection
@extends('layouts')

@section('content')
<div class="container mt-5">
	<div class="row"> {{ print_r($emp)}} {{ die}}
		<div class="col-md-6"><h2>Edit Record</h2></div>
		<div class="col-md-6"><button class="btn btn-info pull-right"><a href="{{ route('home') }}">Go Back</a></button></div>
	</div>
	<form action="{{ route('update',$emp->id) }}" method="post" enctype="multipart/form-data">
		 @csrf
		 @method('PUT')
		<div class="form-group">
			<input type="text" name="empname" class="form-control" placeholder="Employee Name" value="{{ $emp->employeName }}">
			@if($errors->has('empname'))
				<span class="text-danger">{{ $errors->first('empname') }}</span>
			@endif
		</div>
		<div class="form-group">
			<input type="text" name="des" class="form-control" placeholder="Designation" value="{{ $emp->des }}">
			@if($errors->has('des'))
				<span class="text-danger">{{ $errors->first('des') }}</span>
			@endif
		</div>
		<div class="form-group">
			<input type="text" name="salary" class="form-control" placeholder="Salary" value="{{ $emp->salary }}">
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
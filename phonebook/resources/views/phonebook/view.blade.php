@extends('master')

@section('content')

<div class="row">
	<div class="col-md-12">
		<br/>
		<h3>EDIT CONTACT</h3>
		<br/>
		@if(count($errors) > 0)

		<div class="alert alert-danger">
			<ul>
				@foreach($errors->all() as $error)
				<li>{{$error}}</li>
				@endforeach
			</ul>
		</div>

		@endif
		<form method="post" action="{{action('PhonebkController@update', $id)}}">
			{{csrf_field()}}
			<input type="hidden" name="_method" value="PATCH"/>
			<div class="form-group">
				<input type="text" name="contact_name" class="form-control" value="{{$phonebook->contact_name}}"
				placeholder="Enter Contact Name"/>
			</div>
			<div class="form-group">
				<input type="text" name="contact_number" class="form-control" value="{{$phonebook->contact_number}}"
				placeholder="Enter Contact Number"/>
			</div>
			<div class="form-group">
				<input type="submit" class="btn btn-primary" value="Edit"/>
			</div>
		</form>
	</div>
</div>

@endsection
@extends('master')

@section('content')

<div class="row">
	<div class ="col-md-12">
	<br/>
	<h3><center><a href="{{url('/phonebook')}}">PHONEBOOK CRUD</a></center></h3>
	<br/>
	<div class="container box">
   <div class="panel panel-default">
    <div class="panel-body">
<div class="row">
	<div class="col-md-12">
		<h3 align="center">Add Contacts</h3>
	</br>
	@if(count($errors) > 0)
	<div class="alert alert-danger">
		<ul>
			@foreach($errors->all() as $error)
			<li>{{$error}}</li>
			@endforeach
		</ul>
	</div>
	@endif

	@if(\Session::has('success'))
	<div class="alert alert-success">
	<p>{{ \Session::get('success')}}</p>
	</div>
	@endif

	<form method ="post" action="{{url('phonebook')}}">
		{{csrf_field()}}
		<div class ="form-group">
		<input type="text" name="contact_name" class="form-control" placeholder="Contact Name" />
		</div>

		<div class ="form-group">
		<input type="text" name="address" class="form-control" placeholder="Home Address" />
		</div>

		<div class ="form-group">
		<input type="text" name="contact_number" class="form-control" placeholder="Contact Number" />
		</div>

		<div class="form">
		<input type="submit" class="btn btn-primary" value ="Add Contact" />
		</div>	
	</form>
	</div>
</div>
@endsection
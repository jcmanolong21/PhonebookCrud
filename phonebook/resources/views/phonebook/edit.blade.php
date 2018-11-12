@extends('master')

@section('content')

<div class="row">
	<div class ="col-md-12">
	<br/>
	<h3><center><a href="{{url('/phonebook')}}">PHONEBOOK CRUD</a></center></h3>
	<br/>
	<div id="container-box">
   <div class="panel panel-default">
    <div class="panel-body">
    <h2>Edit Contact Details</h2>
	<br/>
		<form method="post" action="{{action('PhonebkController@update', $id)}}">
			{{csrf_field()}}
			<input type="hidden" name="_method" value="PATCH"/>
			<div class="form-group">
				<input type="text" name="contact_name" class="form-control" value="{{$phonebook->contact_name}}"
				placeholder="Enter Contact Name"/>
			</div>
			<div class="form-group">
				<input type="text" name="address" class="form-control" value="{{$phonebook->address}}"
				placeholder="Enter Home Address"/>
			</div>
			<div class="form-group">
				<input type="text" name="contact_number" class="form-control" value="{{$phonebook->contact_number}}"
				placeholder="Enter Contact Number"/>
			</div>
			<div class="form-group">
				<input type="submit" class="btn btn-primary" value="Update"/>
			</div>
		</form>
	</div>
</div>

@endsection
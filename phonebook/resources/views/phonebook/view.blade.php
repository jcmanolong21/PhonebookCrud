@extends('master')

@section('content')

<div class="row">
	<div class ="col-md-12">
	<br/>
	<h3><center><a href="{{url('/phonebook')}}">PHONEBOOK CRUD</a></center></h3>
	<br/>
	@if($message = Session::get('success'))
	<div class="alert alert-success">
		<p>{{$message}}</p>
	</div>
	@endif
	<div id="container-box">
   <div class="panel panel-default">
    <div class="panel-body">
    	<form action="/search" method="POST" role="search">
			{{ csrf_field() }}
		<div class="input-group">
		<b><input type="text" class="form-control" name="q"
		placeholder="Search in contact.."> </b><span class="input-group-btn">
		<button type="submit" class="btn btn-default">
		<span class="glyphicon glyphicon-search"></span>
	</button>
	</span>
	</div>
	</form>
	<br/>
	<div align="right">
		<a href ="{{route('phonebook.create')}}" class="btn btn-warning">ADD CONTACT</a>
	</div>
	<h3>Contact Details</h3><br/>
		<form method="post" action="{{action('PhonebkController@show', $id)}}">
			{{csrf_field()}}
			<input type="hidden" name="_method" value="PATCH"/>
			<div class="form-group">
				<input type="text" name="contact_name" readonly="readonly" class="form-control" value="{{$phonebook->contact_name}}"placeholder="Enter Contact Name"/>
			</div>
			<div class="form-group">
				<input type="text" name="contact_name" readonly="readonly" class="form-control" value="{{$phonebook->address}}"
				placeholder="Enter Home Address"/>
			</div>
			<div class="form-group">
				<input type="text" name="contact_number" readonly="readonly" class="form-control" value="{{$phonebook->contact_number}}"
				placeholder="Enter Contact Number"/>
			</div>

		</form>
	</div>
</div>

@endsection
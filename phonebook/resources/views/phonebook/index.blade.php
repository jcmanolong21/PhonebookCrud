@extends('master')

@section('content')

<div class="row">
	<div class ="col-md-12">
	<br/>
	<h3 align="center">7D Challenge CRUD</h3>
	<br/>
	@if($message = Session::get('success'))
	<div class="alert alert-success">
		<p>{{$message}}</p>
	</div>
	@endif
	<div class="container box">
   <div class="panel panel-default">
    <div class="panel-body">
    	<form action="/search" method="POST" role="search">
			{{ csrf_field() }}
		<div class="input-group">
		<input type="text" class="form-control" name="q"
		placeholder="Search in contact.."> <span class="input-group-btn">
		<button type="submit" class="btn btn-default">
		<span class="glyphicon glyphicon-search"></span>
	</button>
	</span>
	</div>
	</form>
	<br/>
	<div align="right">
		<a href ="{{route('phonebook.create')}}" class="btn btn-warning">ADD CONTACT</a>
		<br/>
		<br/>
	</div>
	<table class="table table-striped">
		<tr>
			<th>Contact Name</th>
			<th><center>View Contact</th>
			<th><center>EDIT</th>
			<th><center>Delete Contact</</th>
		</tr>
		@foreach($phonebook1 as $row)
		<tr>
			<td>{{$row['contact_name']}}<br/><i>
			{{$row['contact_number']}}</i></td>
			<td><center><a href="{{action('PhonebkController@show',$row['id'])}}" class="btn btn-success">VIEW</a></td>
			<td><center><a href="{{action('PhonebkController@edit',$row['id'])}}" class="btn btn-primary">EDIT</a></td>
			<td>
				<form method="post" class="delete_form" action="{{action('PhonebkController@destroy',$row['id'])}}">
					{{csrf_field()}}
				<center><input type="hidden" name="_method" value="DELETE"/>
				<button type="submit" class="btn btn-danger">DELETE</button>
				</form>
			</td>
		</tr>
		@endforeach
	</table>
	</div>
</div>

<script>
$(document).ready(function(){
	$('.delete_form').on('submit', function(){
		if(confirm("Are you sure you want to delete contact?")){
			return true;
		}
		else{
			return false;
		}

	});

});
</script>
@endsection
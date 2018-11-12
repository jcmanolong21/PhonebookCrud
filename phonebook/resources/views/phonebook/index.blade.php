@extends('master')

@section('content')

<div class="row">
	<div class ="col-md-12">
	<br/>
	<h3><center><a href="{{url('/phonebook')}}">PHONEBOOK CRUD</a></center></h3>
	<br/>
	@if($message = Session::get('success'))
	<div class="alert alert-success">
		<p><center>{{$message}}</center></p>
	</div>
	@endif

	<div class="row">
	<div id="container-box">
   <div class="panel panel-default">
    <div class="panel-body">
    	<form action="/search" method="POST" role="search">
			{{ csrf_field() }}
		<div class="input-group">
		<b><input type="text" class="form-control" name="q"
		placeholder="Search in contact.."></b><span class="input-group-btn">
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
	
	<table id ="table-bordered" class="table table-bordered">
		<tr>
			<th width="40%">Contact Name</th>
			<th><center>View Contact</th>
			<th><center>Edit Contact</th>
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
				<input type="hidden" name="_method" value="DELETE"/>
				<center><button type="submit" class="btn btn-danger">DELETE</button></center>
				</form>
			</td>
		</tr>
		@endforeach
	</table>
	<center>{{$phonebook1->links()}}</center>
	</div>
</div>
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
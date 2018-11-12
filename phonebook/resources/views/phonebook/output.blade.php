@extends('master')
@section('content')
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>7D Challenge CRUD</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
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
 
    <div class="container">
            @if(isset($details))
            <h2>Sample User details</h2>
        <table class="table table-striped">
        <thead>
            <tr>
            <th>Contact Name</th>
            <th>Contact Number</th>
            <th>View Contact</th>
            <th>Delete Contact</th>
            </tr>
            </thead>
            <tbody>
            @foreach($details as $user)
            <tr>
            <td>{{$user['contact_name']}}</td>
            <td>{{$user['contact_number']}}</td>
            <td><a href="{{action('PhonebkController@edit',$user['id'])}}" class="btn btn-primary">VIEW</a></td>
            <td>
                <form method="post" class="delete_form" action="{{action('PhonebkController@destroy',$user['id'])}}">
                    {{csrf_field()}}
                <input type="hidden" name="_method" value="DELETE"/>
                <button type="submit" class="btn btn-danger">DELETE</button>
                </form>
            </td>
        </tr>
            @endforeach
            @endif
            </tbody>
            </table>
            </div>
        </body>
        </div>
        </div>
    </div>
        <!-- Styles -->

    </head>
   
</html>
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
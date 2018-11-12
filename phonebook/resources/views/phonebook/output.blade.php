@extends('master')

@section('content')

<div class="row">
    <div class ="col-md-12">
    <br/>
    <h3><center><a href="{{url('/phonebook')}}">7D CRUD CHALLENGE</a></center></h3>
    <br/>
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
            @if(isset($details))
        <table class="table table-striped">
        <thead>
            <tr>
            <th>Contact Name</th>
            <th><center>View Contact</th>
            <th><center>Edit Contact</th>
            <th><center>Delete Contact</</th>
            </tr>
            </thead>
            <tbody>
            @foreach($details as $user)
            <tr>
            <td>{{$user['contact_name']}}<br/><i>
            {{$user['contact_number']}}</i></td>
            <td><center><a href="{{action('PhonebkController@show',$user['id'])}}" class="btn btn-success">VIEW</a></td>
            <td><center><a href="{{action('PhonebkController@edit',$user['id'])}}" class="btn btn-primary">EDIT</a></td>
            <td>
                <form method="post" class="delete_form" action="{{action('PhonebkController@destroy',$user['id'])}}">
                    {{csrf_field()}}
                <input type="hidden" name="_method" value="DELETE"/>
                <center><button type="submit" class="btn btn-danger">DELETE</button></center>
            </td>
        </tr>
            @endforeach
            @elseif(isset($message))
            <p><b><center>{{ $message }}</center></b></p>
            @endif
            </tbody>
            </table>

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
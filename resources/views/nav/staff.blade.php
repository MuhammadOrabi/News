@extends('staffLayout')

@section('title')
     Staff area
@stop

@section('content')
   <br>
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <ul class="list-group">
                <a href="{{ route('AddUsers') }}"><li class="list-group-item">Add User</li></a>
                <a href="{{ route('messDis') }}"><li class="list-group-item">Messages</li></a>
                <a href="{{ route('addPost') }}"><li class="list-group-item">Add Post</li></a>
                <a href="{{ route('postUpdate') }}"><li class="list-group-item">Update Post</li></a>
                <a href="{{ route('delPost') }}"><li class="list-group-item">Delete Post</li></a>
                <a href="{{ route('postView') }}"><li class="list-group-item">Post Views</li></a>
                <a href="{{ route('logout') }}"><li class="list-group-item">Log Out</li></a>
            </ul>
        </div>
    </div>
    <br>
@stop
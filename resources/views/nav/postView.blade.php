@extends('staffLayout')

@section('title')
    Post Views
@stop

@section('content')
    <div class="container col-md-6 col-md-offset-3">
       @foreach($views as $view)
        <br>
        <ul>
        <li>View time: {{ $view->created_at }}</li>
        @foreach($posts as $post)
            @if($post->id == $view->post_id)
                <li>Post Title: {{ $post->title }}</li>
            @endif
        @endforeach
        </ul>
        <hr>
        @endforeach
        {!! $views->links() !!}
    </div>
@stop
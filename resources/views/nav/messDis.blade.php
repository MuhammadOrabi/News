@extends('staffLayout')

@section('title')
    Messages
@stop

@section('content')
    <div class="container  col-md-offset-3 col-md-6">
       @foreach($posts as $post)
        <br>
        <ul>
        <li>Message time: {{ $post->created_at }}</li>
        <li>Name: {{$post->name}} </li>
        <li>Email: {{$post->email}} </li>
        <li>Subject: {{$post->subject}} </li>
        <p>the message: {{$post->message}} </p>
        </ul>
        <hr>
        @endforeach
        {!! $posts->links() !!}
    </div>
@stop
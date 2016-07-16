@extends('staffLayout')

@section('title')
Delete Post
@stop

@section('style')
    <meta name="csrf-token" content="{{ csrf_token() }}" />
@stop

@section('content')
<div class="container">
    <div class="col-md-6 col-md-offset-3">
        <form method="post" action="{{ route('del') }}" enctype="multipart/form-data"> 
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="ref">Select Referance (select one):</label>
                    <select class="form-control" name="ref" id="ref" required="required">
                        <option value="world">World News</option>
                        <option value="sports">Sports</option>
                        <option value="tech">Tech</option>
                        <option value="business">Business</option>
                        <option value="Media">Media</option>
                        <option value="entertainment">Entertainment</option>
                        <option value="culture">Culture</option>
                        <option value="books">Books</option>
                        <option value="articles">Articles</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                   <input type="text" name="name" id="name" class="form-control" required="required" placeholder="Writer Name">    
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                   <input type="text" name="title" id="title" class="form-control" required="required" placeholder="Title">    
                </div>
            </div>
            <div class="form-group col-md-6 col-md-offset-3">
                <button type="submit" class="btn btn-primary">Delete Post</button>  
            </div>
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
        </form>
    </div>
</div>
@stop
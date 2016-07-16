@extends('staffLayout')

@section('title')
Update Post
@stop

@section('style')
    <meta name="csrf-token" content="{{ csrf_token() }}" />
@stop

@section('content')
<br>
<h2>Update Post</h2>
<div class="container">
    <div class="col-md-6 col-md-offset-3">
       <form method="post" action="{{ route('update') }}" enctype="multipart/form-data"> 
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="ref">Select Referance (select one):</label>
                    <select class="form-control" name="ref" id="ref" required="required">
                        <option value="world">World News</option>
                        <option value="sports">Sports</option>
                        <option value="tech">Tech</option>
                        <option value="business">Business</option>
                        <option value="media">Media</option>
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
            <div class="row">
                <div class="form-group col-md-6">
                   <input class="btn" type="file" name="img" id="fileToUpload">
                </div>
                <div class="form-group col-md-6">
                   <input type="text" name="desc" id="desc" class="form-control" placeholder="Image Description">    
                </div>
            </div>
            <div class="row">
                <div class="form-group">
                  <textarea class="form-control" rows="3" id="short"  name="short" placeholder="Short Description"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="form-group">
                  <textarea class="form-control" rows="9"  name="txt" placeholder="The Post"></textarea>
                </div>
            </div>
            <div class="form-group col-md-6 col-md-offset-3">
                   <button type="submit" name="submit" class="btn btn-primary">Update</button>  
                </div>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
       </form>
    </div>
</div>
@stop
@extends('master')

@section('title')
The News Reporter | Contact Us
@stop

@section('style')
<meta name="csrf-token" content="{{ csrf_token() }}" />
@stop

@section('content')
    <div class="col-md-6  " data-scrollreveal="enter right and move 100px, wait 0.4s">
    <h3>Contact Us </h3>
    <hr />
    <form method="post" action="{{ route('message') }}">
        <div class="row">
            <div class="col-md-6 ">
                <div class="form-group">
                    <input type="text" name="name" class="form-control" required="required" placeholder="Name">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <input type="text" name="email" class="form-control" required="required" placeholder="Email address">
                </div>
            </div>
        </div>
          <div class="row">
            <div class="col-md-6 ">
                <div class="form-group">
                    <input type="text" name="subject" class="form-control" required="required" placeholder="Subject">
                </div>
            </div>
            <div class="col-md-6 ">
                <div class="form-group">
                    <input type="text" name="ref" class="form-control"  placeholder="Ref. (IF any)">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 ">
                <div class="form-group">
                    <textarea name="message" id="message" required="required" class="form-control" rows="3"  placeholder="Message"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Submit Request</button>
                </div>
            </div>
        </div>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
    </form>
    </div>
@stop
@extends('staffLayout')

@section('title')
     Staff area | Add Users
@stop

@section('style')
<meta name="csrf-token" content="{{ csrf_token() }}" />
@stop

@section('content')
@if(count($errors) > 0)
  <section class="info-box fail">
      {{ Session::get('fail') }}
  </section>
@endif

@if(Session::has('fail'))
  <section class="info-box fail">
      @foreach($errors as $error)
          {{ $error }}
      @endforeach
  </section>
@endif

<hr>
<div class="col-md-6 col-md-offset-3" >
    <form action="{{ route('user') }}" method="post">
       <div class="row">
        <div class="col-md-6 ">
            <div class="form-group">
                <input type="text" name="user" class="form-control" required="required" placeholder="UserName">
            </div>
        </div>    
        </div>
        <div class="row">
        <div class="col-md-6 ">
            <div class="form-group">
                <input type="password" name="pass" class="form-control" required="required" placeholder="Password">
            </div>
        </div>
        </div>
        <button type="submit" class="btn btn-primary">Add User</button>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
    </form>
<hr>
<hr>
</div>
@stop
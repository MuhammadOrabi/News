@extends('master')

@section('title')
The News Reporter | {{ $title }}
@stop

@section('content')
      <?php $stop = false; $postStop = false;?>
       @foreach($posts as $post)
         <?php
              if($post->img != null)
              {
                  $stop = true;
              }
              
              if($post->title != null)
              {
                  $postStop = true;
              }
          ?>
        @endforeach
       @if($stop)
        <div class="slider_area">
      <div class="slider">
        <ul class="bxslider">
          <?php $j = 1; ?>
            @foreach($posts as $post)
              @if($post->img != null AND $j <= 5)
                  <li><img src="{{ URL::to($post['img']) }}" alt="" title="{{ $post['title'] }}" /></li>
                  <?php $j++; ?>
              @endif
            @endforeach
          </ul>
      </div>
    </div>
    @endif
    <div class="content_area">
      <div class="main_content floatleft">
        
          <div class="single_left_coloum_wrapper">
            <h2 class="title">{{ $title }}</h2>
            @if(!$postStop)
              <h1 class="col-md-offset-3">There is no posts here yet!</h1>
            @else
              @foreach($posts as $post)
                <div class="single_left_coloum floatleft">
                @if($post->img != null)
                 <img src="{{ URL::to($post['img']) }}" alt="" title="{{ $post['imgDesc'] }}" />
                 @endif
                 <h3>{{ $post['title'] }}</h3>
                <p>{{ $post['shortTxt'] }}</p>
                <a class="readmore" href="{{ route('post', ['ref' => $post['ref'], 'id' => $post['id']]) }}">read more</a>
                <br><br>
                <p class="single_cat_left_content_meta">by: <span>{{$post['writer']['name']}}</span> | at: {{$post['created_at']}}</p>
                </div>
              @endforeach
              @endif
            </div>
            @if($stop)
          <div class="single_left_coloum_wrapper gallery">
            <h2 class="title">gallery</h2>
              @foreach($posts as $post)
                @if($post->img != null)
                    <img src="{{ URL::to($post['img']) }}" alt="" title="{{ $post['title'] }}" />
                @endif
              @endforeach
             </div>
          @endif
        
      </div>
      <div class="sidebar floatright">
        <hr>
        <div class="single_sidebar">
        <img src="{{ URL::to('images/add1.png') }}" alt="" /> 
        <hr>
        <img src="{{ URL::to('images/add2.png') }}" alt="" />
        <hr>
        <img src="{{ URL::to('images/add1.png') }}" alt="" />
        </div>
         
        </div>
    </div>
@stop
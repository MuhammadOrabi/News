@extends('master')

@section('title')
The News Reporter
@stop

@section('content')
    <div class="slider_area">
      <div class="slider">
        <ul class="bxslider">
          <?php $j = 1; ?>
            @foreach($posts as $post)    
                @if($post->img != null AND $j <= 5)
                   <li><img src="{{ URL::to($post['img']) }}" alt="" title="{{ $post['imgDesc'] }}" /></li>
                    <?php $j++; ?>
                @endif
            @endforeach
          </ul>
      </div>
    </div>
    <div class="content_area">
      <div class="main_content floatleft">
        <div class="left_coloum floatleft">
          <div class="single_left_coloum_wrapper">
            <h2 class="title">from   around   the   world</h2>
            <a class="more" href="{{ route('world') }}">more</a>
            <?php $j=1;?>
            @foreach($posts as $post)    
                @if($post['ref'] == "world" AND $j<=3)
                  <div class="single_left_coloum floatleft">
                  @if($post['img'] != null)
                    <img src="{{ URL::to($post['img']) }}" alt="" title="{{ $post['imgDesc'] }}" />
                  @endif
                  <h3>{{ $post['title'] }}</h3>
                  <p>{{ $post['shortTxt'] }}</p>
                  <a class="readmore" href="{{ route('post', ['ref' => $post['ref'], 'id' => $post['id']]) }}">read more</a>
                  <br>
                  <p class="single_cat_left_content_meta">by: <span>{{$post['writer']['name']}}</span> | at: {{$post['created_at']}}</p>
                  </div>
                  <?php $j++; ?>
                @endif
            @endforeach
            </div>
          <div class="single_left_coloum_wrapper">
            <h2 class="title">latest  articles</h2>
            <a class="more" href="{{ route('articales') }}">more</a>
            <?php $a=1;?>
            @foreach($posts as $post)    
                @if($post['ref'] == "articles" AND $a<=3)
                  <div class="single_left_coloum floatleft">
                  @if($post['img'] != null)
                    <img src="{{ URL::to($post['img']) }}" alt="" title="{{ $post['imgDesc'] }}" />
                  @endif
                  <h3>{{ $post['title'] }}</h3>
                  <p>{{ $post['shortTxt'] }}</p>
                  <a class="readmore" href="{{ route('post', ['ref' => $post['ref'], 'id' => $post['id']]) }}">read more</a>
                  <br>
                  <p class="single_cat_left_content_meta">by: <span>{{$post['writer']['name']}}</span> | at: {{$post['created_at']}}</p>
                  </div>
                  <?php $a++; ?>
                @endif
            @endforeach
          </div>
          <div class="single_left_coloum_wrapper single_cat_left">
            <h2 class="title">tech news</h2>
            <a class="more" href="#">more</a>
            <?php $g=1;?>
            @foreach($posts as $post)    
                @if($post['ref'] == "tech" AND $g<=3)
                  <div class="single_cat_left_content floatleft">
                  <h3>{{ $post['title'] }}</h3>
                  <p>{{ $post['shortTxt'] }}</p>
                  <a class="readmore" href="{{ route('post', ['ref' => $post['ref'], 'id' => $post['id']]) }}">read more</a>
                  <p class="single_cat_left_content_meta">by: <span>{{$post['writer']['name']}}</span> | at: {{$post['created_at']}}</p>
                  </div>
                  <?php $g++; ?>
                @endif
            @endforeach
          </div>
          <div class="single_left_coloum_wrapper gallery">
            <h2 class="title">gallery</h2>
            @foreach($posts as $post)
                @if($post->img != null)
                    <img src="{{ URL::to($post['img']) }}" alt="" title="{{ $post['title'] }}" />
                @endif
              @endforeach
          </div>
        </div>
        
      </div>
      <div class="sidebar floatright">
        <div class="single_sidebar"> <img src="{{ URL::to('images/add1.png') }}" alt="" /> </div>
        <div class="single_sidebar">
          <div class="popular">
            <h2 class="title">popular</h2>
            <ul>
              @foreach($logs as $log)
              <li>
                <div class="single_popular">
                  <p>{{ $log['title'] }}</p>
                  <h3> {{ $log['shortTxt'] }} <a href="{{ route('post', ['ref' => $post['ref'], 'id' => $post['id']]) }}" class="readmore">Read More</a></h3>
                </div>
              </li>
              @endforeach
            </ul>
        </div>
        <div class="single_sidebar">
        <img src="{{ URL::to('images/add1.png') }}" alt="" />
        </div>
        <div class="single_sidebar">
        <h2 class="title">ADD</h2>
        <img src="{{ URL::to('images/add2.png') }}" alt="" /> 
        </div>
      </div>
    </div>
@stop

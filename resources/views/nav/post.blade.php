@extends('master')

@section('title')
The News Reporter
@stop

@section('content')
           
        <h1>{{ $post['title'] }}</h1>
        @if($post->img != null)
        <div class="slider_area">
      <div class="slider">
        <ul class="bxslider">
          <li><img src="{{ URL::to($post['img']) }}" alt="" title="{{ $post['imgDesc'] }}" /></li>
          </ul>
        </div>
        </div>
        @endif
       <div class="content_area">
      <div class="main_content floatleft">
        <h2>{{ $post['shortTxt'] }}</h2>
        <p>{{ $post['txt'] }}</p>
        <hr>
        <h3><a href="#">by: {{$post['writer']['name']}}</a> at: {{$post['created_at']}}</h3>
        <hr>
      </div>
          <div class="sidebar floatright">
        <div class="single_sidebar"> <img src="{{ URL::to('images/add1.png') }}" alt="" /> </div>
        <div class="single_sidebar">
          <div class="popular">
            <h2 class="title">Popular</h2>
            <ul>
              <li>
                <div class="single_popular">
                  <p>Sept 24th 2045</p>
                  <h3>Lorem ipsum dolor sit amet conse ctetur adipiscing elit <a href="#" class="readmore">Read More</a></h3>
                </div>
              </li>
              <li>
                <div class="single_popular">
                  <p>Sept 24th 2045</p>
                  <h3>Lorem ipsum dolor sit amet conse ctetur adipiscing elit <a href="#" class="readmore">Read More</a></h3>
                </div>
              </li>
              <li>
                <div class="single_popular">
                  <p>Sept 24th 2045</p>
                  <h3>Lorem ipsum dolor sit amet conse ctetur adipiscing elit <a href="#" class="readmore">Read More</a></h3>
                </div>
              </li>
              <li>
                <div class="single_popular">
                  <p>Sept 24th 2045</p>
                  <h3>Lorem ipsum dolor sit amet conse ctetur adipiscing elit <a href="#" class="readmore">Read More</a></h3>
                </div>
              </li>
              <li>
                <div class="single_popular">
                  <p>Sept 24th 2045</p>
                  <h3>Lorem ipsum dolor sit amet conse ctetur adipiscing elit <a href="#" class="readmore">Read More</a></h3>
                </div>
              </li>
            </ul>
            <a class="popular_more">more</a> </div>
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
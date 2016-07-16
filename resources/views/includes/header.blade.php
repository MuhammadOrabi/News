<div class="body_wrapper">
  <div class="center">
    <div class="header_area">
      <div class="logo floatleft"><a href="{{ route('home') }}"><img src="{{ URL::to('images/logo.png') }}" alt="" /></a></div>
      <div class="top_menu floatleft">
        <ul>
          <li><a href="{{ route('home') }}">Home</a></li>
          <li><a href="{{ route('contact') }}">Contact Us</a></li>
          @if(!Auth::check())
            <li><a href="{{ route('login') }}">Login</a></li>
          @else
            <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li><a href="{{ route('logout') }}">Log Out</a></li>
          @endif
        </ul>
      </div>
      <div class="social_plus_search floatright">
        <div class="social">
          <ul>
            <li><a href="#" class="twitter"></a></li>
            <li><a href="#" class="facebook"></a></li>
            <li><a href="#" class="feed"></a></li>
          </ul>
        </div>
        <div class="search">
          <form action="{{ route('search') }}" method="post" id="search_form">
            <input type="text" value="" id="s" name="key" placeholder="Search" />
            <input type="submit" id="searchform" value="search"  />
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
          </form>
        </div>
      </div>
    </div>
    <div class="main_menu_area">
      <ul id="nav">
        <li><a href="{{ route('world') }}">world news</a></li>
        <li><a href="{{ route('sports') }}">sports</a></li>
        <li><a href="{{ route('tech') }}">tech</a></li>
        <li><a href="{{ route('business') }}">business</a></li>
        <li><a href="{{ route('media') }}">Media</a></li>
        <li><a href="{{ route('entertainment') }}">entertainment</a></li>
        <li><a href="{{ route('culture') }}">culture</a></li>
        <li><a href="{{ route('books') }}">Books</a></li>
        <li><a href="{{ route('articales') }}">Articales</a></li>
      </ul>
    </div>

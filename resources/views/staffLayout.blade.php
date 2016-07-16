<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>@yield('title')</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" type="text/css" href="{{ URL::to('assets/font/font-awesome.min.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ URL::to('assets/font/font.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ URL::to('assets/css/bootstrap.min.css') }}" media="screen" />
<link rel="stylesheet" type="text/css" href="{{ URL::to('assets/css/style.css') }}" media="screen" />
<link rel="stylesheet" type="text/css" href="{{ URL::to('assets/css/responsive.css') }}" media="screen" />
<link rel="stylesheet" type="text/css" href="{{ URL::to('assets/css/jquery.bxslider.css') }}" media="screen" />
@yield('style')
</head>
<body>
<div class="body_wrapper">
<div class="center">
    <div class="header_area">
      <div class="logo floatleft"><a href="{{ route('home') }}"><img src="{{ URL::to('images/logo.png') }}" alt="" /></a></div>
      <div class="top_menu floatleft">
        <ul>
          <li><a href="{{ route('home') }}">Public Website</a></li>
          @if(!isset($stop))
            <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li><a href="{{ route('logout') }}">Logout</a></li>
          @endif
        </ul>
      </div>
      </div>
      <hr>
@yield('content')
     
<div class="footer_top_area"></div>
    <div class="footer_bottom_area">
      <div class="copyright_text">
        <p>Copyright &copy; 2045 The News Reporter Inc. All rights reserved | Design by
         <a target="_blank" rel="nofollow" href="http://www.graphicsfuel.com/2045/10/wp-magazine-theme-template-psd/">Rafi MD</a></p>
        <p>Trade marks and images used in the design are the copyright of their respective owners and are used for demo purposes only.</p>
          </div>
    </div>
  </div>
</div>
<script type="text/javascript" src="{{ URL::to('assets/js/jquery-min.js') }}"></script> 
<script type="text/javascript" src="{{ URL::to('assets/js/bootstrap.min.js') }}"></script> 
<script type="text/javascript" src="{{ URL::to('assets/js/jquery.bxslider.js') }}"></script> 
<script type="text/javascript" src="{{ URL::to('assets/js/selectnav.min.js') }}"></script> 
<script type="text/javascript">
selectnav('nav', {
    label: '-Navigation-',
    nested: true,
    indent: '-'
});
selectnav('f_menu', {
    label: '-Navigation-',
    nested: true,
    indent: '-'
});
$('.bxslider').bxSlider({
    mode: 'fade',
    captions: true
});
</script>
</body>
</html>
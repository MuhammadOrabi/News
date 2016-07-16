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
<meta name="csrf-token" content="{{ csrf_token() }}" />
@yield('style')
</head>
<body>
@include('includes.header')
@yield('content')

@include('includes.footer')

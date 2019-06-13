<!DOCTYPE html>
<html>
	<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta content="yes" name="apple-mobile-web-app-capable">
        <meta content="black" name="apple-mobile-web-app-status-bar-style">
        <meta content="telephone=no" name="format-detection">
        <meta content="email=no" name="format-detection">
        @yield('css')
        <script type="text/javascript" src="{{ asset('static/common/js/jquery.min.js') }}"></script>
        <link rel="stylesheet" type="text/css" href="{{ asset('static/common/css/swiper.min.css') }}"/>
        <script src="{{ asset('static/common/js/swiper.min.js') }}" type="text/javascript" charset="utf-8"></script>

        @yield('js')

        <title>@yield('title','官网')-{{ $site->name }}</title>
	</head>
		
	<div id="head-about">
        @include('common._header')
    </div>

    @yield('content')

    <div id="foot-about">
        @include('common._footer')
    </div>	
    @yield('script')
</html>

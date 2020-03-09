<!DOCTYPE html>
<html lang="{{app()->getLocale()}}">
<head>
    <meta charset="utf-8"/>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{mix('css/app.css')}}"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
<div id="app">
    @yield('content')
</div>
<script src="{{mix('js/app.js')}}"></script>
</body>
</html>

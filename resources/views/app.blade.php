<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'SPA Training1') }}</title>

    <!-- Styles -->
    <link href="{{ mix('/build/css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">

    <router-view></router-view>

</div>
<!-- Scripts -->
<script src="{{ mix('/build/js/app.js') }}" defer></script>
</body>
</html>

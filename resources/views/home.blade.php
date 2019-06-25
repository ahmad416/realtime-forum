<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Forum::CreativeDezine</title>
        <link rel="stylesheet" href="{{asset('/css/app.css')}}">
        <link href="https://fonts.googleapis.com/css?family=Material+Icons" rel="stylesheet">
    </head>
    <body>
        <div id="app">
            <main-component></main-component>
        </div>
    </body>
    <script src="{{asset('/js/app.js')}}"></script>
</html>

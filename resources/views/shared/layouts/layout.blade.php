<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="X-UA-Compatible" content="IE=edge">
    <title>{{config('app.name', '')}}</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Styles -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body class="container-fluid">
            <header class="row">
                   @include('shared.inc.nav')
                  </header>
        <main role="main" class="row mt-5 pt-4 text-center">
            <div class="container">
          @yield('content') 
            </div>
        </div>
        <script src="{{asset('js/app.js')}}"></script>
   
    </body>
</html>

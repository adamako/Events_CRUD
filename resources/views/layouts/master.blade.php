<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <meta name="viewport" content="width=device-width, initial-scale=1">

{{--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">--}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Eventbrote</title>
    <link rel="stylesheet" href="{{asset('/css/app.css')}}">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <link href="//fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href='//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700' rel='stylesheet'>

</head>
<body>
    @include('layouts.partials.nav')
    <div class="container">

        @if(session()->has('notification.message'))
            <div class="alert alert-{{session()->get('notification.type')}}">
                {{session()->get('notification.message')}}
            </div>
        @endif
        @yield('content')
    </div>

    <script src="https://code.jquery.com/jquery.js"></script>
    <script src="{{asset('/js/app.js')}}"></script>
    <script src="{{asset('/js/larails.js')}}"></script>
    @include('flashy::message')
</body>
</html>

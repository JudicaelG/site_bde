<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Le site du bde</title>


    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <link href="{{asset('css/styleAccueil.css')}}" rel="stylesheet">
    <link href="{{asset('css/boutique.css')}}" rel="stylesheet">
    <link href="{{asset('css/styleFooter.css')}}" rel="stylesheet">
    <link href="{{asset('css/styleBoiteAIdee.css')}}" rel="stylesheet">
    <link href="{{asset('css/evenement.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


</head>
<body>

    @yield ('header')

    @include ('layouts.nav')

    @yield('content')

    @include ('layouts.footer')
</body>
</html>
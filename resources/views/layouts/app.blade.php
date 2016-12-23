<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sistema</title>

    <!-- Fonts -->
    <link href="{{asset('panel/bootstrap/css/bootstrap.min.css')}}" rel='stylesheet' type='text/css'>
    <link href="{{asset('panel/font-awesome/css/font-awesome.min.css')}}" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
    
    <link href="{{asset('auth/css/style.css')}}" rel='stylesheet' type='text/css'>
    <link href="{{asset('panel/build/css/stil_login.css')}}" rel='stylesheet' type='text/css'>



    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>
    

    <!-- Styles -->
    

    
</head>
<body id="app-layout">
    

    @yield('content')

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>

<!DOCTYPE html>
<html lang="{{ config('app.locale')}}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }} @yield('page_title')</title>
    @section('vite')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @show
</head>
<body>
    <header>
        <nav>
             <ul>
                 <li> <a href="{{ route('home')}}">Acceuil</a></li>
                  <li> <a href="{{ route('menu') }}">Menu</a></li>
                  <li> <a href="{{ route('contact')}}">contact</a></li>
                 <li> <a href="{{ route('reservation')}}">Reservation</a></li>
             </ul>
        </nav>
    </header>
    @section('content')
    @show
</body>
</html>
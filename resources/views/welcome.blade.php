<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <h1>Заголовок</h1>
        <div class="container">
            @for($i =1; $i<=12; $i++)
            <div class="card">
                <img src="{{ Vite::asset('resources/image/img1.jpg') }}" alt="">
                <h2>Карточка {{ $i }}</h2>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Similique beatae tempore possimus dolore voluptatum molestias quibusdam nulla sapiente rem. Sint, doloremque molestiae ratione mollitia fugiat ex sunt corporis dolore laudantium.</p>
                
            </div>
            @endfor
        </div>
    </body>
</html>

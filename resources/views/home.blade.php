<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <h1>Домашняя страница</h1>
        <div class="container">
            @for($i =1; $i<=12; $i++)
            <div class="card">
                <img src="{{ Vite::asset('resources/image/img2.jpg') }}" alt="">
                <h2>Карточка {{ $i }}</h2>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Similique beatae tempore possimus dolore voluptatum molestias quibusdam nulla sapiente rem. Sint, doloremque molestiae ratione mollitia fugiat ex sunt corporis dolore laudantium.</p>
            </div>
            @endfor
        </div>
</body>
</html>
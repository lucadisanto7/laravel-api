<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    @vite(['resources/js/app.js'])
</head>
<body>
    <div class="d-flex">
        @include('partials.sidebar')
    </div>
    <div id="content">
        @include('partials.header')
        <main>
            @yield('main-content')
        </main>
    </div>
</body>
</html>
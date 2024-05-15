<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('font/css/all.css') }}">
    <title>Adopets | {{ $title }} </title>
</head>

<body>
    @include('partials.nav')
    <div class="max-w-screen-xl mx-auto px-4 mt-24 bg-slate-400">
        @yield('container')
    </div>
</body>

</html>

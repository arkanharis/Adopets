<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Dashboard | {{ $title }} </title>
</head>

<body>
    @include('dashboard.partials.nav')
    <div class="max-w-screen-xl mx-auto px-4 mt-24 bg-slate-400">
        @yield('container')
    </div>
    
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
</body>

</html>

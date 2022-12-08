<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link rel="stylesheet" href="{{ asset('css/fonts.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/fontawesome.min.css')}}" />
    @vite('resources/css/app.css')
</head>

<body class="antialiased bg-[#ECF0F1]">
    <div class="xl:w-[1200px] w-full mx-auto my-0 rounded-lg p-0">
        @include('components.header')

        <h1 class="text-red-500">Nothing</h1>
    </div>
</body>

</html>

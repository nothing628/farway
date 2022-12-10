<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Farway</title>
    <link rel="stylesheet" href="{{ asset('css/fonts.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/all.min.css')}}" />
    @vite('resources/css/app.css')
</head>

<body class="antialiased bg-[#ECF0F1]">
    <div class="xl:w-[1200px] w-full mx-auto my-0 rounded-lg p-0">
        @include('components.header')

        <div class="bg-white relative -mt-[50px] z-30 p-[30px] box-border shadow-md">
            <x-forum.breadcrumb :items="['Board index']"></x-forum.breadcrumb>

            <div class="m-0 clear-both">
                <h1 class="text-red-500">Nothing</h1>

                <x-forum.info-container>
                    <x-forum.information.login></x-forum.information.login>
                    <x-forum.information.online-stat></x-forum.information.online-stat>
                    <x-forum.information.statistic></x-forum.information.statistic>
                </x-forum.info-container>
            </div>
        </div>

        {{-- @include('components.social') --}}
        @include('components.footer')
        @include('components.copyright')
    </div>
</body>

</html>

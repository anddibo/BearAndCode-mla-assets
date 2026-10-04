<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="min-h-screen w-full flex items-center">
        
        <!-- <div class="w-full bg-blue-base p-4"></div> -->
        
        <!--
        <h1 class="text-(length:--font-size-title-1) leading-(--line-height-title-1)">
            Olá Mundo!
        </h1>
        -->

        <div class="flex flex-col space-y-4">
            <div class="w-[180px] h-[80px] shadow-hard"></div>
            <div class="w-[180px] h-[80px] shadow-regular"></div>
            <div class="w-[180px] h-[80px] shadow-medium"></div>
            <div class="w-[180px] h-[80px] shadow-big"></div>
            <div class="w-[180px] h-[80px] shadow-card"></div>
            <div class="w-[180px] h-[80px] shadow-badge"></div>
        </div>

    </body>
</html>

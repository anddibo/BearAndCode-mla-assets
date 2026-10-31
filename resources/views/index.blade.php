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

        <!-- exemplo de uso do x-data, x-show e :class 
        <div class="flex flex-col space-y-4" x-data="{visible: true, hasShadow: true}">
            <div x-show="visible" :class="{'w-[180px] h-[80px] bg-blue-base rounded-md': true, 'shadow-hard': hasShadow}"></div>
            <div class="w-[180px] h-[80px] bg-blue-100 shadow-regular rounded-md"></div>
            <div class="w-[180px] h-[80px] bg-blue-200 shadow-medium rounded-md"></div>
            <div class="w-[180px] h-[80px] bg-blue-300 shadow-big rounded-md"></div>
            <div class="w-[180px] h-[80px] bg-blue-400 shadow-card rounded-md"></div>
            <div class="w-[180px] h-[80px] bg-blue-500 shadow-badge rounded-md"></div>
        </div>
        -->

        <!-- exemplo de uso do x-data, x-show e x-on:click
        <div class="flex flex-col space-y-4" x-data="{visible: false}">
            
            <div x-show="visible" class="w-[180px] h-[80px] bg-blue-base rounded-md shadow-hard}"></div>
            
            <button x-on:click="visible = !visible" class="w-[180px] h-[80px] bg-blue-100 shadow-regular rounded-md">
                Mostrar primeira caixa
            </button>

            <div class="w-[180px] h-[80px] bg-blue-200 shadow-medium rounded-md"></div>
            <div class="w-[180px] h-[80px] bg-blue-300 shadow-big rounded-md"></div>
            <div class="w-[180px] h-[80px] bg-blue-400 shadow-card rounded-md"></div>
            <div class="w-[180px] h-[80px] bg-blue-500 shadow-badge rounded-md"></div>
        </div>
        -->

        <!-- exemplo de uso do x-data, x-show, x-on:click, x-text e x-model
        <div class="flex flex-col space-y-4" x-data="{visible: false, btnText: 'Mostrar caixa', text: '', array: [1,2,3,4,5]}">
            
            <h1 class="text-title-4" x-text="text"></h1>

            <div x-show="visible" class="w-[180px] h-[80px] bg-blue-base rounded-md shadow-hard}"></div>
            
            <button @click="visible = !visible" class="w-[180px] h-[80px] bg-blue-100 shadow-regular rounded-md" x-text="btnText">
            </button>

            <div class="w-[180px] h-[80px] bg-blue-200 shadow-medium rounded-md"></div>
            <div class="w-[180px] h-[80px] bg-blue-300 shadow-big rounded-md"></div>
            <div class="w-[180px] h-[80px] bg-blue-400 shadow-card rounded-md"></div>
            <div class="w-[180px] h-[80px] bg-blue-500 shadow-badge rounded-md"></div>

            <input x-model="text" class="shadow-hard">
        </div>
        -->

        <!-- exemplo de uso do x-data, x-show, x-on:click, x-text, x-model e x-for
        <div class="flex flex-col space-y-4" x-data="{visible: false, btnText: 'Mostrar caixa', text: '', array: [1,2,3,4,5,6,7,8,9]}">
            
            <h1 class="text-title-4" x-text="text"></h1>

            <template x-for="item in array">
                <div :class="`w-[180px] h-[80px] bg-blue-${item*100} shadow-medium rounded-md`"></div>
            </template>

            <input x-model="text" class="shadow-hard">
        </div>
        -->        

        <!-- exemplo de uso do x-data, x-show, x-on:click, x-text, x-model, x-for e x-transition
        <div class="flex flex-col space-y-4" x-data="{visible: false, btnText: 'Mostrar caixa', text: '', array: [1,2,3,4,5,6,7,8,9]}">
            
            <h1 class="text-title-4" x-text="text"></h1>

            <template x-for="item in array">
                <div x-transition x-show="visible" :class="`w-[180px] h-[80px] bg-blue-${item*100} shadow-medium rounded-md`"></div>
            </template>

            <button @click="visible = !visible" class="p-4 bg-blue-300 rounded-md">
                Mostrar caixas
            </button>
        </div>        
        -->

        <div class="flex flex-col space-y-4" x-data="{visible: false, btnText: 'Mostrar caixa', text: '', array: [1,2,3,4,5,6,7,8,9]}">
            
            <template x-teleport="#btnTeleport">
                <button @click="visible = !visible" class="p-4 bg-blue-300 rounded-md">
                    Mostrar caixas
                </button>
            </template>
            
            <h1 class="text-title-4" x-text="text"></h1>

            <template x-for="item in array">
                <template x-if="item % 2 === 0">
                    <div x-transition x-show="visible" :class="`w-[180px] h-[80px] bg-blue-${item*100} shadow-medium rounded-md`"></div>
                </template>
            </template>

            <div id="btnTeleport">

            </div>

        </div>        
        
    </body>
</html>

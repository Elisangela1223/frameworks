<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiase content-center bg-[#FFEDD5] font-serif">
    
        <div class="w-[300px] mx-auto">
            <div class="text-center my-8">
                <h1 class="text-3xl mb-1 font-bold">ROCKET<span class="text-[#995000]">COFFEE</span></h1>
                <p class="text-sm">Aberto todos os dias. 8h - 21h</p>
            </div>

            <div>
                <h3 class="text-lg bg-[#FED7AA] text-center mb-6 font-bold">BRUNCH</h3>
                <div class="mb-4">
                    <div class="mb-2 flex flex-row font-bold text-base">
                        <p class="grow flex-2">WAFFLE DOCE</p>
                        <p class="flex-1">R$ 37.40</p>
                    </div>
                    <p class="text-sm w-60">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>

                <div class="mb-4">
                    <div class="mb-2 flex flex-row font-bold text-base">
                        <p class="grow flex-2">ARROZ DOCE</p>
                        <p class="flex-1">R$ 37.40</p>
                    </div>
                    <p class="text-sm w-60">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>

                <div class="mb-4">
                    <div class="mb-2 flex flex-row font-bold text-base">
                        <p class="grow flex-2">MAÇÃ DOCE</p>
                        <p class="flex-1">R$ 37.40</p>
                    </div>
                    <p class="text-sm w-60">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
            </div>

            <div>
                <h3 class="text-lg bg-[#FED7AA] text-center mb-6 font-bold">BEBIDAS</h3>
                <div class="mb-4">
                    <div class="mb-2 flex flex-row font-bold text-base">
                        <p class="grow flex-2">SUCO DE ALFACE</p>
                        <p class="flex-1">R$ 37.40</p>
                    </div>
                    <p class="text-sm w-60">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>

                <div class="mb-4">
                    <div class="mb-2 flex flex-row font-bold text-base">
                        <p class="grow flex-2">VINHO FINO</p>
                        <p class="flex-1">R$ 37.40</p>
                    </div>
                    <p class="text-sm w-60">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>

                <div class="mb-4">
                    <div class="mb-2 flex flex-row font-bold text-base">
                        <p class="grow flex-2">ÁGUA DE COCO</p>
                        <p class="flex-1">R$ 37.40</p>
                    </div>
                    <p class="text-sm w-60">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
            </div>
        </div>

    </body>
</html>
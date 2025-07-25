<x-app-layout>
    <body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] flex  items-center lg:justify-center flex-col overflow-x-hidden">
       @include('layouts.header')
                    <h2 class="text-3xl sm:text-4xl md:text-5xl font-serif text-gray-900 text-center relative mb-6 mt-8">
                <span class="inline-block relative">
                    <span class="absolute -bottom-1 left-1/2 -translate-x-1/2 w-11/12 h-2 bg-green-500 rounded-lg z-0"></span>
                    <span class="relative z-10">{{$post->title}}</span>
                </span> 
                <br>
                <div class="flex flex-row gap-8 items-center justify-start mb-12">
                    <svg class="h-4 w-4 -mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M256 0a256 256 0 1 1 0 512A256 256 0 1 1 256 0zM232 120l0 136c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2 280 120c0-13.3-10.7-24-24-24s-24 10.7-24 24z"/></svg>
                    <p class="text-sm">Dauer:</p><p class="text-sm">{{$post->duration}}min</p>
                </div>
            </h2>
    </body>
</x-app-layout>
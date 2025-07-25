@php
    use App\Models\Travel;
    use Illuminate\Support\Str; 

@endphp
<x-app-layout>
    <body class="overflow-y-auto h-screen bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] flex  items-center lg:justify-center flex-col">
       @include('layouts.header')

    <div class="grid grid-cols-[1fr] md:grid-cols-[3fr_7fr] px-4 ">
        <div class="overflow-y-auto flex flex-col gap-2 border-r border-gray-300 order-2 md:order-1 ">
            <a href="{{route('welcome')}}"class="hidden md:block mt-4 rounded-full p-2 bg-blue-300 w-[3rem] ">
                <svg class="h-7 w-7 cursor-pointer" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z"/></svg>
            </a>
            {{-- href="{{route('travel.show', ['slug' => Str::slug($cooking->title) ])}}" --}}
            <div>
                @foreach ($travels as $travel)
                <a href="{{route('travel.show', ['slug' => Str::slug($travel->title) ])}}" class="cursor-pointer hover:bg-gray-200  p-4 py-4 grid grid-cols-[8fr_2fr]  mt-4">
                        <div>
                            <div class="flex flex- font-semibold text-lg md:text-base">
                                <svg class="h-4 w-4 mr-2 opacity-60 am:mt-4 mt-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M560 160A80 80 0 1 0 560 0a80 80 0 1 0 0 160zM55.9 512l325.2 0 75 0 122.8 0c33.8 0 61.1-27.4 61.1-61.1c0-11.2-3.1-22.2-8.9-31.8l-132-216.3C495 196.1 487.8 192 480 192s-15 4.1-19.1 10.7l-48.2 79L286.8 81c-6.6-10.6-18.3-17-30.8-17s-24.1 6.4-30.8 17L8.6 426.4C3 435.3 0 445.6 0 456.1C0 487 25 512 55.9 512z"/></svg>
                                <h3><span class="text-gray-500 text-lg md:text-base ">{{$loop->count - $loop->index}}.</span>    {{ Str::limit($travel->title, 24) }}</h3>
                            </div>
                            <div>
                                <p class="text-gray-500 md:text-base md:text-[0.6rem] ml-6">{{$travel->user->name}}</p>
                            </div>
                        </div>
                            <div class="h-14 w-14 rounded-full p-[2px] bg-gradient-to-tr from-blue-400 to-yellow-400">
                                <img src="{{ asset('imgs/photo-1527668752968-14dc70a27c95.avif') }}"
                                alt=""
                                class="h-full w-full object-cover rounded-full border-2 border-white">
                            </div>          
                </a>
                @endforeach
            <div>
                <svg class="cursor-pointer btn-addRecipe fixed bottom-[4%] right-[10%] sm:bottom-[3%] sm:right-[72%] h-[3rem] w-[3rem] p-2 bg-blue-300 border rounded-xl " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 144L48 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l144 0 0 144c0 17.7 14.3 32 32 32s32-14.3 32-32l0-144 144 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-144 0 0-144z"/></svg>
            </div>
            </div>
        </div>
        <div class=" md:p-12 p-6 -mt-12 text-center leading-[3rem] order-1 md:order-2 mb-8">
            <a href={{route('welcome')}} class="block md:hidden mt-4 rounded-full p-2 bg-blue-300 w-[3.6rem] fixed top-12 left-6 cursor-pointer">
                <svg class="h-10 w-10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z"/></svg>
            </a>
            <div class="flex flex-col items-center justify-center mb-8 mt-16">
                <h2 class="text-3xl sm:text-4xl md:text-5xl font-serif text-gray-900 text-center relative mb-6">
                    <span class="inline-block relative">
                        <span class="absolute -bottom-1 left-1/2 -translate-x-1/2 w-11/12 h-2 bg-yellow-300 rounded-lg z-0"></span>
                        <span class="relative z-10">Ausflüge</span>
                    </span>
                    <br>
                    <p class="text-center text-gray-500 text-sm mt-1 uppercase tracking-wider">
                    Regional. Neue Entdecken. Schweiz.
                    </p>
                </h2>
            </div>
            <p class="italic mx-4 -mt-4 md:-mt-0 md:block text-center text-sm md:text-m">Wo gehen Sie am liebsten hin?. <br> <span class="md:block hidden">Ob draussen oder drinnen, bringen Sie schwung ins Leben anderer Menschen mit tollen Ideen.</span></p>
            <div class="flex flex-row mt-16 p-4">
                <img class="h-36 w-36 object-cover rounded-full -mr-12 border-white border-4 " src="{{asset('imgs/travel/alpwirtschaft-horben-sommer-12.jpg')}}" alt="">
                <img class="h-36 w-36 object-cover rounded-full -mr-12 border-white border-4 "  src="{{asset('imgs/travel/verkehrshaus-luzern-1.jpg')}}" alt="">
                <img class="h-36 w-36 object-cover rounded-full -mr-12 border-white border-4 "  src="{{asset('imgs/travel/photo-1530638458177-fcc275860f8b.avif')}}" alt="">
                <img class="h-36 w-36 object-cover rounded-full -mr-12 border-white border-4 "  src="{{asset('imgs/travel/photo-1563292769-4e05b684851a.avif')}}" alt="">
                <img class="h-36 w-36 object-cover rounded-full -mr-12 border-white border-4 "  src="{{asset('imgs/travel/photo-1605911015055-caa77d83c64c.avif')}}" alt="">
                <img class="h-36 w-36 object-cover rounded-full -mr-12 border-white border-4 "  src="{{asset('imgs/travel/chaplin-c-montreuxriviera_COVER.jpg')}}" alt="">
                <img class="h-36 w-36 object-cover rounded-full -mr-12 border-white border-4 "  src="{{asset('imgs/travel/img_4kq_iiefaabi.webp')}}" alt="">
            </div>
        </div>
    </div>
    </body>
</x-app-layout>
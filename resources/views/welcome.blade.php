<x-app-layout>
    <body class=" bg-white dark:bg-[#0a0a0a] text-[#1b1b18] flex  items-center lg:justify-center  flex-col">
       @include('layouts.header')
    <div class=" h-[100%] md:h-[calc(100vh-4rem)] grid grid-cols-1 w-full md:grid-cols-2">
        <div class="flex flex-col items-center justify-center text-center ">
            <h1   class=" md:font-semibold text-4xl mt-6 xl:text-6xl mb-8 p-4 bg-gradient-to-r from-[#1864ab] to-[#339af0] bg-clip-text text-transparent">Willkommen im </br> Forum</h1>
            <p class="text-center">von uns für uns</p>
            <p class="text-center">werden sie teil der Bewegung.</p>
            
            <a
            href="{{ route('register') }}"
            class="bg-[#339af0] mt-8 mb-12 inline-block px-5 py-1.5 text-l dark:text-[#EDEDEC] border-[#339af0] border-gray  border rounded-full text-white text-[1.2rem] leading-normal">
            Register
            </a>
        </div>
        <div class="bg-gray-200 m-8 rounded-[2rem] md:bg-inherit flex items-center justify-center p-12 grid md:grid-cols-3 grid-cols-2 gap-4">
            <a href="{{route('cooking.index')}}" class="hover:animate-wobble hover:bg-[#d0ebff] bg-white md:bg-inherit  flex flex-col items-center justify-center border rounded-lg md:w-full p-6 mx-auto h-full cursor-pointer  md:border border-black h-28 w-28 md:h-[10.2rem] md:w-[9.2rem]">
                <svg class="md:h-20 md:w-20 m-15 w-15 -mt-4 sm:-mt-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M416 0C400 0 288 32 288 176l0 112c0 35.3 28.7 64 64 64l32 0 0 128c0 17.7 14.3 32 32 32s32-14.3 32-32l0-128 0-112 0-208c0-17.7-14.3-32-32-32zM64 16C64 7.8 57.9 1 49.7 .1S34.2 4.6 32.4 12.5L2.1 148.8C.7 155.1 0 161.5 0 167.9c0 45.9 35.1 83.6 80 87.7L80 480c0 17.7 14.3 32 32 32s32-14.3 32-32l0-224.4c44.9-4.1 80-41.8 80-87.7c0-6.4-.7-12.8-2.1-19.1L191.6 12.5c-1.8-8-9.3-13.3-17.4-12.4S160 7.8 160 16l0 134.2c0 5.4-4.4 9.8-9.8 9.8c-5.1 0-9.3-3.9-9.8-9L127.9 14.6C127.2 6.3 120.3 0 112 0s-15.2 6.3-15.9 14.6L83.7 151c-.5 5.1-4.7 9-9.8 9c-5.4 0-9.8-4.4-9.8-9.8L64 16zm48.3 152l-.3 0-.3 0 .3-.7 .3 .7z"/></svg>
                <p class="text-xl mt-4 sm:mt-0">Koch</p>
            </a>
            <a href="{{route('travel.index')}}" class="hover:animate-wobble hover:bg-[#d0ebff] bg-[#d0ebff] bg-white md:bg-inherit  flex flex-col items-center justify-center border rounded-lg md:w-full p-6  mx-auto  h-full cursor-pointer  md:border border-black h-28 w-28 md:h-[10.2rem] md:w-[9.2rem]">
                <svg class="md:h-20 md:w-20 m-15 w-15 -mt-4 sm:-mt-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M560 160A80 80 0 1 0 560 0a80 80 0 1 0 0 160zM55.9 512l325.2 0 75 0 122.8 0c33.8 0 61.1-27.4 61.1-61.1c0-11.2-3.1-22.2-8.9-31.8l-132-216.3C495 196.1 487.8 192 480 192s-15 4.1-19.1 10.7l-48.2 79L286.8 81c-6.6-10.6-18.3-17-30.8-17s-24.1 6.4-30.8 17L8.6 426.4C3 435.3 0 445.6 0 456.1C0 487 25 512 55.9 512z"/></svg>
                <p class="text-xl mt-4 sm:mt-0">Ausflug</p>
            </a>
            <a class="hover:animate-wobble hover:bg-[#d0ebff]  bg-[#d0ebff] bg-white md:bg-inherit  flex flex-col items-center justify-center border rounded-lg md:w-full  p-6  mx-auto  h-full cursor-pointer  md:border border-black h-28 w-28 md:h-[10.2rem] md:w-[9.2rem]">
                            <svg class="md:h-20 md:w-20 m-15 w-15 -mt-4 sm:-mt-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M323.4 85.2l-96.8 78.4c-16.1 13-19.2 36.4-7 53.1c12.9 17.8 38 21.3 55.3 7.8l99.3-77.2c7-5.4 17-4.2 22.5 2.8s4.2 17-2.8 22.5l-20.9 16.2L512 316.8 512 128l-.7 0-3.9-2.5L434.8 79c-15.3-9.8-33.2-15-51.4-15c-21.8 0-43 7.5-60 21.2zm22.8 124.4l-51.7 40.2C263 274.4 217.3 268 193.7 235.6c-22.2-30.5-16.6-73.1 12.7-96.8l83.2-67.3c-11.6-4.9-24.1-7.4-36.8-7.4C234 64 215.7 69.6 200 80l-72 48 0 224 28.2 0 91.4 83.4c19.6 17.9 49.9 16.5 67.8-3.1c5.5-6.1 9.2-13.2 11.1-20.6l17 15.6c19.5 17.9 49.9 16.6 67.8-2.9c4.5-4.9 7.8-10.6 9.9-16.5c19.4 13 45.8 10.3 62.1-7.5c17.9-19.5 16.6-49.9-2.9-67.8l-134.2-123zM16 128c-8.8 0-16 7.2-16 16L0 352c0 17.7 14.3 32 32 32l32 0c17.7 0 32-14.3 32-32l0-224-80 0zM48 320a16 16 0 1 1 0 32 16 16 0 1 1 0-32zM544 128l0 224c0 17.7 14.3 32 32 32l32 0c17.7 0 32-14.3 32-32l0-208c0-8.8-7.2-16-16-16l-80 0zm32 208a16 16 0 1 1 32 0 16 16 0 1 1 -32 0z"/></svg>
                <p class="text-xl mt-4 sm:mt-0">Helping</p>
            </a>
            <a href="{{route('book.index')}}" class="hover:animate-wobble hover:bg-[#d0ebff] bg-[#d0ebff] bg-white md:bg-inherit flex flex-col items-center justify-center border rounded-lg md:w-full  p-6  mx-auto  h-full cursor-pointer  md:border border-black h-28 w-28 md:h-[10.2rem] md:w-[9.2rem]">
                            <svg class="md:h-20 md:w-20 m-15 w-15 -mt-4 sm:-mt-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M96 0C43 0 0 43 0 96L0 416c0 53 43 96 96 96l288 0 32 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l0-64c17.7 0 32-14.3 32-32l0-320c0-17.7-14.3-32-32-32L384 0 96 0zm0 384l256 0 0 64L96 448c-17.7 0-32-14.3-32-32s14.3-32 32-32zm32-240c0-8.8 7.2-16 16-16l192 0c8.8 0 16 7.2 16 16s-7.2 16-16 16l-192 0c-8.8 0-16-7.2-16-16zm16 48l192 0c8.8 0 16 7.2 16 16s-7.2 16-16 16l-192 0c-8.8 0-16-7.2-16-16s7.2-16 16-16z"/></svg>            
                <p class="text-xl mt-4 sm:mt-0">Book</p>
            </a>
            <a class="hidden md:block bg-[#d0ebff] cursor-pointer bg-white md:bg-inherit flexitems-center justify-center border rounded-lg p-6 md:border border-black md:h-[10.2rem] md:w-[9.2rem]">
                <p class="text-xl text-center mt-4 sm:mt-10 italic text-[0.9rem]">in Arbeit ...</p>
            </a>
            <a class="hidden md:block bg-[#d0ebff] cursor-pointer bg-white md:bg-inherit flex items-center justify-center border rounded-lg p-6 md:border border-black md:h-[10.2rem] md:w-[9.2rem]">
                <p class="text-xl text-center mt-4 sm:mt-10 italic text-[0.9rem] ">in Arbeit...</p>
            </a>
        </div>
    </div>


    @if (Route::has('login'))
    <div class="h-14.5 hidden lg:block"></div>
    @endif
    <section class="h-[50vh] mb-12 px-4 sm:px-12 flex flex-col items-center justify-center">
        <div >
            <h2 class="md:text-[4rem] mt-[20rem] md:mt-[6rem] text-[2.6rem] md:font-semibold mt-6 xl:text-6xl mb-8 p-4 bg-gradient-to-r from-[#1864ab] to-[#339af0] bg-clip-text text-transparent">Über uns:</h2>
        </div>
        <div class="flex items-center align-center p-4 ">
            <p class="text-center md:text-left max-w-xl md:max-w-2xl lg:max-w-4xl">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quos, aliquam! Q  amet numquam consectetur vel harum ipsa quasi, architecto eveniet nisi accusam    exercitationem vitae tenetur maiores nam repellat doloribus ab? Lorem ipsum dol sit amet consectetur adipisicing elit. Eum ratione consequatur maiores asperior  quo dolores, repellat delectus quisquam autem a sed? Deserunt necessitatib    omnis quisquam hic culpa labore. Quod, officia. Lorem ipsum, dolor sit am   consectetur adipisicing elit. Ipsa quisquam quas similique voluptatem repell   perspiciatis, animi provident aliquam, eaque ullam esse dignissimos qui, min   maiores. Voluptatibus sunt amet exercitationem ad! Lorem ipsum dolor sit am    consectetur adipisicing elit. Eaque illum amet autem non est harum reru aliquam, nobis soluta suscipit reprehenderit provident excepturi quibusd doloribus, ab iure. Consequuntur, aliquid optio.</p>
        </div>
    </section>
</body>
</x-app-layout>

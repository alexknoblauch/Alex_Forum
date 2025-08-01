@php
    use App\Models\Travel;
    use Illuminate\Support\Str; 

@endphp
<x-app-layout>
    <body class="overflow-y-auto h-screen bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] flex  items-center lg:justify-center flex-col overflow-x-hidden">
       @include('layouts.header')

    <div class="grid grid-cols-[1fr] md:grid-cols-[3fr_7fr] px-4 ">
        <div class="mt-12 overflow-y-auto flex flex-col gap-2 md:border-r md:border-gray-300 order-2 md:order-1 ">
     
            {{-- href="{{route('travel.show', ['slug' => Str::slug($cooking->title) ])}}" --}}
            <div>
                @foreach ($travels as $travel)
                <a href="{{route('travel.show', ['slug' => Str::slug($travel->title) ])}}" class="cursor-pointer hover:bg-gray-200 p-4 py-4 grid grid-cols-[8fr_2fr] rounded-l-lg mt-4">
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
                <svg class="cursor-pointer btn-travel fixed bottom-[4%] right-[2%] sm:bottom-[3%] sm:right-[72%] h-[3rem] w-[3rem] p-2 bg-blue-300 border rounded-xl z-50" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 144L48 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l144 0 0 144c0 17.7 14.3 32 32 32s32-14.3 32-32l0-144 144 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-144 0 0-144z"/></svg>
            </div>
            </div>
        </div>
        <div class="md:p-12 p-6 -mt-12 text-center leading-[3rem] order-1 md:order-2 mb-8">
            <a href={{route('welcome')}} class="block mt-4 rounded-full p-2 bg-blue-300 w-[3.6rem] fixed top-12 md:left-6 left-[85%] cursor-pointer z-20">
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
                
                <img class="md:h-36 md:w-36 h-24 w-24 object-cover rounded-full -mr-12 border-white border-4 z-10 " src="{{asset('imgs/travel/alpwirtschaft-horben-sommer-12.jpg')}}" alt="">
                <img class="md:h-36 md:w-36 h-24 w-24 object-cover rounded-full -mr-12 border-white border-4 z-10 "  src="{{asset('imgs/travel/verkehrshaus-luzern-1.jpg')}}" alt="">
                <img class="md:h-36 md:w-36 h-24 w-24 object-cover rounded-full -mr-12 border-white border-4 z-10 "  src="{{asset('imgs/travel/photo-1530638458177-fcc275860f8b.avif')}}" alt="">
                <img class="md:h-36 md:w-36 h-24 w-24 object-cover rounded-full -mr-12 border-white border-4 z-10 "  src="{{asset('imgs/travel/photo-1563292769-4e05b684851a.avif')}}" alt="">
                <img class="md:h-36 md:w-36 h-24 w-24 object-cover rounded-full -mr-12 border-white border-4 z-10 "  src="{{asset('imgs/travel/photo-1605911015055-caa77d83c64c.avif')}}" alt="">
                <img class="md:h-36 md:w-36 h-24 w-24 object-cover rounded-full -mr-12 border-white border-4 z-10 "  src="{{asset('imgs/travel/chaplin-c-montreuxriviera_COVER.jpg')}}" alt="">
                <img class="md:h-36 md:w-36 h-24 w-24 object-cover rounded-full -mr-12 border-white border-4 z-10 "  src="{{asset('imgs/travel/img_4kq_iiefaabi.webp')}}" alt="">
                <div class="absolute md:bottom-20 bottom-40 w-[70%] md:w-[50%] h-20 bg-yellow-300  opacity-50 rounded-full blur-3xl z-0 overflow-x-hidden"></div>
            </div>
        </div>
    </div>


    <div class="overlay hidden fixed inset-0 bg-black/50 z-40"></div>
    <div class="">
        <div class=" modal hidden m-8 p-8 md:m-24 md:h-[65%] md:w-[60%]  rounded-xl  h-[60%] bg-white fixed inset-0 top-[30%] left-[45%] transform -translate-x-1/2 -translate-y-1/2  z-50">
            <span class="x-modal cursor-pointer p-1 border-none rounded-xl bg-gray-200 absolute right-2 top-2"><svg class="h-7 w-7" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"/></svg></span>
            <form class="grid grid-rows-[2fr_8fr]">
                <div class="flex items-center justify-between mt-4">
                    <div class="flex flex-row imtes-center ustify-center gap-4 w-[100%]">
                        <label class="flex items-center justify-center text-[20px] md:text-xl" for="title">Titel:</label>
                        <input  class="rounded-xl outline-none focus:ring-0 focus:outline-none focus:border-gray-500 w-[70%]" name="title" id="title" type="text">
                    </div>
                    <div  class="flex flex-row imtes-center ustify-center gap-4 w-[70%]">
                        <label class=" flex items-center justify-center md:text-xl" for="duration">Kanton:</label>
                        <select class="rounded-xl outline-none focus:ring-0 focus:outline-none focus:border-gray-500 w-[40%] w-full h-full" name="duration"  id="duration">
                            <option value="" selected disabled></option>
                            <option value="AG">Aargau</option>
                            <option value="AI">Appenzell Innerrhoden</option>
                            <option value="AR">Appenzell Ausserrhoden</option>
                            <option value="BE">Bern</option>
                            <option value="BL">Basel-Landschaft</option>
                            <option value="BS">Basel-Stadt</option>
                            <option value="FR">Freiburg</option>
                            <option value="GE">Genf</option>
                            <option value="GL">Glarus</option>
                            <option value="GR">Graubünden</option>
                            <option value="JU">Jura</option>
                            <option value="LU">Luzern</option>
                            <option value="NE">Neuenburg</option>
                            <option value="NW">Nidwalden</option>
                            <option value="OW">Obwalden</option>
                            <option value="SG">St. Gallen</option>
                            <option value="SH">Schaffhausen</option>
                            <option value="SO">Solothurn</option>
                            <option value="SZ">Schwyz</option>
                            <option value="TG">Thurgau</option>
                            <option value="TI">Tessin</option>
                            <option value="UR">Uri</option>
                            <option value="VD">Waadt</option>
                            <option value="VS">Wallis</option>
                            <option value="ZG">Zug</option>
                            <option value="ZH">Zürich</option>
                        </select>
                    </div>
                </div>
                <div class="mt-4 h-[100%]">
                    <div class="flex justify-between flex-row items-center justify-left mb-2">
                        <div class="flex items-center justify-between">
                            <svg class="md:h-5 md:w-5 mr-2 w-15 -mt-4 sm:-mt-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M416 0C400 0 288 32 288 176l0 112c0 35.3 28.7 64 64 64l32 0 0 128c0 17.7 14.3 32 32 32s32-14.3 32-32l0-128 0-112 0-208c0-17.7-14.3-32-32-32zM64 16C64 7.8 57.9 1 49.7 .1S34.2 4.6 32.4 12.5L2.1 148.8C.7 155.1 0 161.5 0 167.9c0 45.9 35.1 83.6 80 87.7L80 480c0 17.7 14.3 32 32 32s32-14.3 32-32l0-224.4c44.9-4.1 80-41.8 80-87.7c0-6.4-.7-12.8-2.1-19.1L191.6 12.5c-1.8-8-9.3-13.3-17.4-12.4S160 7.8 160 16l0 134.2c0 5.4-4.4 9.8-9.8 9.8c-5.1 0-9.3-3.9-9.8-9L127.9 14.6C127.2 6.3 120.3 0 112 0s-15.2 6.3-15.9 14.6L83.7 151c-.5 5.1-4.7 9-9.8 9c-5.4 0-9.8-4.4-9.8-9.8L64 16zm48.3 152l-.3 0-.3 0 .3-.7 .3 .7z"/></svg>
                            <label class="md:text-xl" for="description">Rezept:</label><br>
                        </div>
                        <div class="flex gap-2">
                            <label class="md:text-xl" for="gemeinde">Gemeinde:</label><br>
                            <div class="relative">
                                <input autocomplete="off" class="gemeinde-input rounded-xl outline-none focus:ring-0 focus:outline-none focus:border-gray-500 w-[12.5rem] w-full h-full" name="gemeinde" id="gemeinde" type="text">
                            <div class="gemeinde-preview absolute top-[3rem] left-[0%] rounded-l author-results bg-[#F2F2F2]"></div>
                            </div>
                        </div>
                    </div>
                    <textarea class="rounded-xl outline-none focus:ring-0 focus:outline-none focus:border-gray-500 w-[100%] h-[80%]" name="description"  id="description"></textarea>
                </div>
                <button
                    type="submit"
                    class="mt-4 px-6 py-2 w-[30%] rounded-full bg-blue-500 text-white font-semibold shadow-md hover:from-blue-600 hover:to-yellow-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-400 transition-all duration-300">Teilen
                </button>            
            </form>

        </div>
    </div>
    <script>
        const overlay = document.querySelector('.overlay')
        const modal = document.querySelector('.modal')
        const addTravel = document.querySelector('.btn-travel')
        const closeModal = document.querySelector('.x-modal')
        const inputGemeinde = document.querySelector('.gemeinde-input')
        const outputGemeinde = document.querySelector('.gemeinde-preview')

        function toggleVisibility(){
            overlay.classList.toggle('hidden');
            modal.classList.toggle('hidden');
        }

        function clickToggleVisibility(e){
            const click = e.target;
            if(!click) return;
            toggleVisibility();
        }

        addTravel.addEventListener('click', clickToggleVisibility)
        closeModal.addEventListener('click', clickToggleVisibility)

        document.addEventListener('keydown', function(e){
            if(e.key === 'Escape'){
                if(!modal.classList.contains('hidden'))
                toggleVisibility();
            }
        })


        const gemeinden = @json($gemeinden);

        function getGemeindePreviews(inputText){
            const regex = new RegExp(`^(${inputText})`, 'gi')
 
            let matches = gemeinden.filter(gem => {
                return gem.gemeinde.match(regex)
            })

            if(!inputText){
                outputGemeinde.innerHTML = ''
                return
            }

            const markup = matches.map(match => {
                const highligted = match.gemeinde.replace(regex, '<b>$1</b>')
                return `<div class="px-2 py-1 hover:bg-gray-200 cursor-pointer rounded-l" data-id='${match.id}'>${highligted}</div>`}).join('');
                

            outputGemeinde.innerHTML = markup
        }

        inputGemeinde.addEventListener('input',() => getGemeindePreviews(inputGemeinde.value))
    </script>
    </body>
</x-app-layout>
<x-app-layout>
    <body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] flex  items-center lg:justify-center flex-col overflow-x-hidden">
       @include('layouts.header')

    <div class="grid grid-cols-[1fr]  md:grid-cols-[3fr_7fr] px-4 md:overflow-y-hidden">
        <div class="mb-2 flex flex-col gap-2 md:border-r md:border-gray-300 order-2 md:order-1 max-h-[calc(100vh-3rem)] md:overflow-y-auto overflow-y-visible scroll-container ">
            @foreach ($tricks as $trick)
                    <a href="{{route('trick.show', ['tricks_und_tipp' => $trick->title_slug])}}" class="cursor-pointer hover:bg-gray-200 p-4 py-4 grid grid-cols-[8fr_2fr] mt-4 md:bg-inherit bg-[#EAECEF] rounded-[9px]">
                            <div class="flex items-center justify-between">
                                <div class="flex flex- font-semibold text-lg md:text-base">
                                    <svg class="h-5 w-5 mr-2 opacity-60 am:mt-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M420.9 448C428.2 425.7 442.8 405.5 459.3 388.1C492 353.7 512 307.2 512 256C512 150 426 64 320 64C214 64 128 150 128 256C128 307.2 148 353.7 180.7 388.1C197.2 405.5 211.9 425.7 219.1 448L420.8 448zM416 496L224 496L224 512C224 556.2 259.8 592 304 592L336 592C380.2 592 416 556.2 416 512L416 496zM312 176C272.2 176 240 208.2 240 248C240 261.3 229.3 272 216 272C202.7 272 192 261.3 192 248C192 181.7 245.7 128 312 128C325.3 128 336 138.7 336 152C336 165.3 325.3 176 312 176z"/></svg>
                                    <h3><span class="text-gray-500 text-lg md:text-base ">{{$loop->count - $loop->index}}.</span>    {{ Str::limit($trick->title, 40) }}</h3>
                                </div>
                            </div>                  
                            <div class="flex items-end  justify-end">
                                <p class="text-[0.7rem] text-gray-500">{{$trick->created_at->format('d.m.y')}}</p>
                            </div>
                    </a>
            @endforeach  
        </div>

        <div class="md:p-12 p-6 -mt-12 text-center leading-[3rem] order-1 md:order-2">
            <div class="flex flex-col items-center justify-center mb-8 mt-16">
                <h2 class="text-3xl sm:text-4xl md:text-5xl font-serif text-gray-900 text-center relative mb-6">
                    <span class="inline-block relative">
                        <span class="absolute -bottom-1 left-1/2 -translate-x-1/2 w-11/12 h-2 bg-cyan-500 rounded-lg z-0"></span>
                        <span class="relative z-10">Tricks & Tipps</span>
                    </span>
                    <br>
                    <span class="block mt-3 text-base sm:text-xl md:text-2xl text-gray-600 font-light">
                        <p>Was haben sie gelernt in Ihrer Pension?</p>
                    </span>
                </h2>
                </div>
                <div class="flex items-center justify-center">
                    <p class="italic mx-4 -mt-4 md:-mt-0 md:block text-center text-sm md:text-[1rem] max-w-[80%]">Hier können Sie Erkenntnisse und Erfahrungen zu teilen. Was hält Sie aktiv? Haben Sie neue Aufgaben in Angriff genommen? Teilen Sie ihre Tipps & Tricks mit Anderen.</p>
                </div>
            </div>
        </div>
            <a href="{{route('welcome')}}" class="absolute z-50 top-2 left-4">
                <div class="bg-white rounded-full h-8 w-8 flex items-center justify-center">
                    <svg class="h-7 w-7 -translate-x-0.5 -translate-y-0.5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path d="M73.4 297.4C60.9 309.9 60.9 330.2 73.4 342.7L233.4 502.7C245.9 515.2 266.2 515.2 278.7 502.7C291.2 490.2 291.2 469.9 278.7 457.4L173.3 352H544C561.7 352 576 337.7 576 320C576 302.3 561.7 288 544 288H173.3L278.7 182.6C291.2 170.1 291.2 149.8 278.7 137.3C266.2 124.8 245.9 124.8 233.4 137.3L73.4 297.3z"/>
                    </svg>
                </div>
            </a>
    </div>


    <div class="overlay hidden fixed inset-0 bg-black/50 z-40"></div>
    <div class=" mt-24 md:mt-0">
    </div>
    
    <script>
        const modal = document.querySelector('.modal')
        const overlay = document.querySelector('.overlay')
        const addRecipe = document.querySelector('.btn-addRecipe')
        const xModal = document.querySelector('.x-modal')
        const gemeindeInput = document.querySelector('.gemeinde-input')
        const gemeindeOutput = document.querySelector('.gemeinde-output')

        
        function openColoseModal() {
            modal.classList.toggle('hidden')
            overlay.classList.toggle('hidden')
            
            if(!modal.classList.contains('hidden')){
                document.body.style.overflow = 'hidden'
            } else {
                document.body.style.overflow = ''
            }
        }
        
        addRecipe.addEventListener('click', openColoseModal)
        xModal.addEventListener('click', openColoseModal)
        
        document.addEventListener('keydown', function(e){
            if(e.key === 'Escape' && !modal.classList.contains('hidden')){
                openColoseModal()
            }
        })



        function gemeindePreview(inputText){
            const regex = new RegExp(`^(${inputText})`, 'gi')
            const gemeindenamen = gemeinden.map(gemeinde => gemeinde.gemeinde)

            const matches = gemeindenamen.filter(gemeinde => {
                return gemeinde.match(regex)
            })


            if(!inputText){
                gemeindeOutput.innerHTML = ''
                return
            }

            const markup = matches.map(gemeinde => {
                const highlighted = gemeinde.replace(regex, '<b>$1</b>')
                return `<div class="px-2 py-1 hover:bg-gray-200 cursor-pointer rounded-l" data-id='${gemeinde}'>${highlighted}</div>`}).join('');

            gemeindeOutput.innerHTML = markup
        }

        gemeindeInput.addEventListener('input', () => gemeindePreview(gemeindeInput.value))


      

        </script>
        </body>
</x-app-layout>
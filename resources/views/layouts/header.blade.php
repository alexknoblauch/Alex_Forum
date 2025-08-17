 <header class=" w-full text-sm not-has-[nav]:hidden flex flex-cols justify-between px-4 h-[3rem]"   style="background: linear-gradient(to right, #1864ab, #339af0);">
            <div class="flex items-center justify-end p-4 lg:p-2">
                @if (Route::has('login'))
                    @auth
                    @if(request()->routeIs('welcome'))
                        <form action="{{ route('logout')}}"  method='POST'>
                        @csrf
                            <button type="submit"                     
                            class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-black border-[1.5px]  text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-full text-sm leading-normal bg-white">
                            Logout</button> 
                        </form>
                    @endif
                @endif
            </div>

            <div class="relative flex items-center justify-center gap-4 p-2">
                @if (Route::has('login'))
                    <nav class="flex items-center justify-center gap-4 p-4 lg:p-2 ">

                    @else
                    @if (Route::has('register'))
                        <a
                            href="{{ route('register') }}"
                            class="hidden lg:inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-black border-[1.5px]  border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] border-none rounded-full text-sm leading-normal bg-white hover:bg-[#e7f5ff]">
                            Register
                        </a>
                        <a
                            href="{{ route('login') }}"
                            class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-black border-[1.5px] hover:border-[#1915014a] border border-none text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-full text-sm leading-normal bg-white hover:bg-[#e7f5ff] ">
                            Login
                        </a>
                    @endif
                    @endauth
                    </nav>
                @endif
                @if(auth()->check())
                    @if(!request()->routeIs('nachrichten.index'))
                        <a href="{{route('nachrichten.index')}}" @if(auth()->check()) data-userid="{{ auth()->user()->id }}" @endif class="relative btn-message inline-block py-1.5 border border-transparent  dark:hover:border-[#3E3E3A] rounded-sm">
                            <svg fill="white"  stroke-width="30" stroke="black" class="h-8 w-8 cursor-pointer " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M64 416L64 192C64 139 107 96 160 96L480 96C533 96 576 139 576 192L576 416C576 469 533 512 480 512L360 512C354.8 512 349.8 513.7 345.6 516.8L230.4 603.2C226.2 606.3 221.2 608 216 608C202.7 608 192 597.3 192 584L192 512L160 512C107 512 64 469 64 416z"/></svg>
                            <div class=" top-[15%] left-[15%] bg-red-500 text-sm p-[0.35rem] rounded-full absolute"></div>
                        </a>
                        <a href="{{route('nachrichten.index')}}" @if(auth()->check()) data-userid="{{ auth()->user()->id }}" @endif class="relative btn-message inline-block py-1.5 border border-transparent  dark:hover:border-[#3E3E3A] rounded-sm">
                            <svg fill="white"  stroke-width="30" stroke="black" xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 cursor-pointer" viewBox="0 0 640 640"><!--!Font Awesome Free v7.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M320 312C386.3 312 440 258.3 440 192C440 125.7 386.3 72 320 72C253.7 72 200 125.7 200 192C200 258.3 253.7 312 320 312zM290.3 368C191.8 368 112 447.8 112 546.3C112 562.7 125.3 576 141.7 576L498.3 576C514.7 576 528 562.7 528 546.3C528 447.8 448.2 368 349.7 368L290.3 368z"/></svg>                        
                        </a>
                    @endif       
                        @if(!request()->routeIs('welcome'))
                            <a href="{{route('welcome')}}" class="flex items-center justify-center lg:p-2 cursor-pointer" >
                                <svg fill="white"  stroke-width="30" stroke="black" class="h-8 w-8 cursor-pointer" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M341.8 72.6C329.5 61.2 310.5 61.2 298.3 72.6L74.3 280.6C64.7 289.6 61.5 303.5 66.3 315.7C71.1 327.9 82.8 336 96 336L112 336L112 512C112 547.3 140.7 576 176 576L464 576C499.3 576 528 547.3 528 512L528 336L544 336C557.2 336 569 327.9 573.8 315.7C578.6 303.5 575.4 289.5 565.8 280.6L341.8 72.6zM304 384L336 384C362.5 384 384 405.5 384 432L384 528L256 528L256 432C256 405.5 277.5 384 304 384z"/></svg>
                            </a>
                        @endif
                    <div class=" z-50 message-box hidden h-[25rem] w-[15rem] border rounded-lg bg-gray-200 absolute top-[100%] right-[0%] md:right-[30%]"></div>
                    <div id="overlay" class="z-40 hidden fixed inset-0 bg-black bg-opacity-0 z-40"></div>
                @endif
            </div>
            
        </header>
        <div class="message-popup fiexd bottom-0 lef-0">

        </div>
<script>
        document.addEventListener('DOMContentLoaded', () => {
            const btnMessage = document.querySelector('.btn-message')
            const msgBox = document.querySelector('.message-box')
            const userId = String(btnMessage.dataset.userId).trim()
            const currentUserId = btnMessage.dataset.userId
            const overlay = document.getElementById('overlay');
            console.log(currentUserId)
    


/*
    // CLOSE MSG BOX MIT ESC
    document.addEventListener('keydown', function(e){
        
        if(e.key === 'Escape'){
            msgBox.classList.add('hidden')
            overlay.classList.add('hidden')

            btnMessage.blur()
        }
    })

    // CLOSE MSG BOX MIT klick
    document.addEventListener('click', function(e) {
        // Prüfen, ob der Klick NICHT auf msgBox oder btnMessage war
        if (!msgBox.contains(e.target) && !btnMessage.contains(e.target)) {
            msgBox.classList.add('hidden')
            overlay.classList.add('hidden')

        }
        
    });

    //FETCH DATA
    async function openCloseMsgBoxALT(e){
        const click = e.target
        if(!click) return
        msgBox.classList.toggle('hidden')
        overlay.classList.toggle('hidden')

        const res = await fetch('{{route('getChatPartner')}}')
        if(!res.ok) return 
        const data = await res.json()

        const markup = data.map(doc => {
            return `<a data-userId="" class="user-message-preview cursor-pointer hover:bg-gray-300 flex items-center grid grid-cols-[2fr_8fr] gap-1 p-2 border rounded-lg items-centers">
                        <div>
                            <img class="h-7 w-7 rounded-full border border-black" src="{{ asset('imgs/User/avatarBgremove.png') }}" alt="User Avatar">
                        </div>
                        <div>
                            <p>${doc.chatPartner}</p>
                        </div>
                    </a>`
        }).join(' ')

        msgBox.innerHTML = markup
        console.log(data)
    }
    
    btnMessage.addEventListener('click', openCloseMsgBox)

    
    */
})
</script>
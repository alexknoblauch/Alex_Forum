 <header class=" w-full text-sm not-has-[nav]:hidden flex flex-cols justify-between px-4 h-[3rem]"   style="background: linear-gradient(to right, #1864ab, #339af0);">
            <div class="flex items-center justify-center p-4 lg:p-2">
                <button class="inline-block px-5 py-1.5 border border-transparent hover:border-[#19140035] dark:hover:border-[#3E3E3A] rounded-sm">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-9">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </button>
            </div>
            <div class="flex items-center justify-center p-4 lg:p-2" >
                <p>LOGO
                </p>
            </div>
            <div class="flex items-center justify-center p-4">
                @if (Route::has('login'))
                <nav class="flex items-center justify-center gap-4 p-4 lg:p-2 ">
                    @auth
                    <a
                    href="{{ url('/dashboard') }}"
                    class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal"
                    >
                    Dashboard
                </a>
                @else
                @if (Route::has('register'))
                <a
                    href="{{ route('register') }}"
                    class="hidden lg:inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] border-none rounded-full text-sm leading-normal bg-white hover:bg-[#e7f5ff]">
                    Register
                </a>
                <a
                    href="{{ route('login') }}"
                    class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border border-none text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-full text-sm leading-normal bg-white hover:bg-[#e7f5ff] ">
                    Login
                </a>
                @endif
                @endauth
                </nav>
                @endif
            </div>
</header>
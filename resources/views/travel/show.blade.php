<x-app-layout>
  <body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] flex items-center lg:justify-center flex-col h-screen overflow-auto">

    @include('layouts.header')

    <div class="grid grid-cols-1 md:grid-cols-[3fr_7fr] w-full max-w-7xl px-4 md:overflow-y-auto overflow-y-visible">

      <!-- Main Content: FIRST on small screens -->
      <div class="order-1 md:order-2 md:col-start-2 p-4 mt-16">
        <div class="flex flex-row mb-4">
          <div class="md:flex flex-col items-start justify-start">
                <h2 class="text-3xl sm:text-4xl md:text-5xl font-serif text-gray-900 text-center relative mb-6 mt-8">
                <span class="inline-block relative">
                    <span class="absolute -bottom-1 left-1/2 -translate-x-1/2 w-11/12 h-2 bg-green-500 rounded-lg z-0"></span>
                    <span class="relative z-10">{{ $travel->title }}</span>
                </span>
                </h2>

                <div class="flex items-center gap-4 justify-center mt-8 mb-8">
                <svg class="h-8 w-8 -mr-2 -mt-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="currentColor">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M128 252.6C128 148.4 214 64 320 64C426 64 512 148.4 512 252.6C512 371.9 391.8 514.9 341.6 569.4C329.8 582.2 310.1 582.2 298.3 569.4C248.1 514.9 127.9 371.9 127.9 252.6zM320 320C355.3 320 384 291.3 384 256C384 220.7 355.3 192 320 192C284.7 192 256 220.7 256 256C256 291.3 284.7 320 320 320z"/></svg>                </svg>
                <p class="text-lg">{{$travel->gemeinde}} / {{$travel->canton}}</p>
                </div>
          </div>

          <div class="flex justify-center">
            <img class="ml-12 h-40 w-40  rounded-xl shadow" src="{{ asset('imgs/travel/img_4kq_iiefaabi.webp') }}" alt="Foto des Gerichts">
          </div>
        </div>

        <div class="mt-4 w-full max-w-4xl mx-auto text-gray-800 dark:text-gray-300">
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae fuga voluptatem a ipsum amet velit quasi harum debitis! Dolorum debitis cum tenetur dolor similique nesciunt ex vero neque facere Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos magni laudantium alias maiores officiis tempore commodi, architecto facilis rem porro mollitia quia, labore minima libero exercitationem sunt dolores. Libero, accusamus! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illum quo quidem tempora magnam. Esse voluptatem voluptate unde dolorem incidunt soluta tempora, delectus ad neque similique cumque facilis a aut provident.
          </p>
        </div>
      </div>

      <!-- Comments: SECOND on small screens -->
      <div class="max-h-[80vh] md:overflow-y-auto scroll-container p-4 order-2 md:order-1 md:col-start-1">
        <textarea class="bg-green-100 hover:bg-white mb-12 block md:hidden bottom-1 left-2 md:text-[0.8rem] w-[100%] h-[6rem] rounded-xl bg-gray-100 outline-none focus:ring-0 focus:border-black" placeholder="Dein Kommentar ..."></textarea>
        @foreach($comments as $comment)
            @if($comments->isEmpty())
                <p>noch keine Kommentare...</p>
            @endif          
            <div class="hover:bg-gray-200 p-2 rounded-[9px] bg-[#EAECEF] flex flex-col gap-2 mb-4">
            <div class="flex items-center justify-between">
                <div class="flex items-center  gap-2"> 
                    <img class="h-7 w-7 rounded-full border border-black" src="{{ asset('imgs/User/avatarBgremove.png') }}" alt="User Avatar">
                    <h3 class="text-[0.7rem] md:text-[0.9rem]">{{$comment->user->name}}</h3>
                </div>
              <p class="flex-between mr-4 text-[0.7rem] md:text-[0.9rem]">#{{ $loop->count - $loop->index}}</p>
            </div>
            <p class="text-gray-700 text-[0.7rem] md:text-[0.7rem] w-[80%]">{{$comment->comment}}</p>
          </div>
        @endforeach
            <textarea class="fixed bg-green-100 hover:bg-white hidden md:block bottom-4 left-8 md:text-[0.8rem] w-[27%] rounded-xl bg-gray-100 outline-none focus:ring-0 focus:border-black" placeholder="Dein Kommentar ..."></textarea>
      </div>

    </div>

  </body>
</x-app-layout>

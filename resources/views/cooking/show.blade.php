<x-app-layout>
  <body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] flex items-center lg:justify-center flex-col h-screen overflow-auto">

    @include('layouts.header')

    <div class="grid grid-cols-1 md:grid-cols-[3fr_7fr] w-full max-w-7xl px-4 md:overflow-y-auto overflow-y-visible">

      <!-- Main Content: FIRST on small screens -->
      <div class="order-1 md:order-2 md:col-start-2 p-4 mt-16">
        <div class="flex justify-between flex-row mb-4">
          <div class="md:flex flex-col items-start justify-start">
                <h2 class="text-3xl sm:text-4xl md:text-5xl font-serif text-gray-900 text-center relative mb-6 mt-8">
                <span class="inline-block relative">
                    <span class="absolute -bottom-1 left-1/2 -translate-x-1/2 w-11/12 h-2 bg-green-500 rounded-lg z-0"></span>
                    <span class="relative z-10">{{ $post->title }}</span>
                </span>
                </h2>

                <div class="flex items-center gap-4 justify-center mt-8 mb-8">
                <svg class="h-4 w-4 -mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="currentColor">
                    <path d="M256 0a256 256 0 1 1 0 512A256 256 0 1 1 256 0zM232 120l0 136c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2 280 120c0-13.3-10.7-24-24-24s-24 10.7-24 24z"/>
                </svg>
                <p>Dauer: 20min</p>
                </div>
          </div>

          <div class="flex justify-center">
            <img class="md:mr-12 h-40 w-40  rounded-xl shadow" src="{{ asset('imgs/cooking/photo-1507273026339-31b655f3752d.avif') }}" alt="Foto des Gerichts">
          </div>
        </div>

        <div class="mt-4 w-full max-w-4xl mx-auto text-gray-800 dark:text-gray-300">
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae fuga voluptatem a ipsum amet velit quasi harum debitis! Dolorum debitis cum tenetur dolor similique nesciunt ex vero neque facere Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos magni laudantium alias maiores officiis tempore commodi, architecto facilis rem porro mollitia quia, labore minima libero exercitationem sunt dolores. Libero, accusamus! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illum quo quidem tempora magnam. Esse voluptatem voluptate unde dolorem incidunt soluta tempora, delectus ad neque similique cumque facilis a aut provident.
          </p>
        </div>
      </div>

      <!-- Comments: SECOND on small screens -->
      <div class="max-h-[80vh] md:overflow-y-auto scroll-container p-4 order-2 md:order-1 md:col-start-1 md:border-r md:border-gray-300"> 
        <textarea class="bg-green-100 hover:bg-white mb-12 block md:hidden bottom-1 left-2 md:text-[0.8rem] w-[100%] h-[6rem] rounded-xl bg-gray-100 outline-none focus:ring-0 focus:border-black" placeholder="Dein Kommentar ..."></textarea>
        @if($comments->isEmpty())
          <p class="italic text-center text-[0.9rem] mt-4 mb-8">Noch keine Kommentare vorhanden... <br> Sei der Erste!</p>
              
        @endif

        @foreach($comments as $comment)
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

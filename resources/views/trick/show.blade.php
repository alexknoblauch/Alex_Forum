<x-app-layout>
  <body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] flex items-center lg:justify-center flex-col h-screen overflow-auto">

    @include('layouts.header')

    <div class="grid grid-cols-1 md:grid-cols-[3fr_7fr] w-full max-w-7xl px-4 md:overflow-y-auto overflow-y-visible">

      <!-- Main Content: FIRST on small screens -->
      <div class="order-1 md:order-2 md:col-start-2">
        <div class="flex flex-row items-center justify-center mb-4">
          <div class="md:flex flex-col items-center justify-start">
                <h2 class="bold text-4xl sm:text-4xl md:text-5xl font-serif text-gray-900 text-center relative mb-6 mt-8">
                <span class="inline-block relative">
                    <span class="relative z-10">{{ $trick->title }}</span>
                </span>
                </h2>

                <div class="flex items-center gap-12 justify-start mt-8 mb-8">
                  {{--LIKTE BUTTON--}}
                  <x-like-button :likeable="$trick"/>
                    <div  class="flex flex-row items-center gap-4 w-[100%]">
                        <svg class="h-5 w-5 -mr-2 " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M320 400C394.6 400 458.4 353.6 484 288L488 288C501.3 288 512 277.3 512 264L512 184C512 170.7 501.3 160 488 160L484 160C458.4 94.4 394.6 48 320 48C245.4 48 181.6 94.4 156 160L152 160C138.7 160 128 170.7 128 184L128 264C128 277.3 138.7 288 152 288L156 288C181.6 353.6 245.4 400 320 400zM304 144L336 144C389 144 432 187 432 240C432 293 389 336 336 336L304 336C251 336 208 293 208 240C208 187 251 144 304 144zM112 548.6C112 563.7 124.3 576 139.4 576L192 576L192 528C192 510.3 206.3 496 224 496L416 496C433.7 496 448 510.3 448 528L448 576L500.6 576C515.7 576 528 563.7 528 548.6C528 488.8 496.1 436.4 448.4 407.6C412 433.1 367.8 448 320 448C272.2 448 228 433.1 191.6 407.6C143.9 436.4 112 488.8 112 548.6zM279.3 205.5C278.4 202.2 275.4 200 272 200C268.6 200 265.6 202.2 264.7 205.5L258.7 226.7L237.5 232.7C234.2 233.6 232 236.6 232 240C232 243.4 234.2 246.4 237.5 247.3L258.7 253.3L264.7 274.5C265.6 277.8 268.6 280 272 280C275.4 280 278.4 277.8 279.3 274.5L285.3 253.3L306.5 247.3C309.8 246.4 312 243.4 312 240C312 236.6 309.8 233.6 306.5 232.7L285.3 226.7L279.3 205.5zM248 552L248 576L296 576L296 552C296 538.7 285.3 528 272 528C258.7 528 248 538.7 248 552zM368 528C354.7 528 344 538.7 344 552L344 576L392 576L392 552C392 538.7 381.3 528 368 528z"/></svg>                        
                        <p class="text-m">{{$trick->user->name}}</p>
                    </div>
                </div>
          </div>
        </div>

        <div class="max-w-[80%] text-start mt-4 w-full max-w-4xl mx-auto text-gray-800 dark:text-gray-300">
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae fuga voluptatem a ipsum amet velit quasi harum debitis! Dolorum debitis cum tenetur dolor similique nesciunt ex vero neque facere Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos magni laudantium alias maiores officiis tempore commodi, architecto facilis rem porro mollitia quia, labore minima libero exercitationem sunt dolores. Libero, accusamus! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illum quo quidem tempora magnam. Esse voluptatem voluptate unde dolorem incidunt soluta tempora, delectus ad neque similique cumque facilis a aut provident.
          </p>
          
            <div class="mt-4 max-h-[100vh] md:overflow-y-auto scroll-container order-2 md:order-1 md:col-start-1 ">
                <form action="javascript:void(0)" class="comment-form mt-8 relative" method="POST">
                  @csrf
                    <textarea class="textarea-input mb-12  bottom-1 left-2 md:text-[0.8rem] w-[100%] h-[6rem] rounded-xl bg-gray-100 outline-none focus:ring-0 focus:border-black" placeholder="Dein Kommentar ..." name="comment"></textarea>
                    <button class="btn-form-submit rounded-full bg-white flex items-center justify-center rounded-full " type="submit">
                        <svg class="absolute top-[43%] bg-white left-[91%] md:left-[93%] h-6 w-6 z-50" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M566.6 342.6C579.1 330.1 579.1 309.8 566.6 297.3L406.6 137.3C394.1 124.8 373.8 124.8 361.3 137.3C348.8 149.8 348.8 170.1 361.3 182.6L466.7 288L96 288C78.3 288 64 302.3 64 320C64 337.7 78.3 352 96 352L466.7 352L361.3 457.4C348.8 469.9 348.8 490.2 361.3 502.7C373.8 515.2 394.1 515.2 406.6 502.7L566.6 342.7z"/></svg>
                    </button>
                </form>
                <div class="comment-container" data-commentable-id="{{ $trick->id }}" data-commentable-type="{{ get_class($trick) }}">
                    @if($comments->isEmpty())
                            <p class="italic text-center text-[0.9rem] mt-4 mb-8">Noch keine Kommentare vorhanden... <br> Sei der Erste!</p>
                    @else
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
                    @endif
                </div>
            </div>
        </div>
      </div>

      <div class="hidden md:block max-h-[100vh] md:overflow-y-auto scroll-container order-2 md:order-1 md:col-start-1">
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
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', async function(){
        const form = document.querySelector('.comment-form')
        const commentable_id = document.querySelector('.comment-container').dataset.commentableId;
        console.log(commentable_id)
        const csrfToken = @json(csrf_token());
        const commentContainer = document.querySelector('.comment-container')
        const btnFormSubmit = document.querySelector('.btn-form-submit')

        
          btnFormSubmit.addEventListener('click', async function(e){
          e.preventDefault()
          const dataObj = {}

          const form = btnFormSubmit.closest('form')
          const textarea = form.querySelector('.textarea-input')

          if(textarea){
            const comment = textarea.value
              if(comment){
              dataObj['comment'] = comment
            }
          }

          dataObj['commentable_id'] = commentable_id
          dataObj['commentable_type'] = 'App\\Models\\Trick'
          
          const res = await fetch('{{route('comment.store')}}', {
            method: 'POST',
            body: JSON.stringify(dataObj),
            headers:{
              'Content-Type' : 'application/json',
              'Accept' : 'application/json',
              'X-CSRF-TOKEN' : csrfToken,
            }
          })
          
          if(res.ok) {
            const data = await res.json()
            console.log(data)

            const markup = data.new_comments.map((comment, i) => {
              const iteration = data.new_comments.length - i
              return `
              <div class="hover:bg-gray-200 p-2 rounded-[9px] bg-[#EAECEF] flex flex-col gap-2 mb-4">
                <div class="flex items-center justify-between">
                  <div class="flex items-center  gap-2"> 
                    <img class="h-7 w-7 rounded-full border border-black" src="{{ asset('imgs/User/avatarBgremove.png') }}" alt="User Avatar">
                    <h3 class="text-[0.7rem] md:text-[0.9rem]">${comment.user.name}</h3>
                    </div>
                    <p class="flex-between mr-4 text-[0.7rem] md:text-[0.9rem]">#${iteration}</p>
                    </div>
                    <p class="text-gray-700 text-[0.7rem] md:text-[0.7rem] w-[80%]">${comment.comment}</p>
                    </div>
                    `
                  }).join('')
                  
                  commentContainer.innerHTML = ''
                  commentContainer.innerHTML = markup
                  textarea.value = ''
                }
              })
            })
      
    </script>
  </body>
</x-app-layout>

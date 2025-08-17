@props(['likeable'])
<form class="flex gap-4" action="javascript:void(0)" method="POST">
    @csrf

    @guest          
      <svg data-id="{{$likeable->id}}" data-type="{{strtolower(class_basename($likeable->type))}}" class="h-6 w-6 -mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" fill="none" stroke="black" stroke-width="5">
          <path class='' fill="#9ca3af" stroke="#9ca3af" stroke-width="30" d="M305 151.1L320 171.8L335 151.1C360 116.5 400.2 96 442.9 96C516.4 96 576 155.6 576 229.1L576 231.7C576 343.9 436.1 474.2 363.1 529.9C350.7 539.3 335.5 544 320 544C304.5 544 289.2 539.4 276.9 529.9C203.9 474.2 64 343.9 64 231.7L64 229.1C64 155.6 123.6 96 197.1 96C239.8 96 280 116.5 305 151.1z"/>
      </svg>
      <p class="whitespace-nowrap text-gray-400">gefällt mir</p>
    @endguest

    @auth
    <div class="flex gap-4 items-center">
        <button type="submit" class="" data-id="{{$likeable->id}}" data-type="{{$likeable->type}}">
          @if($likeable->likes && $likeable->likes->contains('user_id', auth()->id()))
            <svg data-id="{{$likeable->id}}" data-type="{{strtolower(class_basename($likeable->type))}}" class="like-button cursor-pointer h-6 w-6 -mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" fill="none" stroke="black" stroke-width="5">
                <path class='like-icon' fill="red" stroke="black" stroke-width="25" d="M305 151.1L320 171.8L335 151.1C360 116.5 400.2 96 442.9 96C516.4 96 576 155.6 576 229.1L576 231.7C576 343.9 436.1 474.2 363.1 529.9C350.7 539.3 335.5 544 320 544C304.5 544 289.2 539.4 276.9 529.9C203.9 474.2 64 343.9 64 231.7L64 229.1C64 155.6 123.6 96 197.1 96C239.8 96 280 116.5 305 151.1z"/>
            </svg>
           @else 
            <svg data-id="{{$likeable->id}}" data-type="{{strtolower(class_basename($likeable->type))}}" class="like-button cursor-pointer h-6 w-6 -mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" fill="none" stroke="black" stroke-width="5">
                <path class='like-icon' fill="white" stroke="black" stroke-width="30" d="M305 151.1L320 171.8L335 151.1C360 116.5 400.2 96 442.9 96C516.4 96 576 155.6 576 229.1L576 231.7C576 343.9 436.1 474.2 363.1 529.9C350.7 539.3 335.5 544 320 544C304.5 544 289.2 539.4 276.9 529.9C203.9 474.2 64 343.9 64 231.7L64 229.1C64 155.6 123.6 96 197.1 96C239.8 96 280 116.5 305 151.1z"/>
            </svg>
          @endif
        </button>
        <p class="whitespace-nowrap">gefällt mir</p>
    </div>
    @endauth

</form>
<script>
        document.addEventListener('DOMContentLoaded', function(){

          const likeButton = document.querySelector('.like-button');
          const likeIcon = likeButton.querySelector('.like-icon');
          const csrfToken = @json(csrf_token());
          const likeable_type = likeButton.dataset.type; 
          const likeable_id = likeButton.dataset.id;
          const url = `/like/${likeable_type}/${likeable_id}`; 
          
          if (likeButton && likeIcon) {
            likeButton.addEventListener('click', async function() {
              
              if(likeIcon.getAttribute('fill') === 'white') {
                likeIcon.setAttribute('fill', 'red');
                likeIcon.setAttribute('stroke-width', '25');
                await fetch(url, {
                  method: 'POST',
                  headers: {
                    'Accept' : 'application/json',
                    'X-CSRF-TOKEN': csrfToken
                  }
                })
                
              } else {
                likeIcon.setAttribute('fill', 'white');
                likeIcon.setAttribute('stroke-width', '30');
                
              }
            });
          } 
        })
</script>
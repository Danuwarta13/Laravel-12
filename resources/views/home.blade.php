 <x-layout :title="$title">

     <h1>ini halaman {{ $title }}</h1>

     <div class="flex mt-3">
         @for ($i = 1 ; $i < 10 ; $i++) 
            @if($i % 2 === 1)
             <div class="w-8 h-8 bg-sky-400 rounded p-0 me-1 text-white text-xs grid place-items-center">{{ $i }}</div>
            @endif
        @endfor
     </div>


 </x-layout>

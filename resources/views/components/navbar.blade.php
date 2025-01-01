<div class="bg-secondBg">
  <div class="container mx-auto py-2 flex flex-row justify-between items-center">
  
    {{-- logo --}}
    <a href="{{ url('/') }}" class="flex gap-2 items-center">
      <img src="{{ asset('img/truno-app.png') }}" alt="logo-truno-app" class="h-12 w-auto">
      <div>
        <h1 class="text-white font-bold text-2xl">TRUNO</h1>
        <p class="text-white font-medium">Jurnal Recommendation</p>
      </div>
    </a>
  
    {{-- menu --}}
    <div class="flex gap-20 items-center text-basedColor font-medium">
      <a href="" >Beranda</a>
      <a href="" >Riwayat</a>
      <a href="" >Jurnal</a>
      <a href="" >Profile</a>
      
      {{-- profile --}}
      <div>
        <img src="https://avatars.githubusercontent.com/u/40992581?v=4" alt="user" class="h-10 w-10 rounded-full">
      </div>
    </div>

  </div>
</div>
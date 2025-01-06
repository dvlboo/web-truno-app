<x-layout>
  <header class="py-5 bg-primaryBg"
    style="
    background-image: url('{{ asset('img/gray-flow.png') }}'); 
    background-size: contain; 
    background-repeat: no-repeat; 
    background-position: bottom;"
  >
    <div class="container mx-auto py-10 flex">
      <div class="w-7/12 me-3">
        <h1 class="text-basedColor font-bold text-4xl">Selamat Datang di Truno</h1>
        <p class="text-basedColor font-medium text-lg my-6">Masukan abstrak anda untuk memulai pencarian jurnal secara instan.</p>
        <div class="p-2 bg-thirdBg rounded-lg border-primaryBg border-2">
          <textarea class="w-full p-4 border border-secondBg bg-secondBg text-white rounded" rows="5" placeholder="Ketik kata kunci atau abstrak anda disini dan temukan rekomendasi jurnal terbaik dari kami. Contoh : Journal of Computational and Cognitive Engineering"></textarea>
          <div class="flex justify-end">
            <button class="mt-4 bg-basedColor text-primaryBg font-bold py-2 px-4 rounded-full hover:bg-[#E7F507]">Cari Jurnal</button>
          </div>
        </div>
      </div>

      <div class="w-5/12 ms-3">
        <div class="flex gap-4 items-center">
          <img src="{{ asset('img/truno-app.png') }}" alt="logo-truno-app" class="h-24 w-auto">
          <div>
            <h1 class="text-white font-bold text-5xl mb-2">TRUNO</h1>
            <p class="text-white font-medium text-xl mt-2">Jurnal Recommendation</p>
          </div>
        </div>

        <h2 class="my-6 text-basedColor text-3xl font-semibold">Coba efisiensi baru dengan fitur pencarian instan</h2>

        <div class="flex justify-end">
          <img src="{{ asset('img/officer.png') }}" alt="officer" class="h-64 w-auto">
        </div>
      </div>
    </div>
  </header>

  <section class="py-5 bg-thirdBg">
    <div class="container mx-auto">
      <h1 class="text-3xl font-bold text-basedColor text-center">KENAPA HARUS TRUNO?</h1>

      <div
        class="p-10 flex flex-row justify-center rounded-xl mt-5 gap-10 bg-secondBg"
        style="
        background-image: url('{{ asset('img/white-flow.png') }}');
        background-size: contain;
        background-repeat: no-repeat; 
        background-position: center bottom;"
      >
        {{-- efisien --}}
        <div class="flex flex-col w-1/3">
          <h1 class="text-right text-white text-2xl font-bold mb-3">EFISIEN</h1>

          <h2 class="my-7 mx-12 text-center text-basedColor font-bold text-2xl">Temukan Jurnal Berkualitas</h2>

          <p class="text-center text-white font-semibold text-lg mb-10">Nikmati penjadwalan bebas repot dengan sistem kami yang efisien, yang menjamin janji temu Anda selalu tepat waktu.</p>

          <div class="flex flex-col items-center p-7 mt-7 mx-16 bg-primaryBg rounded-3xl">
            <img src="{{ asset('img/authors.png') }}" alt="authors" class="h-24 w-auto my-3">
            <h1 class="text-basedColor font-bold text-xl">AUTHORS</h1>
            <h3 class="text-white font-bold text-xl my-3">217.077</h3>
          </div>

        </div>

        {{-- sumber terpercaya --}}
        <div class="flex flex-col w-1/3">
          <h1 class="text-center text-white text-2xl font-bold mb-3">SUMBER TERPERCAYA</h1>

          <h2 class="my-7 mx-24 text-center text-basedColor font-bold text-2xl">Pencarian Yang Tepat</h2>

          <p class="text-center text-white font-semibold text-lg mb-10">Dapatkan jurnal yang relevan dengan mudah melalui pencarian berbasis pencocokan dengan abstrak.</p>

          <div class="flex flex-col items-center p-7 mt-7 mx-16 bg-primaryBg rounded-3xl">
            <img src="{{ asset('img/journals.png') }}" alt="journals" class="h-24 w-auto my-3">
            <h1 class="text-basedColor font-bold text-xl">JOURNALS  </h1>
            <h3 class="text-white font-bold text-xl my-3">3.647</h3>
          </div>
        </div>

        {{-- cepat --}}
        <div class="flex flex-col w-1/3">
          <h1 class="text-left text-white text-2xl font-bold mb-3">CEPAT</h1>

          <h2 class="my-7 mx-24 text-center text-basedColor font-bold text-2xl">Riwayat Terorganisir</h2>

          <p class="text-center text-white font-semibold text-lg mb-10">Dapatkan jurnal yang relevan dengan mudah melalui pencarian berbasis pencocokan dengan abstrak.</p>

          <div class="flex flex-col items-center p-7 mt-7 mx-16 bg-primaryBg rounded-3xl">
            <img src="{{ asset('img/artikel.png') }}" alt="artikel" class="h-24 w-auto my-3">
            <h1 class="text-basedColor font-bold text-xl">ARTIKEL</h1>
            <h3 class="text-white font-bold text-xl my-3">134.794</h3>
          </div>
        </div>
      </div>
    </div>
  </section>
</x-layout>
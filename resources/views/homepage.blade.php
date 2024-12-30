<x-layout>
  <div class="py-7"
    style="
    background-image: url('{{ asset('img/bg-head.png') }}'); 
    background-size: cover; 
    background-repeat: no-repeat; 
    background-position: center;"
  >
    <div class="container mx-auto py-10 flex">
      <div class="w-7/12 me-3">
        <h1 class="text-white font-bold text-4xl">Selamat Datang di Truno</h1>
        <p class="text-white font-medium text-lg my-6">Masukan abstrak anda untuk memulai pencarian jurnal secara instan.</p>
        <div class="p-4 bg-gray-500 rounded-lg">
          <textarea class="w-full p-4 border border-gray-300 rounded" rows="5" placeholder="Ketik kata kunci atau abstrak anda disini dan temukan rekomendasi jurnal terbaik dari kami. Contoh : Journal of Computational and Cognitive Engineering"></textarea>
          <div class="flex justify-end">
            <button class="mt-4 bg-blue-500 text-white font-bold py-2 px-4 rounded hover:bg-blue-700">Cari Jurnal</button>
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

        <h2 class="my-6 text-white text-2xl font-semibold">Coba efisiensi baru dengan fitur pencarian instan</h2>

        <div class="flex justify-end">
          <img src="{{ asset('img/officer.png') }}" alt="officer" class="h-64 w-auto">
        </div>
      </div>
    </div>
  </div>
</x-layout>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="app-icon.png" type="image/x-icon">

    <title>{{ config('app.name') }}</title>

    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
  </head>
  <body class="bg-secondBg text-white">
    <div class="flex min-h-screen">
      <!-- Left Section -->
      <div class="w-1/2 flex flex-col justify-between {{ $attributes->get('class') }}"
        {{ $attributes->except('class') }}
        >
        <div class="flex flex-col p-12">
          <div class="flex items-center gap-2">
            <img alt="logo-truno-app" class="h-20 w-auto" src="{{ asset('img/truno-app.png') }}" />
            <div class="h-16 w-2 bg-basedColor"></div>
            <h1 class="ml-6 text-6xl font-bold">TRUNO</h1>
          </div>

          <div>
            <p class="ms-3 text-2xl font-bold mt-2">
              Jurnal Recommendation
            </p>
          </div>
        </div>

        <h2 class="text-5xl font-bold text-basedColor ms-3 me-10 ps-12">
          Temukan Jurnal Berkualitas
        </h2>

        <div class="flex flex-col gap-3 p-5">
          <h3 class="text-basedColor text-2xl font-bold me-96">Pencarian Yang Tepat</h3>
          <p class="text-basedColor text-lg font-semibold me-80">Dapatkan jurnal yang relevan dengan mudah melalui pencarian berbasis pencocokan dengan abtrak.</p>
        </div>
      </div>


      <!-- Right Section -->
      {{ $slot }}

    </div>
  </body>
  
</html>
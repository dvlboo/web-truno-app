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
      <div class="w-1/2 p-10 flex flex-col justify-between"
      style="
        background-image: url('{{ asset('img/sammy-searching.png') }}');
        background-size: 400px;
        background-repeat: no-repeat; 
        background-position: right bottom;"
      >
        <div class="flex flex-col">
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

        <h2 class="text-7xl font-bold text-basedColor ms-3">
          Temukan Jurnal Berkualitas
        </h2>

        <div class="flex flex-col me-80 gap-3">
          <h3 class="text-basedColor text-2xl font-bold">Pencarian Yang Tepat</h3>
          <p class="text-basedColor text-lg font-semibold">Dapatkan jurnal yang relevan dengan mudah melalui pencarian berbasis pencocokan dengan abtrak.</p>
        </div>
      </div>

     <!-- Right Section -->
     <div class="lg:w-1/2 bg-primaryBg p-8 flex flex-col justify-center">
      <div class="flex justify-end mb-8">
       <button class="bg-lime-400 text-gray-900 px-4 py-2 rounded-l-full">
        Login
       </button>
       <button class="bg-gray-900 text-lime-400 px-4 py-2 rounded-r-full">
        Sign Up
       </button>
      </div>
      <div class="bg-gray-700 p-8 rounded-lg">
       <h2 class="text-3xl font-bold mb-6">
        LOGIN
       </h2>
       <div class="flex justify-between mb-4">
        <button class="bg-white text-gray-900 px-4 py-2 rounded-full flex items-center">
         <i class="fab fa-google mr-2">
         </i>
         Log in By Google
        </button>
        <button class="bg-blue-600 text-white px-4 py-2 rounded-full flex items-center">
         <i class="fab fa-facebook-f mr-2">
         </i>
         Log in By Facebook
        </button>
       </div>
       <div class="flex items-center mb-4">
        <hr class="flex-grow border-gray-600"/>
        <span class="mx-4 text-gray-400">
         Or Email
        </span>
        <hr class="flex-grow border-gray-600"/>
       </div>
       <div class="mb-4">
        <label class="block text-gray-400 mb-2" for="email">
         <i class="fas fa-envelope mr-2">
         </i>
         Email
        </label>
        <input class="w-full p-2 rounded-full bg-gray-800 border border-lime-400 text-white" id="email" type="email"/>
       </div>
       <div class="mb-4">
        <label class="block text-gray-400 mb-2" for="password">
         <i class="fas fa-lock mr-2">
         </i>
         Password
        </label>
        <input class="w-full p-2 rounded-full bg-gray-800 border border-lime-400 text-white" id="password" type="password"/>
       </div>
       <div class="flex justify-between items-center mb-6">
        <label class="flex items-center text-gray-400">
         <input class="mr-2" type="checkbox"/>
         Remember Me ?
        </label>
        <a class="text-lime-400" href="#">
         Forgot Password?
        </a>
       </div>
       <button class="w-full bg-lime-400 text-gray-900 py-2 rounded-full">
        Login
       </button>
      </div>
      <div class="text-center mt-8 text-gray-400">
       Web Version By Aldi 5.1
      </div>
     </div>
    </div>
  </body>
  
</html>
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
      <div class="w-1/2 flex flex-col justify-between"
      style="
        background-image: url('{{ asset('img/sammy-searching.png') }}');
        background-size: 300px;
        background-repeat: no-repeat; 
        background-position: right bottom;"
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
      <div class="w-1/2 bg-primaryBg flex flex-col justify-between">

        <div class="flex items-center justify-center mt-9">
          <div class="flex items-center rounded-full bg-[#111111] font-bold">
            <!-- Login Button -->
            <button class="bg-basedColor text-primaryBg py-2 px-8 rounded-full focus:outline-none">Login</button>
        
            <!-- Sign Up Button -->
            <a href="/register"><button class="text-white py-2 px-8 rounded-full focus:outline-none">Sign Up</button></a>
          </div>
        </div>

        <div class="bg-secondBg py-7 px-14 rounded-3xl mx-8">
          <h2 class="text-4xl text-center font-bold">LOGIN</h2>

          <div class="flex justify-between mt-10 mb-6">
            <button class="bg-white text-secondBg font-medium px-6 py-2 rounded-full flex items-center gap-2">
              <img width="24" height="24" src="https://img.icons8.com/color/24/google-logo.png" alt="google-logo"/>
              Log in By Google
            </button>
            <button class="bg-[#1877F2] text-white font-medium px-6 py-2 rounded-full flex items-center gap-2">
              <img width="24" height="24" src="https://img.icons8.com/color/24/facebook-new.png" alt="facebook-new"/>
              Log in By Facebook
            </button>
          </div>
          <div class="flex items-center mb-4">
            <hr class="flex-grow border-white"/>
            <span class="mx-4 text-white">Or Email</span>
            <hr class="flex-grow border-white"/>
          </div>

          <div class="flex items-center w-full border-2 border-basedColor rounded-full px-5 py-3 mb-8">
            <span class="text-yellow-400 mr-3 ml-4">
              <!-- Email Icon -->
              <img src="{{ asset('img/mail-icon.png') }}" alt="email-icons">
            </span>
            <input
              type="text"
              placeholder="Email"
              class="bg-transparent focus:outline-none text-white placeholder-white w-full"
            />
          </div>

          <div class="flex items-center w-full border-2 border-basedColor rounded-full px-5 py-3 my-8">
            <span class="text-yellow-400 mr-3 ml-4">
              <!-- Pass Icon -->
              <img src="{{ asset('img/pass-icon.png') }}" alt="pass-icons">
            </span>
            <input
              type="password"
              placeholder="Password"
              class="bg-transparent focus:outline-none text-white placeholder-white w-full"
            />
          </div>

          <div class="flex justify-between items-center mb-6">
            <label class="flex items-center text-basedColor">
              <input class="mr-2 border-basedColor " type="checkbox"/>
              Remember Me ?
            </label>
            <a class="text-based text-basedColor" href="#">Forgot Password?</a>
          </div>
          
          <div class="flex justify-center">
            <button class="px-10 py-2 font-bold bg-basedColor text-secondBg rounded-full">
              Login
            </button>
          </div>
        </div>

        <div class="text-center text-basedColor font-semibold mb-2">Web Version By Aldi 5.1</div>
      </div>
    </div>
  </body>
  
</html>
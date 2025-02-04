<x-auth-layout
  style="
    background-image: url('{{ asset('img/sammy-finance.png') }}');
    background-size: 300px;
    background-repeat: no-repeat;
    background-position: right bottom;"
>
  <div class="w-1/2 bg-primaryBg flex flex-col justify-between">

    <div class="flex items-center justify-center mt-4">
      <div class="flex items-center rounded-full bg-[#111111] font-bold">
        <!-- Sign Up Button -->
        <a href="/login"><button class="text-white py-2 px-8 rounded-full focus:outline-none">Login</button></a>
    
        <!-- Sign Up Button -->
        <button class="bg-basedColor text-primaryBg py-2 px-8 rounded-full focus:outline-none">Sign Up</button>
      </div>
    </div>

    <div class="bg-secondBg py-7 px-14 rounded-3xl mx-8">
      <h2 class="text-4xl text-center font-bold">Sign Up</h2>

      <div class="flex justify-between mt-6 mb-6">
        <button class="bg-white text-secondBg font-medium px-6 py-2 rounded-full flex items-center gap-2">
          <img width="24" height="24" src="https://img.icons8.com/color/24/google-logo.png" alt="google-logo"/>
          Sign Up By Google
        </button>
        <button class="bg-[#1877F2] text-white font-medium px-6 py-2 rounded-full flex items-center gap-2">
          <img width="24" height="24" src="https://img.icons8.com/color/24/facebook-new.png" alt="facebook-new"/>
          Sign Up By Facebook
        </button>
      </div>

      <div class="flex items-center mb-4">
        <hr class="flex-grow border-white"/>
        <span class="mx-4 text-white">Or Email</span>
        <hr class="flex-grow border-white"/>
      </div>

      <div class="flex flex-row justify-between gap-4">
        <div class="border-2 border-basedColor rounded-full px-5 py-3 mb-8">
          <input
            type="text"
            placeholder="First Name"
            class="bg-transparent focus:outline-none text-white placeholder-white w-full"
          />
        </div>
        <div class="border-2 border-basedColor rounded-full px-5 py-3 mb-8">
          <input
            type="text"
            placeholder="Last Name"
            class="bg-transparent focus:outline-none text-white placeholder-white w-full"
          />
        </div>
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

      <label class="flex items-center text-basedColor">
        <input class="mr-2 border-basedColor " type="checkbox"/>
        Remember Me ?
      </label>
      
      <div class="flex justify-center">
        <button class="px-10 py-2 font-bold bg-basedColor text-secondBg rounded-full">
          Sign Up
        </button>
      </div>
    </div>

    <div class="text-center text-basedColor font-semibold mb-2">Web Version By Aldi 5.1</div>
  </div>
</x-auth-layout>
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
  <body>
    <div class="mx-auto">
      <x-navbar></x-navbar>

      {{ $slot }}

      <x-footer></x-footer>
    </div>
  </body>
</html>
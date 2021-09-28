<html>
    <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
      <title>Laravel Livewire：不用 Vue 跟 jQuery 居然也能讓 Laravel 的畫面動起來 ？！</title>
      <!-- CSS & Script -->
      <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
      @livewireStyles
    </head>
    <body>
        <div>
            {{ $slot }}
        </div>
        @livewireScripts
        
        @yield('scripts')
        </body>
</html>
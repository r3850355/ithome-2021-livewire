<html>
    <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
      <title>Laravel Livewire：不用 Vue 跟 jQuery 居然也能讓 Laravel 的畫面動起來 ？！</title>
      <!-- CSS & Script -->
      <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>
      <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
      <link rel="stylesheet" href="../css/semantic.min.css" type="text/css">
      <script src="../js/jquery.min.js"></script>
      <script src="../js/semantic.min.js"></script>
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
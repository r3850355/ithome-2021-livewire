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
            <div class="h-12 bg-blue-600 p-2 mb-10 flex justify-between">
                <div class="text-white text-2xl font-black">iThome <span class="text-lg">鐵人賽2021 - Livewire DEMO</span></div>
                <div class="flex gap-3">
                    <a href="https://github.com/r3850355/ithome-2021-livewire"><button class="text-white bg-black h-8 rounded px-5 py-1">GitHub</button></a>
                    <a href="https://ithelp.ithome.com.tw/articles/10259642"><button class="text-white bg-black h-8 rounded px-5 py-1">文章列表</button></a>
                </div>
            </div>
            {{ $slot }}
        </div>
        @livewireScripts
        
        @yield('scripts')
        </body>
</html>
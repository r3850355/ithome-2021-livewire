<div class="text-center p-5">
    <h2>Day14: 離線</h2>
    <!-- 1 -->
    <h1 class="mt-5 text-green-500" wire:offline.class="hidden">
        Online
    </h1>
    <h1 class="mt-5 text-red-500" wire:offline>
        Offline
    </h1>

    <!-- 2 -->
    <p wire:offline.class="text-gray-400">如果要模擬離線，可以在 Chrome 中按下 F12 開啟開發者工具，並在上方找到 Network。其中有個項目顯示 No throttling 按下即可選擇 Offline</p>
   
    <!-- 3 -->
    <div class="mt-5">
        <button class="ui button" wire:offline.attr="disabled">沒功能的送出按鈕</button>
    </div>
</div>
<div class="text-center">
    <h2>{{ $count }}</h2>
    <button class="ui button" wire:click="addCount">+</button>
    <!-- 傳遞參數 -->
    <button class="ui button" wire:click="setCount(100)">設為100</button>
    
    <!-- 魔術方法 -->
    <button class="ui button" wire:click="$set('count', 999)">設為999</button>
    <!-- <button class="ui button" wire:click="showEvent($event)">ShowEvent</button> -->

    <!-- 練習：完成減1 以及 將值重置 -->
    <div class="mt-10">
      <button class="ui button">-</button>
      <button class="ui button">重置</button>
    </div>

    <!-- 進階練習: 搭配 Input 讓值再加上 Input 的值吧 -->
    <div class="mt-10">
      <div class="ui input">
        <input type="text">
      </div>
      <button class="ui button">加上</button>
    </div>
</div>

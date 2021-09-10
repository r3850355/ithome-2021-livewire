<div class="text-center">
    <h2>Day10: 嵌套元件</h2>
    <div class="mb-5">
        <button class="ui button" wire:click="$set('menu_type', '茶')">茶</button>
        <button class="ui button" wire:click="$set('menu_type', '果汁')">果汁</button>
        <button class="ui button" wire:click="$set('menu_type', '咖啡')">咖啡</button>
    </div>
    <h5>目前選的是 {{ $menu_type }}</h5>
    @if($menu_type)
        @livewire('example.day10-card', ['menu' => $menu_type])
    @endif
</div>

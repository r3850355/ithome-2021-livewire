<div class="mx-2 mt-2">
    <div class="h-15 bg-gray-300 p-2 -mx-2 -mt-2 mb-10 flex justify-between">
        <div>
            @if($selectedItem)
                <button class="bg-gray-600 text-white px-5 py-2 h-10 rounded" wire:click="cleanItem">返回列表</button>
            @endif
        </div>
        
        <button class="bg-gray-600 text-white px-5 py-2 h-10 rounded">
            <span>購物車</span>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart inline" viewBox="0 0 16 16">
                <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
            </svg>
            @if($cart)
                <div class="bg-red-500 text-white font-extrabold rounded-lg inline px-1">{{ $cart }}</div>
            @endif
        </button>
    </div>
    @if($selectedItem)
        <livewire:shopping.item-detail :wire:key="'detail' . $selectedItem->id" :item="$selectedItem"/>
    @else
        <div class="grid lg:grid-cols-6 sm:grid-cols-4 gap-3"">
            @foreach($list as $item)
                <livewire:shopping.list-item :wire:key="'list-itme' . $item->id" :item="$item"/>
            @endforeach
        </div>
    @endif
</div>
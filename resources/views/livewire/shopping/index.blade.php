<div class="mx-2 mt-2">
    <div class="h-10 bg-gray-300 p-2 -mx-2 -mt-2 mb-10">
        @if($selectedItem)
            <button class="text-black font-extrabold" wire:click="cleanItem">返回列表</button>
        @endif
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
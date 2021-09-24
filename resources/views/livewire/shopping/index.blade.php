<div class="mx-2 mt-2 grid lg:grid-cols-6 sm:grid-cols-4 gap-3">
    @foreach($list as $item)
        <livewire:shopping.list-item :wire:key="'list-itme' . $item->id" :item="$item"/>
    @endforeach
</div>
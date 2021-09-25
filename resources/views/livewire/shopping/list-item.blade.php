<div class="border-2 border-gray-100 rounded-lg shadow-lg px-5 pt-5 pb-2" wire:click="$emit('selectItem', {{ $item->id }})">
    <img class="object-cover w-full" src="{{ $item->image_url ?? asset('/images/mbd.jpeg') }}"/>
    <p class="text-sm font-bold mt-2">{{ $item->name }}</p>
    <p class="text-center">
        <span class="text-xs font-extrabold text-pink-500">{{ $item->slogan }}</span>
    </p>
    <p class="text-center">
        <span class="text-xs">網路價</span>
        <span class="text-red-600 text-xl font-extrabold">${{ $item->price }}</span>
    </p>
</div>

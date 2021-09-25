<div class="flex justify-center">
    <div class="grid md:grid-cols-3 sm:grid-cols-1 gap-6">
        <div class="row-span-3 w-64">
            <img src="{{ $item->image_url }}" alt="">
        </div>
        <div class="col-span-2">
            <p class="text-xl font-bold">{{ $item->name }}</p>
            <p class="text-red-500 font-bold mt-3">{{ $item->slogan }}</p>
            <p class="text-gray-600 mt-10 w-2/3">
                {!! nl2br($item->specs) !!}
            </p>
            <p class="mt-10 mb-5">
                <span class="text-sm text-gray-600">網路價</span>
                <span class="text-2xl text-red-600 font-bold">${{ $item->price }}</span>
            </p>
            <button class="bg-red-600 text-gray-50 p-2 w-36 rounded-md">加入購物車</button>
            <p class="text-gray-400 mt-5">＊內容之圖片、品名及價格皆取自網路，此為學習範例網站並無販售/代理該產品</p>
        </div>
        <div class="col-span-3 border-t mx-5"></div>
        <div class="col-span-3 mx-5 text-sm text-gray-600">{!! $item->content !!}</div>
    </div>
</div>
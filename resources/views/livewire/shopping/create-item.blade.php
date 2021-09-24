<div class="mx-2 mt-2 flex justify-center">
    <div class="ui form my-5 w-96 shadow-xl p-5">
        <h4 class="ui dividing header mb-2">建立商品</h4>
        <div class="field">
            <label>商品名稱</label>
            <input type="text" wire:model.defer="name">
            @error('name')<span class="text-red-500">{{ $message }}</span>@enderror
        </div>
        <div class="field">
            <label>價格</label>
            <input type="text" wire:model.defer="price">
            @error('price')<span class="text-red-500">{{ $message }}</span>@enderror
        </div>
        <div class="field">
            <label>廣告標語</label>
            <input type="text" wire:model.defer="slogan">
        </div>
        <div class="field">
            <label>規格</label>
            <textarea rows="4" wire:model.defer="specs"></textarea>
        </div>
        <div class="field">
            <label>內容</label>
            <textarea rows="4" wire:model.defer="content"></textarea>
        </div>
        <div class="field">
            <label>圖片網址</label>
            <input type="text" wire:model.defer="image_url">
        </div>
        <div class="text-center">
            <button class="ui button" wire:click="createItem">新增商品</button>
        </div>
    </div>
</div>

<!-- 接收來自後端的 $emit('created') -->
@section('scripts')
<script>
    Livewire.on('created', () => {
        alert('商品建立完成！')
    })
</script>
@endsection
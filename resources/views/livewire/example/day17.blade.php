<div class="text-center p-5">
    <h2 class="mb-10">Day17 常用範例：前後端共用的表單輸入驗證</h2>

    <div class="flex justify-center mt-5">
        <div class="rounded shadow-md bg-grey-50 border-2 w-96 p-4 px-8 text-left">
            <div class="ui form my-5">
                <h4 class="ui dividing header mb-2">請輸入用戶資料</h4>
                <div class="field {{ $errors->has('name') ? 'error' : '' }}">
                    <label>姓名</label>
                    <input type="text" wire:model.defer="name">
                    @error('name')<span class="text-red-500">＊最少3個字</span>@enderror
                </div>
                <div class="field {{ $errors->has('phone') ? 'error' : '' }}">
                    <label>手機號碼</label>
                    <input type="text" wire:model.defer="phone">
                    @error('phone')<span class="text-red-500">＊需為數字10碼</span>@enderror
                </div>
                <div class="field {{ $errors->has('email') ? 'error' : '' }}">
                    <label>Email</label>
                    <input type="text" wire:model.defer="email">
                    @error('email')<span class="text-red-500">＊email格式不符合</span>@enderror
                </div>
            </div>
            <div class="text-center">
                <button class="ui button" wire:click="save">下一步</button>
            </div>
        </div>
    </div>

</div>
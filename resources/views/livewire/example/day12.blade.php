<div class="text-center p-5">
    <h2>Day12: 讀取觸發</h2>

    <div class="flex justify-center mt-5">
        <div class="rounded shadow-md bg-grey-50 border-2 w-96 p-4 pl-8 text-left">
            <h5>基本應用 - wire:loading</h5>
            <button class="ui button" wire:click="postSomething">發送</button>
            <br>
            <h5 class="text-red-500" wire:loading>
                讀取...
            </h5>
        </div>
    </div>

    <div class="flex justify-center mt-5">
        <div class="rounded shadow-md bg-grey-50 border-2 w-96 p-4 pl-8 text-left">
            <h5>讀取時隱藏 - wire:loading.remove</h5>
            <button class="ui button" wire:click="postSomething">發送</button>
            <h5 class="text-red-500" wire:loading.remove>
                讀取時這行會看不見
            </h5>
        </div>
    </div>

    <div class="flex justify-center mt-5">
        <div class="rounded shadow-md bg-grey-50 border-2 w-96 p-4 pl-8 text-left">
            <h5>針對某些目標 - wire:loading wire:target</h5>
            <button class="ui button" wire:click="postSomething">發送</button>
            <button class="ui button" wire:click="cancel">取消</button>
            <br>
            <h5 class="text-red-500" wire:loading wire:target="cancel">
                取消中...
            </h5>
        </div>
    </div>

    <div class="flex justify-center mt-5">
        <div class="rounded shadow-md bg-grey-50 border-2 w-96 p-4 pl-8 text-left">
            <h5 wire:loading.class="text-red-500">讀取時更改 class - wire:loading.class</h5>
            <button class="ui button" wire:click="postSomething">發送</button>
        </div>
    </div>

    <div class="flex justify-center mt-5">
        <div class="rounded shadow-md bg-grey-50 border-2 w-96 p-4 pl-8 text-left">
            <h5>讀取時更改屬性 - wire:loading.attr</h5>
            <button class="ui button" wire:click="postSomething" wire:loading.attr="disabled">發送</button>
            <br>
        </div>
    </div>


</div>

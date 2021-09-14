<div class="text-center p-5">
    <h2>Day13: 定時更新</h2>
    <h5 wire:poll>
        每兩秒更新一次 Current time: {{ now() }}
    </h5>
    <h5 wire:poll.4000ms="addCount">
        每四秒更新一次 Count => {{ $count }}
    </h5>

    <button class="ui button" wire:click="$toggle('showCount2')">顯示／隱藏 Count 2</button>

    @if($showCount2)
    <p class="mt-5 text-gray-500">更新時會使畫面重新渲染，因此像是 `now()` 這種及時取值 function 就會被比較快的定時更新掉。</p>
    <h5 wire:poll.500ms.keep-alive="addCount2">
        每 500ms 更新一次 ＆ 背景執行 => {{ $count2 }}
    </h5>
    @endif
</div>
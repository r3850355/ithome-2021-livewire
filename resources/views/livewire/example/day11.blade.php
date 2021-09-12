<div class="text-center p-5">
    <h2>Day11: 嵌套元件（二）</h2>

    @foreach($articles as $article)
        @livewire('example.day11-card', ['article' => $article], key('article-2021-' . $article['id']))
    @endforeach

    <div class="my-5">
        <button class="ui button" wire:click="clearArticle(1)" >刪除 Day2</button>
    </div>
</div>

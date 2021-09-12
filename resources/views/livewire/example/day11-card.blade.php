<div class="flex justify-center mt-5">
    <div class="rounded shadow-md bg-grey-50 border-2 w-3/6 p-4 pl-8 text-left">
        <h3>
            <a class="text-black" href="{{ $article['url'] }}" target="_blank">
                {{ $article['title'] }}
            </a>
        </h3>
        <div class="text-gray-500">
        {{ $article['content'] }}
        </div>
    </div>
</div>
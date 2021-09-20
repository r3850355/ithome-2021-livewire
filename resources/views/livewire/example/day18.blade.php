<div class="text-center p-5">
    <h2 class="mb-10">Day18 常用範例：分頁 Pagination</h2>
    <div class="w-1/3" style="margin: auto">
        <table class="ui celled table">
            <thead>
                <tr>
                    <th>Num.</th>
                    <th>Author</th>
                    <th>Title</th>
                </tr>
            </thead>
            <tbody>
                @foreach($posts as $post)
                <tr>
                    <td data-label="Num.">{{ $post->id }}</td>
                    <td data-label="Author">{{ $post->author }}</td>
                    <td data-label="Title">{{ $post->title }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <br>
        <div>
            {{ $posts->links() }}
        </div>
    </div>
</div>
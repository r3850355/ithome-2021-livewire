<div class="text-center p-5">
    <h2 class="mb-10">Day16: Prefetching</h2>
    <!-- prefetch -->
    <button class="ui button" wire:click.prefetch="addCount">Add</button>

    <h5>Count: {{ $count }}</h5>

</div>
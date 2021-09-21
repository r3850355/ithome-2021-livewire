<div class="flex justify-center">
  <div class="rounded shadow-md bg-grey-50 border-2 w-96 p-4">
    <!-- Title -->
    <div class="text-2xl font-extralight">待辦清單</div>
    <!-- Input -->
    <div class="ui action fluid input my-2">
      <input type="text" placeholder="把今天要做的寫在這裡..." wire:model.defer="title">
      <button class="ui icon button" wire:click="addTodo">
        <i class="send icon"></i>
      </button>
    </div>
    @if($errors->has('title'))
    <span class="text-sm text-red-500">＊待辦事項欄位必填</span>
    @endif
    <!-- Listing -->
    @foreach ($this->todo as $item)
    <div class="grid grid-cols-6 mt-3">
      <div class="col-span-5">
        @if($item->done)
        <label class="text-gray-400"><s>{{ $item->title }}</s></label>
        @else
        <label wire:click="checkTodo({{ $item->id }})">{{ $item->title }}</label>
        @endif
      </div>
      <div class="text-right">
        <i class="trash icon text-gray-300" wire:click="deleteTodo({{ $item->id }})"></i>
      </div>
    </div>
    @endforeach
  </div>
</div>

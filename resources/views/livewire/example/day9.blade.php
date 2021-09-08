<div class="text-center">
    <h2>Day9: Lifecycle Hooks</h2>
    <h3>{{ $title }}</h3>
    <h5>hydrate counter: {{ $counter_hydrate }}</h5>
    <h5>dehydrate counter: {{ $counter_dehydrate }}</h5>
    <h5>updated counter: {{ $counter_updated }}</h5>

    <button class="ui button" wire:click="updateTitle('嗨嗨')">UpdateTitle</button>
    
    <br>

    <div class="ui input mt-5">
      <input type="text" wire:model="title">
    </div>

</div>

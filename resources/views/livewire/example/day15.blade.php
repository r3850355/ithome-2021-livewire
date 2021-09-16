<div class="text-center p-5">
    <h2 class="mb-10">Day15: Dirty</h2>

    <div class="ui form w-96" style="margin: auto">
        <h4 class="ui dividing header">User Profile</h4>
        <div class="field" wire:dirty.class="error" wire:target="name">
            <label>Full Name</label>
            <input type="text" wire:model.defer="name">
        </div>
        <div class="field" wire:dirty.class="error" wire:target="age">
            <label>Age</label>
            <input type="text" wire:model.defer="age">
        </div>
        <div class="mt-5 hidden" wire:dirty.class.remove="hidden" wire:target="name, age">
            <button class="ui button">儲存修改</button>
        </div>
    </div>
</div>
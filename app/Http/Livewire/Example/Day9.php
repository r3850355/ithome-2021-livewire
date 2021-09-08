<?php

namespace App\Http\Livewire\Example;

use Livewire\Component;
use App\Models\Todo;

class Day9 extends Component
{
    public $counter_hydrate = 0;
    public $counter_dehydrate = 0;
    public $counter_updated = 0;
    public $title = 'init';

    public function mount()
    {
        $this->title = 'Hello World';
    }

    public function render()
    {
        return view('livewire.example.day9');
    }

    public function hydrate()
    {
        $this->counter_hydrate++;
    }

    public function dehydrate()
    {
        $this->counter_dehydrate++;
    }

    public function updated()
    {
        $this->counter_updated++;
    }

    // 以下為自訂函式

    public function updateTitle($newText)
    {
        // 透過按鈕觸發，因為不是透過 wire:model 去修改，所以不會觸發 updated
        $this->title = $newText;
    }

}

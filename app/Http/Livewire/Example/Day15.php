<?php

namespace App\Http\Livewire\Example;

use Livewire\Component;

class Day15 extends Component
{
    public $name = '王小明';
    public $age = 18;

    public function render()
    {
        return view('livewire.example.day15');
    }
}

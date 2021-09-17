<?php

namespace App\Http\Livewire\Example;

use Livewire\Component;

class Day16 extends Component
{
    public $count = 0;

    public function render()
    {
        return view('livewire.example.day16');
    }

    public function addCount()
    {
        $this->count++;
    }
}

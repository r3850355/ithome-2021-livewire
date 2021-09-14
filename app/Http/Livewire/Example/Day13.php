<?php

namespace App\Http\Livewire\Example;

use Livewire\Component;

class Day13 extends Component
{
    public $count = 0;
    public $count2 = 0;
    public $showCount2 = false;

    public function render()
    {
        return view('livewire.example.day13');
    }

    public function addCount()
    {
        $this->count++;
    }

    public function addCount2()
    {
        $this->count2++;
    }

}

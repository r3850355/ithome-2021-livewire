<?php

namespace App\Http\Livewire\Example;

use Livewire\Component;

class Day7 extends Component
{
    public $count = 0;

    public function addCount()
    {
        $this->count++;
    }

    public function setCount($value)
    {
        $this->count = $value;
    }

    public function showEvent($event)
    {
      dd($event);
    }

    public function render()
    {
        return view('livewire.example.day7');
    }
}

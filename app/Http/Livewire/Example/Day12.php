<?php

namespace App\Http\Livewire\Example;

use Livewire\Component;

class Day12 extends Component
{
    public $title;
    
    public function render()
    {
        return view('livewire.example.day12');
    }

    public function postSomething()
    {
        sleep(2);
        return 'ok';
    }

    public function cancel()
    {
        sleep(2);
        return 'ok';
    }
}

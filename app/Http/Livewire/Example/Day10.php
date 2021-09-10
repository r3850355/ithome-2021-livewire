<?php

namespace App\Http\Livewire\Example;

use Livewire\Component;

class Day10 extends Component
{
    public $menu_type;

    public function render()
    {
        return view('livewire.example.day10');
    }

    /*
        加上 Lifecycle Hooks 的 updated
    */
    // public function updatedMenuType($value)
    // {
    //     $this->emitTo('example.day10-card', 'updateMenu', $value);
    // }
        
}

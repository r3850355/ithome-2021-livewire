<?php

namespace App\Http\Livewire\Example;

use Livewire\Component;

class Day10Card extends Component
{
    public $menu;

    public function render()
    {
        return view('livewire.example.day10-card');
    }

    /*
        加上 updateMenu 事件的監聽，與對應的更新函式
    */

    // protected $listeners = ['updateMenu' => 'setMenu'];
    
    // public function setMenu($value)
    // {
    //     $this->menu = $value;
    // }
}

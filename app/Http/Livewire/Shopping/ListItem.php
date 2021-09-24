<?php

namespace App\Http\Livewire\Shopping;

use Livewire\Component;

class ListItem extends Component
{
    public $item;
    
    public function render()
    {
        return view('livewire.shopping.list-item');
    }
}

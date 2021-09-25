<?php

namespace App\Http\Livewire\Shopping;

use Livewire\Component;

class ItemDetail extends Component
{
    public $item;
    
    public function render()
    {
        return view('livewire.shopping.item-detail');
    }
}

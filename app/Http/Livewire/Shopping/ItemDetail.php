<?php

namespace App\Http\Livewire\Shopping;

use Livewire\Component;
use Illuminate\Http\Request;

class ItemDetail extends Component
{
    public $item;
    
    public function render()
    {
        return view('livewire.shopping.item-detail');
    }

    public function addToCart()
    {
        $item = array(
            'id' => $this->item->id,
            'name' => $this->item->name,
            'image_url' => $this->item->image_url,
            'price' => $this->item->price,
        );

        session()->push('cart', $item);
        
        // 推送事件，讓主畫面能更新 Session
        $this->emit('addToCart');
    }
}

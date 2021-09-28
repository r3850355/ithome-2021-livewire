<?php

namespace App\Http\Livewire\Shopping;

use Livewire\Component;
use App\Models\Good;
use Faker\Provider\nl_NL\Color;

class Index extends Component
{
    protected $listeners = [
        'selectItem',
        'addToCart' => 'getCart',
    ];
    
    public $selectedItem;
    public $cart;

    public function render()
    {
        
        $this->getCart();

        return view('livewire.shopping.index', [
            'list' => Good::all(),
        ])->layout('layouts.shopping');
    }

    public function selectItem($itemId)
    {
        if (!$itemId) return false;
        $this->selectedItem = Good::find($itemId);
    }

    public function cleanItem()
    {
        $this->selectedItem = null;
    }

    public function getCart()
    {
        $cart = session()->get('cart');
        if ($cart) {
            $this->cart = count($cart);
        }
    }

    public function gotoCart()
    {
        return redirect()->route('shopping-payment');
    }

}

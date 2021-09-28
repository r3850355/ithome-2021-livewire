<?php

namespace App\Http\Livewire\Shopping;

use Livewire\Component;

class Payment extends Component
{

    public $cart;
    public $cart_sum;

    public function mount()
    {
        $this->cart = session()->get('cart') ?? [];
        $this->getCartSum();
    }

    public function render()
    {
        return view('livewire.shopping.payment')->layout('layouts.shopping');
    }

    public function deleteItem($key)
    {
        // 刪除不要的那筆
        unset($this->cart[$key]);

        // 重新排列 Array 的 key
        $this->cart = array_values($this->cart);

        // 把整理好的塞回 session 中
        session()->put('cart', $this->cart);

        // 再呼叫一次計算總金額
        $this->getCartSum();
    }

    public function getCartSum()
    {
        $sum = 0;
        foreach ($this->cart as $item) {
            $sum += $item['price'];
        }
        $this->cart_sum = $sum;
    }
}

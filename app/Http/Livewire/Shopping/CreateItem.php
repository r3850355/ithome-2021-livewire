<?php

namespace App\Http\Livewire\Shopping;

use Livewire\Component;
use App\Models\Good;

class CreateItem extends Component
{
    // 宣告到時候 Input 會用到的欄位
    public $name;
    public $price;
    public $slogan;
    public $specs;
    public $content;
    public $image_url;

    // 驗證必填欄位
    protected $rules = [
        'name' => 'required|min:3',
        'price' => 'required|integer',
        'image_url' => 'nullable|url'
    ];

    public function render()
    {
        return view('livewire.shopping.create-item')->layout('layouts.shopping');
    }

    //
    // 建立商品
    public function createItem()
    {
        $this->validate();

        Good::create([
            'name' => $this->name,
            'price' => $this->price,
            'slogan' => $this->slogan,
            'specs' => $this->specs,
            'content' => $this->content,
            'image_url' => $this->image_url,
        ]);

        // 完成後清除
        $this->name = '';
        $this->price = '';
        $this->slogan = '';
        $this->specs = '';
        $this->content = '';
        $this->image_url = '';

        // 通知頁面已新增
        $this->emit('created');
    }
}

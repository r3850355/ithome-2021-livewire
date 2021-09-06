<?php

namespace App\Http\Livewire\Example;

use Livewire\Component;

class Day8 extends Component
{

    public $title = '這是 Day8 的 title';
    public $toggle = true;

    protected $listeners = ['toggleTitle' => 'toggleTitle'];

    public function render()
    {
        return view('livewire.example.day8');
    }

    public function toggleTitle()
    {
        $this->toggle = !$this->toggle;    
    }

    //
    // 觸發瀏覽器的監聽事件
    // 
    public function postAdd()
    {
        $this->dispatchBrowserEvent('postAdded');
    }
}

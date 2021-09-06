<?php

namespace App\Http\Livewire\Example;

use Livewire\Component;

class Day8Child extends Component
{
    public $title = '這是 Day8 Child 的 title';
    public $title_visible = true;

    protected $listeners = ['toggleTitle' => 'setTitleVisible'];

    public function render()
    {
        return view('livewire.example.day8-child');
    }

    public function setTitleVisible()
    {
        $this->title_visible = !$this->title_visible;
    }
}

<?php

namespace App\Http\Livewire\Example;

use Livewire\Component;

class Day11Card extends Component
{
    public $article_json;
    public $article;

    public function mount()
    {
        $this->article = json_decode($this->article_json, true);
    }
    
    public function render()
    {
        return view('livewire.example.day11-card');
    }
}

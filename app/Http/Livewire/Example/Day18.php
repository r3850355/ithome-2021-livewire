<?php

namespace App\Http\Livewire\Example;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Post;

class Day18 extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.example.day18', [
            'posts' => Post::paginate(10),
        ]);
    }
}

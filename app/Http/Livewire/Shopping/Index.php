<?php

namespace App\Http\Livewire\Shopping;

use Livewire\Component;
use App\Models\Good;

class Index extends Component
{
    public function render()
    {
        return view('livewire.shopping.index', [
            'list' => Good::all(),
        ]);
    }
}

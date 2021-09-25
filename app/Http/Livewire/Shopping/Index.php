<?php

namespace App\Http\Livewire\Shopping;

use Livewire\Component;
use App\Models\Good;

class Index extends Component
{
    protected $listeners = ['selectItem'];
    public $selectedItem;

    public function render()
    {
        return view('livewire.shopping.index', [
            'list' => Good::all(),
        ]);
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

}

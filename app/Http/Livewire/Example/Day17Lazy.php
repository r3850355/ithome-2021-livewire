<?php

namespace App\Http\Livewire\Example;

use Livewire\Component;

class Day17Lazy extends Component
{
    public $name;
    public $phone;
    public $email;

    public $rules = [
        'name' => 'required|min:3',
        'phone' => 'required|digits:10',
        'email' => 'required|email'
    ];

    public function render()
    {
        return view('livewire.example.day17-lazy');
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    
    public function save()
    {
        $validatedData = $this->validate();

        // User::create($validatedData);
    }
}

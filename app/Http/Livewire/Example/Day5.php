<?php

namespace App\Http\Livewire\Example;

use Livewire\Component;

class Day5 extends Component
{
    public $title = 'Hello World!';
    public $subtitle;
    public $user = array(
        'role' => '管理員'
    );

    public function mount()
    {
        if ($this->user['role'] === '管理員')
        {
            $this->subtitle = '至高無上的管理員，歡迎回來';
        } else {
            $this->subtitle = '你好，使用者';
        }

        // Fill
        // $this->fill([
        //     'title' => '你好，世界',
        //     'subtitle' => '今天天氣真好',
        // ]);

        // Reset
        // $this->reset('title');

        // 或是一次 reset 多個變數
        
        // $this->reset([
        //     'title',
        //     'subtitle'
        // ]);
    }

    public function render()
    {
        return view('livewire.example.day5');
    }
}

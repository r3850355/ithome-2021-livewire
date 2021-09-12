<?php

namespace App\Http\Livewire\Example;

use Livewire\Component;

class Day11 extends Component
{
    public $articles = array(
        [
            'id' => 1,
            'title' => 'Day 01 | 前言與賽程',
            'content' => '從 2018 年介紹 Vue 的 UI Framework — Quasar ，到前年的 LINE Bot。 每年鐵人賽都剛好是工作最繁忙的下半年，希望下次能辦...',
            'url' => 'https://ithelp.ithome.com.tw/articles/10259642',
        ],
        [
            'id' => 2,
            'title' => 'Day 02 | Laravel Livewire 基本介紹',
            'content' => 'Livewire 是 Laravel 的全端框架，能建立像 Vue 一樣的動態頁面的同時又能保有 Laravel 原有的特性。除此之外在 SEO 方面仍跟原本...',
            'url' => 'https://ithelp.ithome.com.tw/articles/10259945',
        ],
        [
            'id' => 3,
            'title' => 'Day 03 | 透過指令建立元件',
            'content' => '安裝並部署 Livewire 的步驟沒有很多，照著做不用三分鐘就能完成囉！今天一樣是照著官方文件帶大家做一次囉～ 安裝 Livewire 官方文件 首先要先安裝...',
            'url' => 'https://ithelp.ithome.com.tw/articles/10260438',
        ],
    );
    
    public function render()
    {
        return view('livewire.example.day11');
    }

    public function clearArticle($index)
    {
        unset($this->articles[$index]);
    }
}

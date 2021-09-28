<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Todo;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
  每日的範例
*/
Route::get('/day5', App\Http\Livewire\Example\Day5::class);
Route::get('/day6', App\Http\Livewire\Example\Day6::class);
Route::get('/day7', App\Http\Livewire\Example\Day7::class);
Route::get('/day8', App\Http\Livewire\Example\Day8::class);
Route::get('/day9', App\Http\Livewire\Example\Day9::class);
Route::get('/day10', App\Http\Livewire\Example\Day10::class);
Route::get('/day11', App\Http\Livewire\Example\Day11::class);
Route::get('/day12', App\Http\Livewire\Example\Day12::class);
Route::get('/day13', App\Http\Livewire\Example\Day13::class);
Route::get('/day14', App\Http\Livewire\Example\Day14::class);
Route::get('/day15', App\Http\Livewire\Example\Day15::class);
Route::get('/day16', App\Http\Livewire\Example\Day16::class);
Route::get('/day17', App\Http\Livewire\Example\Day17::class);
Route::get('/day17-lazy', App\Http\Livewire\Example\Day17Lazy::class);
Route::get('/day18', App\Http\Livewire\Example\Day18::class);
/*
  實作的部分
*/
Route::get('/todo', Todo::class);
Route::get('/shopping', App\Http\Livewire\Shopping\Index::class)->name('shopping');
Route::get('/shopping/payment', App\Http\Livewire\Shopping\Payment::class)->name('shopping-payment');
// Route::get('/shopping-create', App\Http\Livewire\Shopping\CreateItem::class);
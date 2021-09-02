<?php

namespace App\Http\Livewire;

use Livewire\Component;
// 跟下面第九行的 Todo 撞 ClassName 所以這邊改叫 TodoModel
use App\Models\Todo as TodoModel;

class Todo extends Component
{
    public $todoInput;

    protected $rules = [
        'todoInput' => 'required'
    ];
    
    public function render()
    {
        return view('livewire.todo')->layout('layouts.app');
    }

    public function getTodoProperty()
    {
        return TodoModel::whereDate('created_at', date('Y-m-d'))->get();
    }

    public function addTodo()
    {
        // 驗證
        $this->validate();
        TodoModel::create([
            'title' => $this->todoInput,
        ]);

        // 清空剛剛輸入的值
        $this->todoInput = null;
    }

    public function checkTodo($id)
    {
        $todo = TodoModel::find($id);
        $todo->done = !$todo->done;
        $todo->save();
    }

    public function deleteTodo($id)
    {
        $todo = TodoModel::find($id);
        $todo->delete();
    }
}

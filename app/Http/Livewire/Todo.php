<?php

namespace App\Http\Livewire;

use Livewire\Component;
// 跟下面第九行的 Todo 撞 ClassName 所以這邊改叫 TodoModel
use App\Models\Todo as TodoModel;

class Todo extends Component
{
    public $title;

    public $date;

    protected $rules = [
        'title' => 'required'
    ];

    protected $queryString = [
        'date',
    ];
    
    public function render()
    {
        if (!$this->date) $this->date = date('Y-m-d');
        return view('livewire.todo');
    }

    public function getTodoProperty()
    {
        return TodoModel::whereDate('created_at', $this->date)->get();
    }

    public function addTodo()
    {
        // 驗證
        $validatedData = $this->validate();
        TodoModel::create($validatedData);

        // 清空剛剛輸入的值
        $this->title = null;
    }

    public function checkTodo($id)
    {
        $todo = TodoModel::find($id);
        $todo->done = true;
        $todo->save();
    }

    public function deleteTodo($id)
    {
        $todo = TodoModel::find($id);
        $todo->delete();
    }
}

<?php

namespace App\Http\Livewire;

use App\Models\Todo;
use Livewire\Component;

class AllTodos extends Component
{
    public $todos = [];
    public $editedTodoIndex = null;
    public $editedTodoField = null;

    protected $listeners = ['todoAdded', 'todoIncompleted'];

    protected $rules = [
        'todos.*.item' => 'required|min:5'
    ];

    protected $validationAttributes = [
        'todos.*.item' => 'to-do',
    ];

    public function mount() {
        $this->todos = Todo::where('completed', 0)->latest()->get()->toArray();
    }

    public function editTodo($todoIndex) {
        $this->editedTodoIndex = $todoIndex;
    }

    public function editTodoField($todoIndex, $fieldName) {
        $this->editedTodoField = $todoIndex.'.'.$fieldName;
    }

    public function saveTodo($todoIndex) {
        $this->validate();
        $todo = $this->todos[$todoIndex] ?? NULL;
        if(!is_Null($todo)) {
            optional(Todo::find($todo['id']))->update($todo);
        }
        $this->editedTodoField = null;
        $this->editedTodoIndex = null;
    }

    public function completeTodo($todoIndex) {
        $todo = $this->todos[$todoIndex];
        optional(Todo::find($todo['id']))->update(['completed' => 1]);
        $this->todos = Todo::where('completed', 0)->latest()->get()->toArray();
        $this->emit('todoCompleted');
    }

    public function deleteTodo($todoIndex) {
        $todo = $this->todos[$todoIndex];
        optional(Todo::find($todo['id']))->delete($todo);
        $this->todos = Todo::where('completed', 0)->latest()->get()->toArray();
    }

    public function todoIncompleted() {
        $this->todos = Todo::where('completed', 0)->latest()->get()->toArray();
    }

    public function todoAdded() {
        $this->todos = Todo::where('completed', 0)->latest()->get()->toArray();
    }

    public function render() {
        return view('livewire.all-todos', [
            'todos' => $this->todos,
        ]);
    }
}

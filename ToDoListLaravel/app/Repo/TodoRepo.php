<?php


namespace App\Repo;

class TodoRepo
{
    public function save($data)
    {
        $createTodo = auth()->user()->todos()->create($data);
        if ($createTodo) {
            return $createTodo;
        }
    }

    public function getTodo($todoId)
    {
        return auth()->user()->todos()->find($todoId);
    }


    public function fetchAll($search = null)
    {
        $todos = auth()->user()->todos();
        if ($search) {
            $todos->where('todo', 'like',"$search%");
        }
        return $todos->latest()->paginate(3);
    }


    public function update($todoId, $editedTodo)
    {
        $todo = $this->getTodo($todoId);
        $todo->update([
            'todo' => $editedTodo
        ]);
    }

    public function completed($todoId)
    {
        $todo = $this->getTodo($todoId);
        return ($todo->is_completed) ? $todo->update(['is_completed' => false]) : $todo->update(['is_completed' => true]);
    }

    public function delete($todoId)
    {
        return $this->getTodo($todoId)->delete();
    }
}

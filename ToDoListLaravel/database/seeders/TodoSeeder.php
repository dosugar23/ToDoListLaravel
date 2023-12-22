<?php

namespace Database\Seeders;

use App\Models\Todo;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TodoSeeder extends Seeder
{

    public $todos = [
        [
            'id' => 1,
            'user_id' => 1,
            'category_id' => 1,
            'todo' => 'Walking',
            'is_completed' => 1,
        ],
        [
            'id' => 2,
            'user_id' => 1,
            'category_id' => 1,
            'todo' => 'JavaScript',
            'is_completed' => 1,
        ],
        [
            'id' => 3,
            'user_id' => 1,
            'category_id' => 1,
            'todo' => 'Laravel',
            'is_completed' => 1,
        ],
        [
            'id' => 4,
            'user_id' => 1,
            'category_id' => 1,
            'todo' => 'Node',
            'is_completed' => 1,
        ],
        [
            'id' => 5,
            'user_id' => 1,
            'category_id' => 1,
            'todo' => 'React',
            'is_completed' => 1,
        ],
        [
            'id' => 6,
            'user_id' => 1,
            'category_id' => 1,
            'todo' => 'Waling',
            'is_completed' => 1,
        ],
        [
            'id' => 7,
            'user_id' => 1,
            'category_id' => 1,
            'todo' => 'Waling',
            'is_completed' => 1,
        ],
        [
            'id' => 8,
            'user_id' => 1,
            'category_id' => 1,
            'todo' => 'Waling',
            'is_completed' => 1,
        ],
        [
            'id' => 9,
            'user_id' => 1,
            'category_id' => 1,
            'todo' => 'Waling',
            'is_completed' => 1,
        ],
        [
            'id' => 10,
            'user_id' => 1,
            'category_id' => 1,
            'todo' => 'Waling',
            'is_completed' => 1,
        ],
        [
            'id' => 11,
            'user_id' => 1,
            'category_id' => 1,
            'todo' => 'Waling',
            'is_completed' => 1,
        ],
        [
            'id' => 12,
            'user_id' => 1,
            'category_id' => 1,
            'todo' => 'Waling',
            'is_completed' => 1,
        ],
    ];

    private function getTodos()
    {
        return collect($this->todos);
    }

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->getTodos() as $todo) {

            Todo::create($todo);
        }
    }
}

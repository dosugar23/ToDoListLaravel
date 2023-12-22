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
            'todo' => 'Test',
            'is_completed' => 1,
        ],
        [
            'id' => 2,
            'user_id' => 1,
            'category_id' => 1,
            'todo' => 'Migrate',
            'is_completed' => 1,
        ],
        [
            'id' => 3,
            'user_id' => 1,
            'category_id' => 1,
            'todo' => 'Seeder',
            'is_completed' => 1,
        ],
        [
            'id' => 4,
            'user_id' => 1,
            'category_id' => 1,
            'todo' => 'Factory',
            'is_completed' => 1,
        ],
        [
            'id' => 5,
            'user_id' => 1,
            'category_id' => 1,
            'todo' => 'Route',
            'is_completed' => 0,
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

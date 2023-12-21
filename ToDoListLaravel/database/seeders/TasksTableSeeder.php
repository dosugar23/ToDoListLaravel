<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TasksTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('tasks')->insert([
            'user_id' => 1, // assuming you have this user in your users table
            'title' => 'Sample Task',
            'description' => 'This is a sample task description.',
            'priority' => 'high',
            'category_id' => 1, // assuming you have this category in your categories table
            'due_date' => '2023-01-01',
            'status' => false,
            // Add other fields as necessary
        ]);

        // You can add more tasks here
    }
}

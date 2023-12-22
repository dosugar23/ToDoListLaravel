<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public $categories = [
        [
            'id' => 1,
            'user_id' => 1,
            'name' => 'School',
            'description' => '',
        ],
        [
            'id' => 2,
            'user_id' => 1,
            'name' => 'Home',
            'description' => '',
        ],
    ];

    private function getCategories()
    {
        return $this->categories;
    }

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->getCategories() as $category) {
            Category::create($category);
        }
    }
}

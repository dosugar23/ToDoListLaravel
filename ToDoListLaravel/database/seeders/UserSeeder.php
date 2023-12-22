<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public $users = [
        [
            'id' => 1,
            'name' => 'Bao',
            'email' => 'bao.nguyen012499@gmail.com',
            'password' => 'dunghoitui123',
        ],
        [
            'id' => 2,
            'name' => 'Do',
            'email' => 'dodepchai@gmail.com',
            'password' => 'Kekekeke1',
        ],
    ];

    private function getUsers()
    {
        return $this->users;
    }

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->getUsers() as $user) {
            User::create($user);
        }
    }
}

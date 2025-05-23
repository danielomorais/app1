<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $this->createDefaultUser();
        User::factory(5)->create();
    }

    public function createDefaultUser()
    {
        User::factory()->create([
            'name' => 'Daniel Morais',
            'email' => 'danielomorais@gmail.com',
        ]);
    }
}

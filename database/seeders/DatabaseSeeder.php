<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Factory;
use App\Models\News;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserTableSeeder::class,
            NewsTableSeeder::class,
            CategoriesTableSeeder::class,
        ]);
    }
}

<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Todo;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User Factory
        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'is_admin' => true,
        ]);
        User::factory()->create([
            'name' => 'Rama Soni Ravictor',
            'email' => 'ramasoniravictor@gmail.com',
            'is_admin' => false,
        ]);

        // Factory
        User::factory(100)->create();
        //Category::factory(100)->create();
        //Todo::factory(500)->create();

        // Factory with Relationship
        // User::all()->each(function (User $user) {
        //     $user->todos()->saveMany(Todo::factory(10)->make());
        // });
        // User::factory(100)->create()->each(function (User $user) {
        //     $user->todos()->saveMany(Todo::factory(10)->make());
        // });
    }
}

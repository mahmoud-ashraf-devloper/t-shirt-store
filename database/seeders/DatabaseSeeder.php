<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\Admin::factory()->create([
            'first_name' => fake()->name(),
            'last_name' => fake()->name(),
            'email' => 'admin@admin.com',
            'password' => Hash::make('password'),
        ]);
        \App\Models\Designer::factory()->create([
            'first_name' => fake()->name(),
            'last_name' => fake()->name(),
            'email' => 'designer@designer.com',
            'password' => Hash::make('password'),
        ]);
    }
}

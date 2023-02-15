<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Listing;
use App\Models\Category;
use Illuminate\Database\Seeder;

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

        Listing::factory(7)->create();

        // Category seed
        Category::create([
            "category" => "Furniture"
        ]);

        Category::create([
            "category" => "Electronics"
        ]);

        Category::create([
            "category" => "Car"
        ]);

        Category::create([
            "category" => "Property"
        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}

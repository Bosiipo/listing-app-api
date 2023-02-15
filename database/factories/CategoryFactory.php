<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            // Category::create([
            //     "category" => "Furniture"
            // ]),

            // Category::create([
            //     "category" => "Electronics"
            // ]),

            // Category::create([
            //     "category" => "Car"
            // ]),

            // Category::create([
            //     "category" => "Property"
            // ])
        ];
    }
}

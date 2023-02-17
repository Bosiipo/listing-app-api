<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Listing>
 */
class ListingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "title" => $this->faker->jobTitle(),
            "slug" => $this->faker->text(),
            "description"=> $this->faker->paragraph(),
            "email"=> $this->faker->email(),
            "category" => $this->faker->randomElement(['Furniture', 'Electronics', 'Cars', 'Property']),
            "price" => $this->faker->randomDigit(),
            "currency" => $this->faker->currencyCode(),
            // "mobile" => $this->faker->phoneNumber(),
            // "date_online" => $this->faker->date(),
            // "date_offline" => $this->faker->date(),
        ];
    }
}

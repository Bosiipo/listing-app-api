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
            "name" => $this->faker->name(),
            "slug" => $this->faker->text(),
            "description"=> $this->faker->paragraph(),
            "email"=> $this->faker->email(),
            "category_id" => $this->faker->numberBetween(1,4),
            "price" => $this->faker->randomDigit(),
            "currency" => $this->faker->currencyCode(),
            // "mobile" => $this->faker->phoneNumber(),
            // "date_online" => $this->faker->date(),
            // "date_offline" => $this->faker->date(),
        ];
    }
}

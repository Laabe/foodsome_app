<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Restaurant>
 */
class RestaurantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->streetName(),
            'delivery' => array_rand(['delivery' => '', 'takeout' => '', 'both' => '']),
            'city' => $this->faker->city(),
            'address' => $this->faker->address(),
            'description' => $this->faker->text,
            'phone' => $this->faker->phoneNumber(),
            'website' => $this->faker->domainName(),
            'email' => $this->faker->email(),
            'image' => $this->faker->imageUrl(),
        ];
    }
}

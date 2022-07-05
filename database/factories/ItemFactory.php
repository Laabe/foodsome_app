<?php

namespace Database\Factories;

use App\Models\Item;
use App\Models\Menu;
use App\Models\Restaurant;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Item>
 */
class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word(),
            'restaurant_id' => Restaurant::all()->random()->id,
            'menu_id' => Menu::all()->random()->id,
            'price' => $this->faker->randomFloat(2, 0, 200),
            'description' => $this->faker->sentence(),
        ];
    }
}

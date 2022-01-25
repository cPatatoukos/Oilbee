<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'category' => 'honey',
            'name' => $this->faker->name(),
            'description' => $this->faker->text(),
            'price' => '9.25',
            'discount' => '20', // password
            'option1' => '1',
            'option2' => '2',
            'option3' => '5',
            'price2' => '17.56',
            'price3' => '40.00',
            'image' => '/images/honey.jpeg',
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
}

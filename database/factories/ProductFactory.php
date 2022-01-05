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
        $name = $this->faker->text(25);
        $price = $this->faker->numberBetween($min = 100, $max = 900);

        return [
            'name' => $name,
            'slug' => Str::slug($name),
            'description' => $this->faker->text(100),
            'image_name' => $this->faker->imageUrl($width = 140, $height = 280),     
            'price' => $price,     
            'discount' => $this->faker->numberBetween($min = 0, $max = 100),
            'sale_price' => $price - 50,
            'category' => $this->faker->randomElement($array = array ('fashion-beauty','kids-babies', 'men-women', 'gadgets', 'electronics'))
        ];
    }
}

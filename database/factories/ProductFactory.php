<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    public function definition(): array
    {
        return [
            'category_id' => rand(1, 5),
            'name'        => [
                'uz' => fake()->sentence(3),
                'ru' => 'Similarly to Western European traditions',
            ],
            'price'       => rand(50000, 10000000),
            'description' => [
                'uz' => fake()->paragraph(5),
                'ru' => 'Similarly to Western European traditions, especially the German-language collection published by the Brothers Grimm, Russian folklore was first collected by scholars and systematically studied in the 19th century.',
            ],
        ];
    }
}

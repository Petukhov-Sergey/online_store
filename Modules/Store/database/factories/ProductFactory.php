<?php

namespace Modules\Store\database\factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Store\Entities\Product;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\Modules\Store\Entities\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Product::class;
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'slug' => $this->faker->slug(),
            'price' => $this->faker->numberBetween(1000, 999999),
            'stock' => $this->faker->numberBetween(1, 100),
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\Producto;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Producto::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->colorName,
            'codigo' => rand(0.1, 10),
            'serial' => rand(10000,999999),
            'created_at' => date('y-m-d'),
            'updated_at' => date('y-m-d'),
            'precio' => $this->faker->randomFloat,
            'en_stock' =>rand(0, 1),
        ];
    }
}

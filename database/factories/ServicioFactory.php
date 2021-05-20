<?php

namespace Database\Factories;

use App\Models\Servicio;
use Illuminate\Database\Eloquent\Factories\Factory;

class ServicioFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Servicio::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->company,
            'categoria' => rand(0.1, 10),
            'imagen_servicio' => $this->faker->fileExtension,
            'estado' => rand(0, 1),
            'created_at' => date('y-m-d'),
            'updated_at' => date('y-m-d'),
        ];
    }
}

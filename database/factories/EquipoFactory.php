<?php

namespace Database\Factories;

use App\Models\Equipo;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Equipo>
 */
class EquipoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $model = Equipo::class;
    public function definition()
    {
        return [
            'codigo' => $this->faker->randomNumber(2),
            'nombre' => $this->faker->text(20),
            'estado' => $this->faker->randomElement(['Nuevo','Seminuevo']),
            'cantidad' => $this->faker->randomDigit(),
        ];
    }
}

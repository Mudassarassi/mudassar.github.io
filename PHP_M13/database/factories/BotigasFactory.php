<?php

namespace Database\Factories;

use App\Models\botigas;
use Illuminate\Database\Eloquent\Factories\Factory;

class BotigasFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = botigas::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'nom' =>$this->faker->name,
            'adress'=> $this->faker->address,
            'capacidad'=> $this->faker->randomElement([10,7,4])
        ];
    }
}

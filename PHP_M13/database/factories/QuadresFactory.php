<?php

namespace Database\Factories;

use App\Models\quadres;
use Illuminate\Database\Eloquent\Factories\Factory;

class QuadresFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = quadres::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'nomAutor' =>$this->faker->name,
            'nom'=> $this->faker->name,
            'describe'=> $this->faker->text,
            'idBotiga'=> $this->faker->randomElement([1,2,3,4])
        ];
    }
}

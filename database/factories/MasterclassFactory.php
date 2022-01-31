<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MasterclassFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'date' => $this->faker->date(),
            'time' => $this->faker->time(),
            'vacants' => $this->faker->numberBetween(1,25),
            'description' => $this->faker->text(),
            'image' => 'https://picsum.photos/200/100',
        ];
    }
}

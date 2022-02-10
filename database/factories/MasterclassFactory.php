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
            'image' => 'uploads/3xK2hI4cTNGIeZcxPNxNhElB3DOHBSPsiDuxngJY.jpg',
            'featured' => $this->faker->numberBetween(0,1),
        ];
    }
}



//'image' => 'https://picsum.photos/200/100',
<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Students>
 */
class StudentsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            "name"=> $this->faker->name(),
            "lastName"=> $this->faker->lastName(),
            "score"=> $this->faker->numberBetween(4,100),
            "created_at"=> $this->faker->dateTime(),
            "updated_at"=>$this->faker->dateTime(),
            "age"=> $this->faker->numberBetween(10,70),
            "gender"=> $this->faker->randomElement(["m","f"]),
        ];
    }
}

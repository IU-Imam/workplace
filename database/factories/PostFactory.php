<?php

namespace Database\Factories;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            
            //Generates a User from factory and extracts id

'jobtitle' => $this->faker->title, //Generates a fake sentence
'company' => $this->faker->company, //generates fake 30 paragraphs
'location' => $this->faker->sentence,
'salary' => $this->faker->sentence,
'jobtype' => $this->faker->sentence,
'id' => User::factory()


        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\Enrollment;
use Illuminate\Database\Eloquent\Factories\Factory;

class EnrollmentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Enrollment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Firstname' => $this->faker->word,
        'Lastname' => $this->faker->word,
        'MI' => $this->faker->word,
        'course' => $this->faker->word,
        'year' => $this->faker->randomDigitNotNull,
        'date of birth' => $this->faker->word,
        'current address' => $this->faker->word,
        'email address' => $this->faker->word,
        'phone number' => $this->faker->randomDigitNotNull
        ];
    }
}

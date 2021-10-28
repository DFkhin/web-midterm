<?php

namespace Database\Factories;

use App\Models\Employeems;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeemsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Employeems::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'lastname' => $this->faker->word,
        'firstname' => $this->faker->word,
        'middlename' => $this->faker->word,
        'address' => $this->faker->word,
        'city_id' => $this->faker->randomDigitNotNull,
        'state_id' => $this->faker->randomDigitNotNull,
        'country_id' => $this->faker->randomDigitNotNull,
        'zip' => $this->faker->word,
        'age' => $this->faker->randomDigitNotNull,
        'birthdate' => $this->faker->word,
        'date_hired' => $this->faker->word,
        'department_id' => $this->faker->randomDigitNotNull,
        'division_id' => $this->faker->randomDigitNotNull,
        'picture' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}

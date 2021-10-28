<?php

namespace Database\Factories;

use App\Models\Employee_salary;
use Illuminate\Database\Eloquent\Factories\Factory;

class Employee_salaryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Employee_salary::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'employee_id' => $this->faker->randomDigitNotNull,
        'salary' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}

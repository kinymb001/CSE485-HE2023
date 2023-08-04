<?php

namespace Database\Factories;

use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeFactory extends Factory
{
    protected $model = Employee::class;
    public function definition()
    {
        $salary = random_int(1000, 9999);

        return [
            'name' => $this->faker->name,
            'address' => $this->faker->address,
            'salary' => $salary
        ];
    }
}

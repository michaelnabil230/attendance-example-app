<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Attendance>
 */
class AttendanceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'employee_id' => fake()->numberBetween(1, 10),
            'time_start' => fake()->dateTimeBetween('-1 year', 'now'),
            'time_end' => fake()->dateTimeBetween('-1 year', 'now'),
        ];
    }
}

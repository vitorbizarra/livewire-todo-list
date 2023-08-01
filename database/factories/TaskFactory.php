<?php

namespace Database\Factories;

use App\Enums\TaskStatus;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title'       => fake()->word(),
            'description' => fake()->realText(),
            'status'      => fake()->randomElement(TaskStatus::cases()),
            'deadline'    => fake()->date(max: '6 month')
        ];
    }
}

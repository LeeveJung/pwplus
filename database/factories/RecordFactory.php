<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Record>
 */
class RecordFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'category_id' => fake()->numberBetween(1, 6),
            'customer_id' => fake()->numberBetween(1, 50),
            'username' => fake()->userName(),
            'password' => fake()->password(10),
            'domain' => fake()->domainName(),
            'ip' => fake()->ipv4,
            'path' => fake()->filePath(),
            'security' => null,
            'description' => fake()->sentence(20)
        ];
    }
}

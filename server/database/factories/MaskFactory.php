<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Foundation\Testing\WithFaker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mask>
 */
class MaskFactory extends Factory
{
    use WithFaker;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'pharmacy_id' => \App\Models\Pharmacy::factory(),
            'name' => $this->faker()->word(),
            'price' => $this->faker()->randomFloat(2, 0, 100),
        ];
    }
}

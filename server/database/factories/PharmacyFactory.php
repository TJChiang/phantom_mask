<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Foundation\Testing\WithFaker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pharmacy>
 */
class PharmacyFactory extends Factory
{
    use WithFaker;

    public function definition(): array
    {
        return [
            'name' => $this->faker()->company(),
            'cash_balance' => $this->faker()->randomFloat(2, 0, 10000),
        ];
    }
}

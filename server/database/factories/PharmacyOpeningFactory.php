<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Foundation\Testing\WithFaker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PharmacyOpening>
 */
class PharmacyOpeningFactory extends Factory
{
    use WithFaker;

    public function definition(): array
    {
        return [
            'pharmacy_id' => \App\Models\Pharmacy::factory(),
            'weekday' => $this->faker()->randomElement(array_column(\App\Enums\Weekday::cases(), 'name')),
            'opening_time' => $this->faker()->time(),
            'closing_time' => $this->faker()->time(),
        ];
    }
}

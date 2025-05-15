<?php

namespace Database\Factories;

use App\Models\Mask;
use App\Models\Pharmacy;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Foundation\Testing\WithFaker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Transaction>
 */
class TransactionFactory extends Factory
{
    use WithFaker;

    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'pharmacy_id' => Pharmacy::factory(),
            'mask_id' => Mask::factory(),
            'quantity' => $this->faker()->randomNumber(2),
            'price' => $this->faker()->randomFloat(2, 0, 100),
            'total_price' => $this->faker()->randomFloat(2, 0, 10000),
            'note' => $this->faker()->sentence(),
            'transaction_time' => $this->faker()->dateTime(),
        ];
    }
}

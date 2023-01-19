<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
          
            'amount' =>$this->faker->randomFloat(2,50,1000),
            'shipping_fee'=>$this->faker->randomFloat(2,50,1000),
            'payment_method' => $this->faker->randomElement(['COD','Gcash','Credit Card'])
        ];
    }
}

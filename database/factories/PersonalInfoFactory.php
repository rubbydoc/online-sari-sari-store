<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PersonalInfo>
 */
class PersonalInfoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'address'=>$this->faker->address,
            'contact_number'=>$this->faker->phoneNumber,
            'birth_date'=>$this->faker->date,
            'gender'=>$this->faker->randomElement(['male', 'female']),
            'user_id' => User::factory()->create()->id,
        ];
    }
}
//AccountInformation::factory()->create()
//create a new account information and get the user_id by creating factory of User model
//one to one relationship User and AccountInformation

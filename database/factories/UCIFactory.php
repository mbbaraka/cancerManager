<?php

namespace Database\Factories;

use App\Models\UCI;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class UCIFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = UCI::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
                'first_name' => 'Admin',
                'last_name' => 'Sample',
                'email' => 'admin@uci.com',
                'phone' => '0773034311',
                'role' => 'uci',
                'email_verified_at' => now(),
                'password' => Hash::make('helloworld'), // password
                'remember_token' => Str::random(10),

        ];
    }
}

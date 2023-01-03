<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Karyawan>
 */
class KaryawanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nama' => $this->faker->name,
            'jabatan' => $this->faker->jobTitle,
            'departemen' => $this->faker->locale,
            'gaji' => $this->faker->numberBetween(1000000, 10000000),
            'alamat' => $this->faker->address,
            'email' => $this->faker->email,
            'no_telp' => $this->faker->phoneNumber,
        ];
    }
}

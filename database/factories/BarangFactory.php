<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Buku>
 */
class BarangFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nama_barang' => $this->faker->word(),
            'harga' => $this->faker->numberBetween(50000, 200000),
            'stok' => $this->faker->numberBetween(1, 100),
            'id_Supplier' => $this->faker->unique()->numberBetween(1, 1000000), // Menentukan ID sesuai kebutuhan Anda
            'id_Supplier' => $this->faker->unique()->numberBetween(1, 1000000), // Menentukan ID sesuai kebutuhan Anda

        ];
    }
}
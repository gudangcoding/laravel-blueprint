<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Kategori;
use App\Models\barang;

class BarangFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Barang::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'kategori_id' => Kategori::factory(),
            'nama_barang' => $this->faker->word(),
            'harga' => $this->faker->randomFloat(0, 0, 9999999999.),
            'stok' => $this->faker->word(),
            'keterangan' => $this->faker->text(),
            'gambar' => $this->faker->word(),
            'gambar2' => '{}',
        ];
    }
}

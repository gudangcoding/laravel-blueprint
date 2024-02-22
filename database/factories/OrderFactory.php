<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\order;

class OrderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Order::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'tanggal' => $this->faker->date(),
            'status' => $this->faker->word(),
            'kode' => $this->faker->word(),
            'jumlah_harga' => $this->faker->word(),
            'jumlah_barang' => $this->faker->word(),
            'token_midtrans' => $this->faker->word(),
            'url_bayar' => $this->faker->word(),
            'bukti_bayar' => $this->faker->word(),
            'catatan' => $this->faker->word(),
        ];
    }
}

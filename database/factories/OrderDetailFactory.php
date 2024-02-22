<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Barang;
use App\Models\Order;
use App\Models\order_detail;

class OrderDetailFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = OrderDetail::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'barang_id' => Barang::factory(),
            'order_id' => Order::factory(),
            'jumlah' => $this->faker->word(),
            'harga' => $this->faker->randomFloat(0, 0, 9999999999.),
        ];
    }
}

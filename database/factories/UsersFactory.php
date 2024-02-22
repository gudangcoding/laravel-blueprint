<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\users;

class UsersFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Users::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->safeEmail(),
            'password' => $this->faker->password(),
            'alamat' => $this->faker->text(),
            'nohp' => $this->faker->regexify('[A-Za-z0-9]{16}'),
            'foto' => $this->faker->word(),
            'level' => $this->faker->randomElement(["admin","user"]),
            'aktif' => $this->faker->randomElement(["Y","N"]),
        ];
    }
}

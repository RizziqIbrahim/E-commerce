<?php

namespace Database\Factories;

use App\Models\Food;
use Illuminate\Database\Eloquent\Factories\Factory;

class FoodFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Food::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "category_id" => $this->faker->numberBetween($min = 1, $max = 5),
            "nama_makanan" => $this->faker->sentence(),
            "foto_makanan" => $this->faker->imageUrl($width = 640, $height = 480),
            "harga" => $this->faker->randomDigit,
            "deskripsi" => $this->faker->paragraph,
            "stok" => $this->faker->numberBetween($min = 1, $max = 99),
            "slug_food" => \Str::slug($this->faker->sentence()),
        ];
    }
}

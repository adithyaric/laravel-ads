<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'media_id' => mt_rand(1, 5),
            'kategori_web' => $this->faker->sentence(3),
            'category_id' => mt_rand(1, 5),
            'proses' => $this->faker->sentence(3),
            'keterangan' => $this->faker->sentence(10),
            'harga' => $this->faker->numberBetween(100000, 1000000),

        ];
    }
}

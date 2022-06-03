<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MediaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama_web' => $this->faker->name(),
            'link_url' => $this->faker->url(),
            'lokasi' => $this->faker->address(),
            'deskripsi' => $this->faker->text(180),
            'domain_authority' => $this->faker->numberBetween(10, 100),
            'citation_flow' => $this->faker->numberBetween(20, 100),
            'reffering_domain' => $this->faker->numberBetween(30, 100),
            'banyak_visitor' => $this->faker->numberBetween(40, 100),
            'main_traffic' => $this->faker->word(),
        ];
    }
}

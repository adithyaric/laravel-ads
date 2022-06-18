<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(5)->create();
        \App\Models\Media::factory(5)->create();
        \App\Models\Service::factory(5)->create();
        // \App\Models\Category::factory(3)->create();
        \App\Models\Category::create([
            "name" => "Advetorial",
            "slug" => "advetorial",
        ]);

        \App\Models\Category::create([
            "name" => "Backlink Media",
            "slug" => "backlink-media",
        ]);

        \App\Models\Category::create([
            "name" => "Press Release",
            "slug" => "press-release",
        ]);

        \App\Models\Attribute::factory(5)->create();
    }
}

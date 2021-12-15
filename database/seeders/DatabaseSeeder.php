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
        // \App\Models\User::factory(10)->create();
        $this->call(PaketsSeeder::class);
        $this->call(GenresSeeder::class);
        $this->call(Batas_usiasSeeder::class);
        $this->call(PemainsSeeder::class);
        $this->call(SutradarasSeeder::class);
        $this->call(FilmsSeeder::class);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class Batas_usiasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // kosongkan semua data di tabel genres
        \DB::statement('SET FOREIGN_KEY_CHECKS=0');
        \DB::table('batas_usias')->truncate();

        // membuat 15 genre secara manual
        \DB::table('batas_usias')->insert([
            [
                'batas_usia'    => 'SU',
            ],
            [
                'batas_usia'    => '13+',
            ],
            [
                'batas_usia'    => '17+',
            ],
            [
                'batas_usia'    => '21+',
            ],
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PaketsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // kosongkan semua data di tabel pakets
        \DB::statement('SET FOREIGN_KEY_CHECKS=0');
        \DB::table('pakets')->truncate();

        // membuat 3 paket secara manual
        \DB::table('pakets')->insert([
            [
                'nama_paket'    => 'Free',
            ],
            [
                'nama_paket'    => 'Gold',
            ],
            [
                'nama_paket'    => 'Platinum',
            ],
        ]);
    }
}

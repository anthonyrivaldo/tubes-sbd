<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SutradarasSeeder extends Seeder
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
        \DB::table('sutradaras')->truncate();

        // membuat 15 genre secara manual
        \DB::table('sutradaras')->insert([
            [
                'nama'    => 'Indrayanto Kurniawan',
                'keterangan' => 'Indrayanto Kurniawan merupakan sutradara dan produser berkebangsaan Indonesia. Ia memulai debut sutradaranya melalui sinetron Ada Apa dengan Cinta?.',
            ],
        ]);
    }
}

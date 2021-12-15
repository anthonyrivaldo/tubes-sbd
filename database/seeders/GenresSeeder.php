<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GenresSeeder extends Seeder
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
        \DB::table('genres')->truncate();

        // membuat 15 genre secara manual
        \DB::table('genres')->insert([
            [
                'nama_genre'    => 'Drama',
            ],
            [
                'nama_genre'    => 'Action',
            ],
            [
                'nama_genre'    => 'Komedi',
            ],
            [
                'nama_genre'    => 'Horror',
            ],
            [
                'nama_genre'    => 'Romance',
            ],
            [
                'nama_genre'    => 'Fantasy',
            ],
            [
                'nama_genre'    => 'Adventure',
            ],
            [
                'nama_genre'    => 'Thriller',
            ],
            [
                'nama_genre'    => 'Sci-fi',
            ],
            [
                'nama_genre'    => 'Misteri',
            ],
            [
                'nama_genre'    => 'Crime',
            ],
            [
                'nama_genre'    => 'Sport',
            ],
            [
                'nama_genre'    => 'Dokumenter',
            ],
            [
                'nama_genre'    => 'Biografi',
            ],
            [
                'nama_genre'    => 'Musical',
            ],
        ]);
    }
}

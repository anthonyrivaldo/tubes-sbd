<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PemainsSeeder extends Seeder
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
        \DB::table('pemains')->truncate();

        // membuat 15 genre secara manual
        \DB::table('pemains')->insert([
            [
                'nama'    => 'Ersya Aurelia',
                'keterangan' => 'Ersya Aurelia Siffrin adalah aktris dan model asal Indonesia yang dikenal memerankan Dara di Siapa Takut Jatuh Cinta. pernah membintangi film Jendral Kancil The Movie di tahun 2012 berperan sebagai Ratu Pelangi.',
            ],
            [
                'nama'    => 'Bryan Domani',
                'keterangan' => 'Bryan Domani merupakan salah satu dari model, aktor, dan juga penyanyi Indonesia. Siapa sangka, saat ini ia populer sebagai salah satu pemain sinetron yang sering menghiasi layar kaca ini dulunya adalah seorang anggota dari grup musik anak bernama Super7.',
            ],
            [
                'nama'    => 'Giorgino Abraham',
                'keterangan' => 'Giorgino Abraham adalah salah satu aktor muda berbakat Tanah AIr. Namanya mulai dikenal publik setelah perannya sebagai Arif di Aku Anak Indonesia, dan Arka di Anugerah Cinta. Selain itu Giorgino juga dipercaya untuk bermain dalam beberapa judul film yakni, Tendangan dari Langit, Bumi Manusia, dan Bebas.',
            ],
            [
                'nama'    => 'Icha Nabilah',
                'keterangan' => 'Aisyah Nabilah Edison, yang lebih dikenal sebagai Icha Nabilah adalah seorang aktris, peragawati dan selebriti internet berkebangsaan Indonesia yang lahir di Silungkang, 28 November 1999. Ia juga berperan di beberapa Vidio Original Series yaitu,Girls in the City dan I Love You Baby.',
            ],
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FilmsSeeder extends Seeder
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
        \DB::table('films')->truncate();

        // membuat 3 paket secara manual
        \DB::table('films')->insert([
            [
                'judul'    => 'I Love You Baby',
                'deskripsi'    => 'Pertemuan Raka dan Baby dimulai saat Baby ingin memergoki Darwin yang sedang berada di Bandung. Akhirnya Baby melontarkan ide nekat untuk naik ojek online ke Bandung dengan Raka sebagai pengemudinya',
                'id_genre'    => '5',
                'batas_usia'    => '2',
                'id_sutradara'    => '1',
                'id_pemain'    => '1',
                'url'   => 'http://localhost:8000/img/iloveyoubaby.jpg',
                'url2'   => 'http://localhost:8000/img/iloveyoubaby.jpg',
            ],
            [
                'judul'    => 'Jingga dan Senja',
                'deskripsi'    => 'Pertemuan Raka dan Baby dimulai saat Baby ingin memergoki Darwin yang sedang berada di Bandung. Akhirnya Baby melontarkan ide nekat untuk naik ojek online ke Bandung dengan Raka sebagai pengemudinya',
                'id_genre'    => '5',
                'batas_usia'    => '2',
                'id_sutradara'    => '1',
                'id_pemain'    => '1',
                'url'   => 'http://localhost:8000/img/jinggadansenja.jpg',
                'url2'   => 'https://cdn-production-thumbor-vidio.akamaized.net/WWoy5IEfIp0PwCMqNQGaXTDdPws=/212x315/filters:quality(75)/vidio-web-prod-film/uploads/film/image_portrait/3674/jingga-dan-senja-65dedc.jpg',
            ],
            [
                'judul'    => 'Jingga dan Senja',
                'deskripsi'    => 'Pertemuan Raka dan Baby dimulai saat Baby ingin memergoki Darwin yang sedang berada di Bandung. Akhirnya Baby melontarkan ide nekat untuk naik ojek online ke Bandung dengan Raka sebagai pengemudinya',
                'id_genre'    => '5',
                'batas_usia'    => '2',
                'id_sutradara'    => '1',
                'id_pemain'    => '1',
                'url'   => 'http://localhost:8000/img/myLove.jpg',
                'url2'   => 'http://localhost:8000/img/myLove.jpg',
            ],
            [
                'judul'    => 'Jingga dan Senja',
                'deskripsi'    => 'Pertemuan Raka dan Baby dimulai saat Baby ingin memergoki Darwin yang sedang berada di Bandung. Akhirnya Baby melontarkan ide nekat untuk naik ojek online ke Bandung dengan Raka sebagai pengemudinya',
                'id_genre'    => '5',
                'batas_usia'    => '2',
                'id_sutradara'    => '1',
                'id_pemain'    => '1',
                'url'   => 'http://localhost:8000/img/cintaamara.jpg',
                'url2'   => 'http://localhost:8000/img/cintaamara.jpg',
            ],
            [
                'judul'    => 'Kupilih Cinta',
                'deskripsi'    => 'SETIAP SENIN | Berkisah tentang RIRI, seorang dokter muda, dalam perjalanan hidupnya, menentukan pilihan terbaiknya. kita akan mengikuti Riri dalam menjalani resiko yang harus ia jalani pada setiap pilihannya. Riri menyadari bahwa ia tidak bisa terus melarikan diri dan menghindar. Pada akhirnya ia harus memilih. Sayangnya setiap pilihan memiliki resiko yang sangat besar yang akan mempengaruhi hidupnya. Riri sangat membenci penyesalan. Namun bila ia harus menyesal, setidaknya ia ingin penyesalan itu tidak mengorbankan orang lain. Riri tidak pernah mencintai Haris si petualang, apalagi Bandi sang musisi yang belakangan dekat dengannya. Ia bahkan tak pernah menyangka akan berada ditengah-tengah kemelut dua cinta ini. Pada akhirnya, ternyata kebebasan itu juga adalah pilihan yang harus Riri pertanggungjawabkan.',
                'id_genre'    => '5',
                'batas_usia'    => '2',
                'id_sutradara'    => '1',
                'id_pemain'    => '1',
                'url'   => 'https://cdn-production-thumbor-vidio.akamaized.net/2I0HdZzLqhGf9T0vvJ_8xNUG0CQ=/220x124/filters:quality(75)/vidio-web-prod-video/uploads/video/image/2365044/kupilih-cinta-vidio-original-series-official-trailer-192463.jpg',
                'url2'   => 'http://localhost:8000/img/kupilih_cinta2.jpg',
            ],
        ]);
    }
}

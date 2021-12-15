<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Film;
use Illuminate\Support\Facades\DB;

class FilmController extends Controller
{
    // Fungsi untuk mengambil data film untuk ditampilkan di halaman home
    function list()
    {
        $film = DB::table('films')
                    ->where('id', '>', '1')
                    ->get();

        return view('home',['films'=>$film]);
    }

    // Fungsi untuk mengambil data film untuk ditampilkan di halaman detail film
    function detail()
    {
        $film = DB::table('films')
                    ->where('id', '=', $id)
                    ->get();

        return view('detail/{id}', ['films'=>$film]);
    }
}

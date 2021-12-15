<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
// User::where('email', $req['email'])->first();
{
    // Fungsi Login
    function login(Request $req) {
        $user = DB::table('users')
                    ->where('email', '=', $req['email'])->first()
                    ->get();

        if (!$user) {
            return redirect()->back();
        }
        else {
            if (Hash::check($req['password'], $user->password)) {
                $req->session()->put('user', $user->email);
                // echo session('user');
                return redirect('home');
            }
            else {
                echo "wrong pass";
            }
        }
    }

    // Fungsi Register
    function addData(Request $req) {
        $req->validate([
            'email' => 'unique:users',
        ]);

        $user = new User;
        $user->nama = $req->nama;
        $user->tgl_lahir = $req->tgl_lahir;
        $user->gender = $req->gender;
        $user->email = $req->email;
        $user->password = Hash::make($req->password);
        $user->id_paket = 1;
        // $user['password'] = Hash::make($user['password']);
        $user->save();
        return redirect('login');
    }
}

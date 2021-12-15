<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    function login(Request $req) {
        $user = User::where('email', $req['email'])->first();

        if (!$user) {
            return redirect()->back();
        }
        else {
            if (Hash::check($req['password'], $user->password)) {
                $req->session()->put('user', $user['email']);
                // echo session('user');
                return redirect('home');
            }
            else {
                echo "wrong pass";
            }
        }
    }

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

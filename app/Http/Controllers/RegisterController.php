<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'Register'
        ]);
    }

    public function store(Request $request)
    {
        $ValidatedData = $request->validate([
            'name' => ['required', 'max:255'],
            'username' => ['required', 'min:3', 'max:255', 'unique:users'],
            'email' => ['required', 'email:dns', 'unique:users'],
            'password' => ['required', 'min:6', 'max:255']
        ]);
        $ValidatedData['password'] = bcrypt($ValidatedData['password']);

        User::create($ValidatedData);

        return redirect('/login')->with('success', 'Registrasi Berhasil, Silahkan Login');
    }
}

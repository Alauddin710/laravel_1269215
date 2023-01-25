<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');

        // $user = new User();
        // $data = $user->get();
        // $data->where('email', 'alo@gmail.com');
        // $pass = sha1('1234');
        // $data->where('password', $pass)->get();
        // dd($data);
    }
    public function login(Request $request)
    {
        $validation = $request->validate([
            'email' => 'required|email',
            'password' => 'required',

        ]);
        return redirect('/dashboard');
    }
}

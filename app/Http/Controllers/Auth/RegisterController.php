<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware("guest");
    }

    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $req)
    {
        // User Validation
        $this->validate($req, [
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'username' => 'required|max:255',
            'password' => 'required|confirmed',
            'email' => 'required|email|max:255',
            'telephone' => 'required|min:11|numeric',
        ]);

        // Store to DB
        User::create([
            'first_name' => $req->first_name,
            'last_name' => $req->last_name,
            'username' => $req->username,
            'password' => Hash::make($req->password),
            'email' => $req->email,
            'telephone' => $req->telephone,
        ]);

        // Sign User in
        auth()->attempt($req->only('username', 'password'));

        // Redirect
        return redirect()->route('/');
    }
}

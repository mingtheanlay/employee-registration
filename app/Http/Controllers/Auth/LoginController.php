<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware("guest");
    }

    public function index()
    {
        return view('auth.login');
    }

    public function store(Request $req)
    {
        // User Validation
        $this->validate($req, [
            'username' => 'required',
            'password' => 'required',

        ]);

        // Sign User in
        if (auth()->attempt($req->only('username', 'password'), $req->remember)) {
            // Redirect
            return redirect()->route('/');
        } else {
            return back()->with('status', 'Incorrect username or password');
        }
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\user_test;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index() {
        return view('login');
    }
    public function auth(Request $request) {
        $credentials = $request->validate([
            'name' => 'required',
            'password' => 'required'
        ]);

        return back()->with('error', 'name or password invalid');
    }
}

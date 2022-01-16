<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Session;

class SessionLoginController extends Controller
{
    public function login() {
        $uniqueCode = Str::random(10);
        return view('session-login.session-login', ['uniCode' => $uniqueCode]);
    }
    public function index() {
        return view('session-login.dashboard');
    }
    public function loginCheck(Request $request) {
        // Validating Data
        $request->validate([
            'username' => 'required|max:255',
            'password' => [
                Password::min(6)
                        ->letters()
                        ->mixedCase()
                        ->numbers()
            ]
        ]);
        // Set Session For Middleware
        // session([
        //     'username' => $request->username,
        //     'password' => $request->password,
        //     'uniCode' => $request->uniCode
        // ]);
        Session::put('username', $request->username);
        Session::put('password', $request->password);
        Session::put('uniCode', $request->uniCode);
        return view('/session-login.session-login');
    }
}

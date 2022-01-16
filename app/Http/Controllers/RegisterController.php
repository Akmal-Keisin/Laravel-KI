<?php

namespace App\Http\Controllers;

use App\Models\User_test;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index() {
        return view('register');
    }
    public function store(Request $request) {
        $validatedData = $request->validate([
            'name' => 'required',
            'password' => 'required',
            'password_confirmation' => 'required|same:password'
        ]);
        $validatedData['access_token'] = Str::random(10); 
        $validatedData['password'] = Hash::make($validatedData['password']);
        User_test::create($validatedData);

        return redirect('login');
    }
}

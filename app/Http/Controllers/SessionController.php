<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Session;
class SessionController extends Controller
{
    public function index() {
        $name = Request::get('name');
        $value = Request::get('value');
        Session::put($name,$value);
        return 'done';
    }

    public function show() {
        $name = Request::get('name');
        $value = Request::get('value');
        $getsession = Session::get($name);
        $getsessionvalue = Session::get($value);
        dd($getsessionvalue);
        return view('index', [
            'getsession' => $getsession,
            'getsessionvalue' => $getsessionvalue
        ]);
    }
}

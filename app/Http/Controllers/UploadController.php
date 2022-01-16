<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function index() {
        return view('upload');
    }
    public function store(Request $request) {
        $file = $request->file('file');
        $filename = $file->getClientOriginalName();

        if($filename) {
            $destination_path = storage_path('app');
            $file->move($destination_path, $filename);
        }
        return asset('uploads/' . $filename);
    }
}

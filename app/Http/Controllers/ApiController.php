<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ApiController extends Controller
{
    public function index() {
        $response = [
            "info" => "Success",
            "status" => Response::HTTP_OK
    ];
        return response()->json($response, Response::HTTP_OK);
    }
}

<?php

namespace App\Http\Controllers;

class MainController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function testPost()
    {
        return response()->json(['post' => 'ok']);
    }

    public function testPut()
    {
        return response()->json(['put' => 'ok']);
    }
}

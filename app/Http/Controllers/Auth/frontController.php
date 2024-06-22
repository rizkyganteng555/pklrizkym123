<?php

namespace App\Http\Controllers;

class frontController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function about()
    {
        return view('about');
    }

    // method selanjutnya untuk bagian front
}

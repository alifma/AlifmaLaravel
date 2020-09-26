<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        return view('index');
    }
    public function about()
    {
        $data = [
            'nama' => 'Alif Maulana Arifin'
        ];
        return view('about', $data);
    }
}

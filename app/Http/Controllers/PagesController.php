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
        $nama = 'ferry iqbal rhamdani';
        return view('about', ['nama' => $nama]);
    }
}

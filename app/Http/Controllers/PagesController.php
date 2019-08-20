<?php

namespace App\Http\Controllers;

// use App\User; untuk model -> belum butuh model
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return View
     */
    public function home()
    {
        return view('index');
    }

    public function about()
    {
        $nama = 'Ferry iqbal rhamdani';
        return view('about', ['nama' => $nama]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function home()
    {
        # code...
        return view('pages.home');
    }

    public function about()
    {
        # code...
        return view('pages.about');
    }

    public function contact()
    {
        # code...
        return view('pages.contact');
    }
}

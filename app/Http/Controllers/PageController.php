<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    /**
     * View main page
     */
    public function index()
    {
        return view('pages.index');
    }

    /**
     * View contact me page
     */
    public function contact()
    {
        return view('pages.contact');
    }

}

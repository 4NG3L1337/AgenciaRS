<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //Methods for return static pages.

    public function homepage()
    {
        return view('statics.home');
    }
}

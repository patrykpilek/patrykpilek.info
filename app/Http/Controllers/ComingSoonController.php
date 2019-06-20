<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComingSoonController extends Controller
{
    public function coming_soon()
    {
        return view('coming_soon');
    }
}

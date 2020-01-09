<?php

namespace App\Http\Controllers;

use App\View;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function index()
    {
        $views = View::orderBy('view_count', 'desc')->paginate(10);
        return view('view.index',compact('views'));
    }
}
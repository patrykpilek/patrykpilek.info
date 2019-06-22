<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return Renderable
     */
    public function index()
    {
        return view('movies.index');
    }

    public function koronajeden()
    {
        return view('movies.koronajeden');
    }

    public function koronadwa()
    {
        return view('movies.koronadwa');
    }

    public function chernobyl()
    {
        return view('movies.chernobyl');
    }

    public function kursk()
    {
        return view('movies.kursk');
    }

    public function brexit()
    {
        return view('movies.brexit');
    }

    public function agora()
    {
        return view('movies.agora');
    }

    public function picasso()
    {
        return view('movies.picasso');
    }

    public function albert_einstein()
    {
        return view('movies.albert_einstein');
    }

}

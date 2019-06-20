<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;

class FilmyController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return Renderable
     */
    public function index()
    {
        return view('filmy.index');
    }

    public function koronajeden()
    {
        return view('filmy.koronajeden');
    }

    public function koronadwa()
    {
        return view('filmy.koronadwa');
    }

    public function chernobyl()
    {
        return view('filmy.chernobyl');
    }

    public function kursk()
    {
        return view('filmy.kursk');
    }

    public function brexit()
    {
        return view('filmy.brexit');
    }

    public function agora()
    {
        return view('filmy.agora');
    }

    public function picasso()
    {
        return view('filmy.picasso');
    }

    public function albert_einstein()
    {
        return view('filmy.albert_einstein');
    }

}

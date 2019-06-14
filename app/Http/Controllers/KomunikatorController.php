<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class KomunikatorController extends Controller
{

//    /**
//     * @return Factory|View
//     */
//    public function index() {
//        $following = Auth::user()->following;
//        $followers = Auth::user()->followers;
//        return view('komunikator.index', compact('following', 'followers'));
//    }

    public function komunikator() {
        return view('komunikator.komunikator');
    }

    public function following() {
        $following = Auth::user()->following;
        return view('komunikator.following', compact('following'));
    }

    public function followers() {
        $followers = Auth::user()->followers;
        return view('komunikator.followers', compact('followers'));
    }
}
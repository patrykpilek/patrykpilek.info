<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Contracts\View\Factory;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class KomunikatorController extends Controller
{

    /**
     * @return Factory|View
     */
    public function index() {
        $user = Auth::user();
        $users = User::all();
        $following = $user->following;
        $followers = $user->followers;
        return view('komunikator.index', compact('user', 'users' ,'usersNo', 'following', 'followers'));
    }
}
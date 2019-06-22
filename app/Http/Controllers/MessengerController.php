<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Contracts\View\Factory;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class MessengerController extends Controller
{

    /**
     * @return Factory|View
     */
    public function messenger() {
        $users = User::all();

        return view('chat.message', compact('users'));
    }

    /**
     * @return Factory|View
     */
    public function following() {
        $users = User::all();

        return view('chat.following', compact('users'));
    }

    /**
     * @return Factory|View
     */
    public function followers() {
        $users = User::all();

        return view('chat.followers', compact( 'users'));
    }
}
<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\File;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class UserController extends Controller
{

    /**
     * @return Factory|View
     */
    public function index() {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    /**
     * @param User $user
     * @return Factory|View
     */
    public function view(User $user) {
        return view('users.view', compact('user'));
    }

    /**
     * @param Request $request
     * @param User $user
     * @return RedirectResponse
     */
    public function follow(Request $request, User $user) {
        if($request->user()->canFollow($user)) {
            $request->user()->following()->attach($user->id);
        }
        return redirect()->back();
    }

    /**
     * @param Request $request
     * @param User $user
     * @return RedirectResponse
     */
    public function unfollow(Request $request, User $user) {
        if($request->user()->canUnFollow($user)) {
            $request->user()->following()->detach($user->id);
        }
        return redirect()->back();
    }

    /**
     * @return Factory|View
     */
    public function profile()
    {
        $user = Auth::user();
        return view('users.profile', compact('user'));
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function update_avatar(Request $request){

        $request->validate([
            'avatar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $user = Auth::user();

        $avatarName = $user->id.'_avatar'.time().'.'.request()->avatar->getClientOriginalExtension();

        $request->avatar->storeAs('public/avatars', $avatarName);

        $user->avatar = $avatarName;
        $user->save();

        return back()->with('success','Udało Ci się przesłać obraz.');

    }
}

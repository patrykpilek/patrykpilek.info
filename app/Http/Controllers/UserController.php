<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $users = User::all();

        return view('users.index', compact('user', 'users'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function view(User $user)
    {
        return view('users.view', compact('user'));
    }

    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'username' => ['required', 'string', 'max:255', 'unique:users,username,' . $user->id],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,' . $user->id],
            'password' => ['nullable', 'string', 'min:8', 'confirmed'],
            'avatar' => ['mimes:jpeg,png,jpg,gif', 'max:2048'],
        ]);

        $user->username = $request->username;
        $user->email = $request->email;

        if ( ! $request->input('password') == '') {
            $user->password = Hash::make(trim($request->password));
        }

        if ($request->hasFile('avatar')) {
            $avatarName = $user->id.'_avatar'.time().'.'.request()->avatar->getClientOriginalExtension();
            $request->avatar->storeAs('public/avatars', $avatarName);
            $user->avatar = $avatarName;
        }

        $user->save();

        return redirect()->back()->with('success','Twój profil został zaktualizowany pomyślnie.');
    }

    public function destroy(User $user)
    {
        $user->forceDelete();
        Auth::logout();

        return redirect()->route('movies')->with('success', 'Twoje konto zostało usunięte!');
    }

    public function follow(Request $request, User $user) {
        if($request->user()->canFollow($user)) {
            $request->user()->following()->attach($user->id);
        }
        return redirect()->back();
    }

    public function unfollow(Request $request, User $user) {
        if($request->user()->canUnFollow($user)) {
            $request->user()->following()->detach($user->id);
        }
        return redirect()->back();
    }
}

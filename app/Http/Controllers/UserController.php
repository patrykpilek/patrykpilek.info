<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $user = Auth::user();
        return view('users.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return void
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param User $user
     * @return Response
     */
    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return void
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param User $user
     * @return Response
     */
    public function update(Request $request, User $user)
    {
        $data = $request->all();

        if($request->input('password')) {
            $data['password'] = $request->input('password');
        } else {
            $userpassowrd = $user->password;
            $data['password'] = $userpassowrd;
            $data['password_confirmation'] = $userpassowrd;
        }

        $validator = Validator::make($data, [
            'username' => ['required', 'string', 'max:255', 'unique:users,username,' . $user->id],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,' . $user->id],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'avatar' => ['mimes:jpeg,png,jpg,gif', 'max:2048'],
        ]);

        if ($validator->fails()) {
            return redirect()->route('users.index')->withErrors($validator)->withInput();
        }

        if ($request->hasFile('avatar')) {
            $avatarName = $user->id.'_avatar'.time().'.'.request()->avatar->getClientOriginalExtension();
            $request->avatar->storeAs('public/avatars', $avatarName);
            $data['avatar'] = $avatarName;
        }

        $data['password'] = Hash::make(trim($request->password));

        $user->update($data);

        return back()->with('success','Twój profil został zaktualizowany pomyślnie.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param User $user
     * @return void
     */
    public function destroy(User $user)
    {
        Auth::logout();

        if ($user->forceDelete()) {
            return redirect()->route('filmy')->with('success', 'Twoje konto zostało usunięte!');
        }
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
}

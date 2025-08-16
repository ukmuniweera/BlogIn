<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class userController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
            'confirm_password' => 'required|same:password'
        ]);

        User::create([
            "name" => $request->name,
            "email" => $request->email,
            "password" => bcrypt($request->password)
        ]);

        return view("/login");
    }

    public function login(Request $request)
    {
        $credentials = $request->only("email", "password");

        if (Auth::attempt($credentials)) {
            return redirect()->route('dashboard');
        } else {
            return back();
        }
    }

    public function logout()
    {
        Auth::logout();
        return view('/login');
    }

    public function update(Request $request)
    {
        $user = User::find($request->id);
        if ($user) {
            $user->name = $request->name;
            $user->password = bcrypt( $request->password);
            return back();
        }
    }

    public function delete()
    {
        $user = User::find(Auth::user()->id);
        $user->delete();
        return view('welcome');
    }
}

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
        $user = Auth::user();

        $request->validate([
            'name' => 'nullable',
            'password' => 'nullable|min:8',
        ]);

        if (!$request->filled('name') && !$request->filled('password')) {
            return redirect()->route('dashboard')->with('session', 'Account not updated.');
        }

        if ($request->filled('name')) {
            $user->name = $request->name;
        }

        if ($request->filled('password')) {
            $user->password = bcrypt($request->password);
        }

        $user->save();

        return redirect()->route('dashboard')->with('session', 'Account updated successfully.');
    }

    public function delete()
    {
        $user = User::find(Auth::user()->id);
        $user->delete();
        return view('register');
    }
}

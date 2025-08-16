<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class userController extends Controller
{
    public function register(Request $request)
    {
        if ($request->password == $request->confirm_password) {
            User::create([
                "name" => $request->name,
                "email" => $request->email,
                "password" => $request->password
            ]);
        } else {
            return back()->with("session", "Failed to create account");
        }
    }
}

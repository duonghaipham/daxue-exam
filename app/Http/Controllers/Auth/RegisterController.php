<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller {
    public function index() {
        return view('auth.register');
    }

    public function store(Request $request) {
        $credentials = $request->validate([
            'username' => ['required', 'unique:users'],
            'full_name' => ['required'],
            'password' => ['required'],
            'confirmed_password' => ['required']
        ]);

        $user = new User();
        $user->username = $request->username;
        $user->name = $request->full_name;
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect(route('login.index'))->with('status', trans('validation.registered'));
    }
}

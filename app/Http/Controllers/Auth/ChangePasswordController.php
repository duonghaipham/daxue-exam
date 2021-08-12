<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Rules\MatchOldPassword;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ChangePasswordController extends Controller {
    public function edit() {
        return view('auth.change');
    }

    public function update(Request $request) {
        $request->validate([
            'current_password' => ['required', new MatchOldPassword],
            'new_password' => ['required'],
            'confirmed_password' => ['same:new_password']
        ]);

        $currentUser = User::find(Auth::id());
        $currentUser->password = Hash::make($request->new_password);
        $currentUser->save();

        return redirect(route('change_password.edit'))->with('status', trans('passwords.reset'));
    }
}

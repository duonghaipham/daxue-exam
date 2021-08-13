<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InformationController extends Controller {
    private $user;

    public function __construct() {
        $this->middleware(function ($request, $next) {
            $this->user = [
                'id' => Auth::id(),
                'username' => Auth::user()->username,
                'name' => Auth::user()->name,
                'email' => Auth::user()->email,
                'phone' => Auth::user()->phone,
                'gender' => Auth::user()->gender,
                'dateOfBirth' => Auth::user()->date_of_birth,
                'school' => Auth::user()->school,
                'class' => Auth::user()->class,
                'city' => Auth::user()->city
            ];
            return $next($request);
        });
    }

    public function index() {
        return view('auth.view', $this->user);
    }

    public function edit() {
        return view('auth.update', $this->user);
    }

    public function update(Request $request) {
        $request->validate([
            'full_name' => ['required'],
            'email' => ['email'],
            'phone' => ['numeric']
        ]);

        $user = User::find(Auth::id());
        $user->name = $request->full_name;
        $user->gender = $request->gender;
        $user->date_of_birth = $request->date_of_birth;
        $user->school = $request->school;
        $user->class = $request->class;
        $user->city = $request->city;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->save();

        return back();
    }
}

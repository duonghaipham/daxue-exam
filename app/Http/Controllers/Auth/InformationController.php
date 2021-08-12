<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Rules\MatchOldPassword;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
}

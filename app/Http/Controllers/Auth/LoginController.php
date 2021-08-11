<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller {
  public function authenticate(Request $request) {
    $credentials = $request->only('username', 'password');

    if (Auth::attempt($credentials)) {
      return redirect()->intended();
    }
  }
}

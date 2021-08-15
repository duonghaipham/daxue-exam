<?php

namespace App\Http\Controllers;

use App\Models\Subject;

class HomeController extends Controller {
    public function index() {
        return view('index')->with('subjects', Subject::all());
    }
}

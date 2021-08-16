<?php

namespace App\Http\Controllers;

use App\Models\Exam;

class ExamController extends Controller {
    public function index($id) {
        return view('exam.view')
            ->with('exam', Exam::query()->find($id));
    }

    public function take($id) {
        return view('exam.take')
            ->with('exam', Exam::query()->find($id));
    }

    public function submit() {

    }
}

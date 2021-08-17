<?php

namespace App\Http\Controllers;

use App\Models\Addition;
use App\Models\Exam;
use App\Models\Result;
use Illuminate\Support\Facades\Auth;

class ExamController extends Controller {
    public function index($id) {
        return view('exam.view')
            ->with('exam', Exam::query()->find($id));
    }

    public function take($id) {
        $exam = Exam::query()->find($id);

        $additions = Addition::query()
            ->where('exam_id', '=', $id)
            ->get();

        return view('exam.take')
            ->with('work', $exam->users->find(Auth::id())->pivot)
            ->with('exam', $exam)
            ->with('additions', $additions);
    }

    public function submit() {

    }

    public function review($id, $attempt) {
        $exam = Exam::query()->find($id);

        $results = Result::query()
            ->where('user_id', '=', Auth::id())
            ->where('exam_id', '=', $id)
            ->where('attempt', '=', $attempt)
            ->get();

        $additions = Addition::query()
            ->where('exam_id', '=', $id)
            ->get();

        return view('exam.review')
            ->with('work', $exam->users->find(Auth::id())->pivot)
            ->with('exam', $exam)
            ->with('results', $results)
            ->with('additions', $additions);
    }
}

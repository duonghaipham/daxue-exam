<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use App\Models\Subject;

class SubjectController extends Controller {
    public function index($id) {
        $subject = Subject::query()->find($id);
        $quotes = $subject->quotes->all();
        $quote = $quotes[array_rand($quotes, 1)];

        $tests = Exam::query()
            ->where('subject_id', '=', $id)
            ->where('type', '=', 'test')
            ->get();

        $revisions = Exam::query()
            ->where('subject_id', '=', $id)
            ->where('type', '=', 'revision')
            ->get();

        return view('subject.view')
            ->with('quote', $quote)
            ->with('subject', $subject)
            ->with('tests', $tests)
            ->with('revisions', $revisions);
    }
}

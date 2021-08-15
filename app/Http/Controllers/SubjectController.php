<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use App\Models\Quote;
use App\Models\Subject;
use Illuminate\Support\Facades\DB;

class SubjectController extends Controller {
    public function index($id) {
        $quotes = Quote::query()->where('subject_id', '=', $id)->get()->toArray();
        $quote = (object)$quotes[array_rand($quotes, 1)];
        $subject = Subject::query()->find($id);

        $tests = Exam::query()
            ->select('exams.id', 'name', 'year_published', 'closed_time', 'creator', 'exams.created_at', DB::raw('count(attempt) as total'))
            ->where('subject_id', '=', $id)
            ->where('type', '=', 'test')
            ->leftJoin('works', 'exams.id', '=', 'works.exam_id')
            ->groupBy('id', 'name', 'year_published', 'closed_time', 'creator', 'created_at')
            ->get();

        $revisions = Exam::query()
            ->select('exams.id', 'name', 'year_published', 'closed_time', 'creator', 'exams.created_at', DB::raw('count(attempt) as total'))
            ->where('subject_id', '=', $id)
            ->where('type', '=', 'revision')
            ->leftJoin('works', 'exams.id', '=', 'works.exam_id')
            ->groupBy('id', 'name', 'year_published', 'closed_time', 'creator', 'created_at')
            ->get();

        return view('subject.view')
            ->with('quote', $quote)
            ->with('subject', $subject)
            ->with('tests', $tests)
            ->with('revisions', $revisions);
    }
}

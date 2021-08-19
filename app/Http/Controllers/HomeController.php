<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use App\Models\Subject;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller {
    public function index() {
        $subjects = Subject::all()->toArray();

        for ($i = 0; $i < count($subjects); $i++) {
            $subjects[$i]['amount_tests'] = Exam::query()
                ->where('subject_id', '=', $subjects[$i]['id'])
                ->where('type', '=', 'test')
                ->get()
                ->count();

            $subjects[$i]['amount_revisions'] = Exam::query()
                ->where('subject_id', '=', $subjects[$i]['id'])
                ->where('type', '=', 'revision')
                ->get()
                ->count();

            $subjects[$i] = (object)$subjects[$i];
        }

        return view('index')->with('subjects', $subjects);
    }

    public function switch($lang) {
        Session::put('locale', $lang);
        return back();
    }
}

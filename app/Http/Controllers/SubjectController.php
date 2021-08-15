<?php

namespace App\Http\Controllers;

use App\Models\Quote;
use App\Models\Subject;

class SubjectController extends Controller {
    public function index($id) {
        $quotes = Quote::query()->where('subject_id', '=', $id)->get()->toArray();
        $quote = (object)$quotes[array_rand($quotes, 1)];
        $subject = Subject::query()->find($id);

        return view('subject.view')
            ->with('quote', $quote)
            ->with('subject', $subject);
    }
}

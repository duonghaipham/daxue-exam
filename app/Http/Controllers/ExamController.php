<?php

namespace App\Http\Controllers;

use App\Models\Addition;
use App\Models\Exam;
use App\Models\Question;
use App\Models\Result;
use App\Models\Work;
use Illuminate\Http\Request;
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

    public function submit(Request $request, $id) {
        $timer = explode(':', $request->get('timer'));  // split timer mm:ss into an array
        $questions = array_filter(
            $request->all(),
            function ($key) {
                return strpos($key, 'question') !== false;
            }, ARRAY_FILTER_USE_KEY);   // filter elements are the answer of questions
        $attempt = Work::query()
            ->where('user_id', '=', Auth::id())
            ->where('exam_id', '=', 1)
            ->max('attempt') + 1;   // get the latest attempt

        $work = new Work();
        $work->user_id = Auth::id();
        $work->exam_id = $id;
        $work->attempt = $attempt;
        $work->second = $timer[0] * 60 + $timer[1];
        $work->save();  // insert this attempt data

        $check_questions = Question::query()
            ->where('exam_id', '=', $id)
            ->orderBy('id')
            ->get();    //  get corrected answers to compare with user's answer
        $out_of = 0;    // store the amount of the corrected questions by user

        foreach ($questions as $key => $value) {
            $index = intval(explode('_', $key)[1]); // get index through key
            if ($check_questions[$index - 1]->answer_id == intval($value))
                $out_of += 1;   // accumulate out of

            $result = new Result();
            $result->user_id = Auth::id();
            $result->exam_id = $id;
            $result->attempt = $attempt;
            $result->question_id = $index;
            $result->answer_id = intval($value);
            $result->save();    // store result for the current answer
        }
        Work::query()
            ->where('user_id', '=', Auth::id())
            ->where('exam_id', '=', $id)
            ->where('attempt', '=', $attempt)
            ->update(['out_of' => $out_of]);    // update out_of

        return redirect(route('exam.index', $id));  // redirect to exam status page
    }

    public function review($id, $attempt) {
        $work = Work::query()
            ->where('user_id', '=', Auth::id())
            ->where('exam_id', '=', $id)
            ->where('attempt', '=', $attempt)
            ->first();

        $results = Result::query()
            ->where('user_id', '=', Auth::id())
            ->where('exam_id', '=', $id)
            ->where('attempt', '=', $attempt)
            ->get();

        $additions = Addition::query()
            ->where('exam_id', '=', $id)
            ->get();

        return view('exam.review')
            ->with('exam', Exam::query()->find($id))
            ->with('work', $work)
            ->with('results', $results)
            ->with('additions', $additions);
    }
}

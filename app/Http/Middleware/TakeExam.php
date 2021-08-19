<?php

namespace App\Http\Middleware;

use App\Models\Exam;
use App\Models\Work;
use Carbon\Carbon;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class TakeExam {
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next) {
        $exam_id = $request->route('id');

        $attempt = Work::query()
            ->where('user_id', '=', Auth::id())
            ->where('exam_id', '=', $exam_id)
            ->count();
        $attempt_limit = Exam::query()->find($exam_id)->attempt_limit;

        if ($attempt >= $attempt_limit) {
            Session::forget('exception');
            Session::put('exception', __('message.exceed.attempt'));
            return redirect(route('exam.exceed', $exam_id));
        }
        else {
            $closed_at = Carbon::createFromTimeString(Exam::query()->find($exam_id)->closed_at);
            if (isset($closed_at) && $closed_at->lessThanOrEqualTo(Carbon::now())) {
                Session::forget('exception');
                Session::put('exception', __('message.exceed.death'));
                return redirect(route('exam.exceed', $exam_id));
            }
            return $next($request);
        }
    }
}

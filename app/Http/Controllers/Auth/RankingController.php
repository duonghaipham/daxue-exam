<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;

class RankingController extends Controller {
    public function index() {
        $members = User::query()
            ->get()
            ->sortBy(function ($member) {
                return $member->exams->count();
            }, SORT_REGULAR, true);

        return view('auth.rank')
            ->with('members', $members);
    }
}

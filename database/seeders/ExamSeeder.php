<?php

namespace Database\Seeders;

use App\Models\Exam;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ExamSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $test = new Exam();
        $test->name = 'Đề thi thử tỉnh Đồng Tháp 2018-2019';
        $test->description = 'Nội dung bài thi gồm các chương 1, 2, 3';
        $test->year_published = 2018;
        $test->closed_at = now();
        $test->creator = 1;
        $test->attempt_limit = 10;
        $test->minute_limit = 120;
        $test->type = 'test';
        $test->closed_at = Carbon::now()->addMonth()->toDateTimeString();
        $test->subject_id = '3';
        $test->save();

        $revision = new Exam();
        $revision->name = 'Sự hình thành trật tự thế giới mới sau chiến tranh thế giới thứ hai';
        $revision->description = 'Không được sử dụng tài liệu';
        $revision->year_published = '2021';
        $revision->closed_at = now();
        $revision->creator = 1;
        $revision->attempt_limit = 2;
        $revision->minute_limit = 60;
        $revision->type = 'revision';
        $revision->closed_at = Carbon::now()->addMonth()->toDateTimeString();
        $revision->subject_id = '3';
        $revision->save();
    }
}

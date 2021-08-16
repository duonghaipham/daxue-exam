<?php

namespace Database\Seeders;

use App\Models\Result;
use Illuminate\Database\Seeder;

class ResultSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $results = array(
            [
                'user_id' => 1,
                'exam_id' => 1,
                'attempt' => 1,
                'question_id' => 1,
                'answer_id' => 2
            ],
            [
                'user_id' => 1,
                'exam_id' => 1,
                'attempt' => 1,
                'question_id' => 2,
                'answer_id' => 2
            ]
        );

        foreach ($results as $result) {
            $resultInstance = new Result();
            $resultInstance->user_id = $result['user_id'];
            $resultInstance->exam_id = $result['exam_id'];
            $resultInstance->attempt = $result['attempt'];
            $resultInstance->question_id = $result['question_id'];
            $resultInstance->answer_id = $result['answer_id'];
            $resultInstance->save();
        }
    }
}

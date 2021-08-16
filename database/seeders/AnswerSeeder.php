<?php

namespace Database\Seeders;

use App\Models\Answer;
use App\Models\Question;
use Illuminate\Database\Seeder;

class AnswerSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $answers = array(
            [
                'exam_id' => 1,
                'question_id' => 1,
                'id' => 1,
                'content' => 'Nguyễn Huệ'
            ],
            [
                'exam_id' => 1,
                'question_id' => 1,
                'id' => 2,
                'content' => 'Nguyễn Ánh'
            ],
            [
                'exam_id' => 1,
                'question_id' => 2,
                'id' => 1,
                'content' => 'Nhà Thương'
            ],
            [
                'exam_id' => 1,
                'question_id' => 2,
                'id' => 2,
                'content' => 'Nhà Hạ'
            ],
        );

        foreach ($answers as $answer) {
            $answerInstance = new Answer();
            $answerInstance->exam_id = $answer['exam_id'];
            $answerInstance->question_id = $answer['question_id'];
            $answerInstance->id = $answer['id'];
            $answerInstance->content = $answer['content'];
            $answerInstance->save();
        }

        $question1 = Question::query()->find(1);
        $question1->answer_id = 1;
        $question1->save();

        $question2 = Question::query()->find(2);
        $question2->answer_id = 2;
        $question2->save();
    }
}

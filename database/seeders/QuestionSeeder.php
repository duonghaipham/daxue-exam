<?php

namespace Database\Seeders;

use App\Models\Question;
use Illuminate\Database\Seeder;
use phpDocumentor\Reflection\Types\Nullable;

class QuestionSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $questions = array(
            [
                'exam_id' => 1,
                'id' => 1,
                'content' => 'Vị vua nào đã đại phá quân Thanh?',
                'type' => 'single',
            ],
            [
                'exam_id' => 1,
                'id' => 2,
                'content' => 'Triều đại đầu tiên trong lịch sử Trung Quốc?',
                'type' => 'single',
            ]
        );

        foreach ($questions as $question) {
            $questionInstance = new Question();
            $questionInstance->exam_id = $question['exam_id'];
            $questionInstance->id = $question['id'];
            $questionInstance->content = $question['content'];
            $questionInstance->type = $question['type'];
            $questionInstance->save();
        }
    }
}

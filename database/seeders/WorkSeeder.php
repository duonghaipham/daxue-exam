<?php

namespace Database\Seeders;

use App\Models\Work;
use Illuminate\Database\Seeder;

class WorkSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $works = array(
            [
                'user_id' => 1,
                'exam_id' => 1,
                'attempt' => 1,
                'second' => 2456,
                'out_of' => 1
            ],
//            [
//                'user_id' => 1,
//                'exam_id' => 1,
//                'attempt' => 2,
//                'second' => 1793
//            ],
        );

        foreach ($works as $work) {
            $workInstance = new Work();
            $workInstance->user_id = $work['user_id'];
            $workInstance->exam_id = $work['exam_id'];
            $workInstance->attempt = $work['attempt'];
            $workInstance->second = $work['second'];
            $workInstance->out_of = $work['out_of'];
            $workInstance->save();
        }
    }
}

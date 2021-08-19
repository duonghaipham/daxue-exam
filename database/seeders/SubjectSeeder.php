<?php

namespace Database\Seeders;

use App\Models\Subject;
use Illuminate\Database\Seeder;

class SubjectSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $math = new Subject();
        $math->name = 'mathematics';
        $math->save();

        $english = new Subject();
        $english->name = 'english';
        $english->save();

        $history = new Subject();
        $history->name = 'history';
        $history->save();

        $geography = new Subject();
        $geography->name = 'geography';
        $geography->save();
    }
}

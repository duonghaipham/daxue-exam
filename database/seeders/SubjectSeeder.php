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
        $math->name = 'Toán học';
        $math->save();

        $english = new Subject();
        $english->name = 'Tiếng Anh';
        $english->save();

        $history = new Subject();
        $history->name = 'Lịch sử';
        $history->save();

        $geography = new Subject();
        $geography->name = 'Địa lý';
        $geography->save();
    }
}

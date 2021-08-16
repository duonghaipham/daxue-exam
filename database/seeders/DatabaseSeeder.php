<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() {
        $this->call([
            UserSeeder::class,
            SubjectSeeder::class,
            QuoteSeeder::class,
            ExamSeeder::class,
            QuestionSeeder::class,
            AnswerSeeder::class,
            WorkSeeder::class,
            ResultSeeder::class,
        ]);
    }
}

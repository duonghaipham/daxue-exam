<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exams', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->unsignedSmallInteger('year_published');
            $table->unsignedBigInteger('creator');
            $table->unsignedBigInteger('attempt_limit');
            $table->unsignedBigInteger('minute_limit');
            $table->enum('type', ['test', 'revision']);
            $table->unsignedBigInteger('subject_id');
            $table->dateTime('closed_at');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('exams');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function addition() {
        return $this->hasOne(Addition::class);
    }

    public function answers() {
        return $this->hasMany(Answer::class)
            ->where('exam_id', '=', $this->exam_id)
            ->where('question_id', '=', $this->id);
    }

    public function answer() {
        return $this->hasOne(Answer::class)
            ->where('exam_id', '=', $this->exam_id)
            ->where('question_id', '=', $this->id)
            ->where('id', '=', $this->answer_id);
    }

    public function exam() {
        return $this->belongsTo(Exam::class);
    }
}

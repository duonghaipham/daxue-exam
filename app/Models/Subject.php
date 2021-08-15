<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function quotes() {
        return $this->hasMany(Quote::class);
    }

    public function exams() {
        return $this->hasMany(Exam::class);
    }
}

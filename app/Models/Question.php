<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    public function addition() {
        return $this->hasOne(Addition::class);
    }

    public function answers() {
        return $this->hasMany(Answer::class);
    }

    public function Exam() {
        return $this->belongsTo(Exam::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;

    public function result() {
        return $this->hasOne(Result::class);
    }

    public function question() {
        return $this->belongsTo(Question::class);
    }
}

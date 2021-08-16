<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function work() {
        return $this->belongsTo(Work::class);
    }

    public function answer() {
        return $this->belongsTo(Answer::class);
    }
}

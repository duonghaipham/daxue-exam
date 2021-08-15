<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;

    public function questions() {
        return $this->hasMany(Question::class);
    }

    public function users() {
        return $this->belongsToMany(User::class, 'works')->withPivot(['attempt', 'second']);
    }

    public function subject() {
        return $this->belongsTo(Subject::class);
    }
}

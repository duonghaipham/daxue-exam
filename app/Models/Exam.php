<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;

    public function user() {
        return $this->belongsTo(User::class, 'creator', 'id', 'users');
    }

    public function questions() {
        return $this->hasMany(Question::class);
    }

    public function users() {
        return $this->belongsToMany(User::class, 'works')->withPivot(['attempt', 'second', 'out_of']);
    }

    public function subject() {
        return $this->belongsTo(Subject::class);
    }
}

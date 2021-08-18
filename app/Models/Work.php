<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    use HasFactory;

    protected $fillable = ['out_of'];

    public function results() {
        return $this->hasMany(Result::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function exam() {
        return $this->belongsTo(Exam::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Answer;

class People extends Model
{
    use HasFactory;
    protected $table = "peoples";
    protected $guarded = [];

    public function answers()
    {
        return $this->hasMany(Answer::class);
    }

    public function answers_with_question()
    {
        return $this->hasMany(Answer::class)->with('question');
    }
}

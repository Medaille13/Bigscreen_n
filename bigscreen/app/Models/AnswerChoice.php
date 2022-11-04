<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Answer;
use App\Models\Type;
use App\Models\Question;



class AnswerChoice extends Model
{
    use HasFactory;
    protected $table = 'answer_choices';
    protected $guarded = [];
    
    public function question()
    {
        return $this->belongsToMany(Question::class,'question_id', 'id');
    }
    
}

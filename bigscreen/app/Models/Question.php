<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Answer;
use App\Models\Type;
use App\Models\AnswerChoice;

class Question extends Model
{
    use HasFactory;
    {
        protected $table = 'question';
        protected $guarded = [];
        
        
        public function get_answers()
        {
            return $this->hasMany(Answer::class,'question_id','id');
        }
        
        public function type()
        {
            return $this->belongsTo(Type::class);
        }
        
           
        public  function get_answers_with_users()
        {   
            return $this->hasMany(Answer::class,'question_id','id')->with('user');
        }
        
        public function answer_choice()
        {
            return $this->hasMany(AnswerChoice::class,'question_id','id');
        }    
    }
}

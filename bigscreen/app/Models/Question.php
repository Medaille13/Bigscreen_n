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
    
        protected $table = 'questions'; // si suppression de 7 ligne tout ok //pas besoin de mettr cet ligne car bonne regle de nommage s ou sans s.
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
        
        public function answer_choices()
        {
            return $this->belongsToMany(AnswerChoice::class);
        }    
    }


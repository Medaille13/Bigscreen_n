<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\People;
use App\Models\Question;

class Answers extends Model
{
    protected $table = 'answers';
    protected $guarded = [];
    
    public function question()
    {
        return $this->belongsTo(Question::class);
    }
    
    public function people()
    {
        return $this->belongsTo(People::class);
    }
}

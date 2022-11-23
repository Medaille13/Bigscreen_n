<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Symfony\Component\Console\Question\Question;

class Type extends Model
{
    use HasFactory;
    protected $fillable = ['libelle'];
    
    public function question()
    {
        return $this->hasMany(Question::class);
    }
}
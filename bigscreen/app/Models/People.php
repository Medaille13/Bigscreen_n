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

    public function people()
    {
        return $this->hasMany(Answer::class);
    }
}

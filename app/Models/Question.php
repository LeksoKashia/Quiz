<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Quiz;

class Question extends Model
{
    use HasFactory;

    protected $fillable = [
        'question',
        'path',
        'answer1',
        'answer2',
        'answer3',
        'answer4',
        'correct_answer',
        'position',
        'quiz_id',
    ];

    public function quiz(){

        return $this->belongsTo(Quiz::class);

    }

}

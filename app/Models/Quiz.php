<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Question;

class Quiz extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'path',
        'description',
        'user_id',
        'published_by_admin'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function questions(){
        return $this->hasMany(Question::class);
    }
}

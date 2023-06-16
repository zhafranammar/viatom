<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'number_of_questions',
        'score',
        'start_time',
        'finish_time',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnswerResult extends Model
{
    use HasFactory;
    protected $table = 'answer_result';
    public $timestamp = true;
    protected $fillable = ['user_id' , 'exam_id' , 'question_id' , 'result'];
}

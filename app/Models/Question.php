<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    protected $table = 'questions';
    public $timestamp = true;
    protected $fillable = ['exam_id' , 'question_content' , 'answer_a' , 'answer_b' , 'answer_c' , 'answer_d' , 'result' , 'question_level'];

    public function Exam()
    {
        return $this->belongsTo('App\Models\Exam' , 'exam_id' , 'id');
    }

    public function scopeSearch($query)
    {
        if($key = request()->search){
            $query = $query->where('question_content' , 'like' , '%'.$key.'%');
        }
        return $query;
    }
}

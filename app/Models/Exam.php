<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;
    protected $table = 'exams';
    public $timestamp = true;
    protected $fillable = ['topic_id' , 'exam_name' , 'exam_class' , 'exam_title' , 'exam_image' , 'exam_level' , 'number_question' , 'exam_time'];

    public function scopeSearch($query)
    {
        if($key = request()->search){
            $query = $query->where('exam_name' , 'like' , '%'.$key.'%');
        }
        return $query;
    }

    public function Question()
    {
        return $this->hasOne('App\Models\Question' , 'exam_id' , 'id');
    }
}

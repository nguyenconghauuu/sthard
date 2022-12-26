<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamPoint extends Model
{
    use HasFactory;
    protected $table = 'exam_point';
    public $timestamp = true;
    protected $fillable = ['user_id' , 'exam_id' , 'point'];
}

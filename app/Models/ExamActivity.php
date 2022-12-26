<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamActivity extends Model
{
    use HasFactory;
    protected $table = 'exam_activity';
    public $timestamp = true;
    protected $fillable = ['user_id' , 'exam_id'];
}

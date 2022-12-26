<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseActivity extends Model
{
    use HasFactory;
    protected $table = 'course_activity';
    public $timestamp = true;
    protected $fillable = ['user_id' , 'course_id'];
}

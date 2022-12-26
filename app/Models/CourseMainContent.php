<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseMainContent extends Model
{
    use HasFactory;
    protected $table = 'course_main_content';
    public $timestamp = true;
    protected $fillable = ['course_id' , 'chapter_content'];
}

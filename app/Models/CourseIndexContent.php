<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseIndexContent extends Model
{
    use HasFactory;
    protected $table = 'course_index_content';
    public $timestamp = true;
    protected $fillable = ['course_id' ,  'index_content'];
}

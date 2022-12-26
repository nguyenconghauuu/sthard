<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseFileContent extends Model
{
    use HasFactory;
    protected $table = 'course_file_content';
    public $timestamp = true;
    protected $fillable = ['course_id' , 'chapter' , 'link' , 'file_content' , 'taifs_file'];
}

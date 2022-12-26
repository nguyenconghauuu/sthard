<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $table = 'courses';
    public $timestamp = true;
    protected $fillable = ['topic_id' , 'course_code' , 'course_name' , 'course_share' , 'course_class' , 'course_title' , 'course_image'];

    public function scopeSearch($query)
    {
        if($key = request()->search){
            $query = $query->where('course_name' , 'like' , '%'.$key.'%');
        }
        return $query;
    }

    public function CourseIndex()
    {
        return $this->hasOne('App\Models\CourseIndex' , 'course_id' , 'id');
    }

    public function CourseIndexContent()
    {
        return $this->hasMany('App\Models\CourseIndexContent' , 'course_id' , 'id');
    }
}

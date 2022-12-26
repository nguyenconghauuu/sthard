<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseOverviewContent extends Model
{
    use HasFactory;
    protected $table = 'course_overview_content';
    public $timestamp = true;
    protected $fillable = ['course_id' , 'course_name' , 'overview_content'];

    public function scopeSearch($query)
    {
        if($key = request()->search){
            $query = $query->where('course_name' , 'like' , '%'.$key.'%');
        }
        return $query;
    }
}
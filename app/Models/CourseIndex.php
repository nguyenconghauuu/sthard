<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseIndex extends Model
{
    use HasFactory;
    protected $table = 'course_index';
    public $timestamp = true;
    protected $fillable = ['course_id' , 'course_name'];

    public function scopeSearch($query)
    {
        if($key = request()->search){
            $query = $query->where('class_code' , 'like' , '%'.$key.'%');
        }
        return $query;
    }
}

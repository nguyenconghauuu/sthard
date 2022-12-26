<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    use HasFactory;
    protected $table = 'topics';
    public $timestamp = true;
    protected $fillable = ['topic_name'];

    public function scopeSearch($query)
    {
        if($key = request()->search){
            $query = $query->where('topic_name' , 'like' , '%'.$key.'%');
        }
        return $query;
    }

    public function Course()
    {
        return $this->hasOne('App\Models\Course' , 'topic_id' , 'id');
    }
}

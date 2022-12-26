<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SlideShow extends Model
{
    use HasFactory;
    protected $table = 'slide_show';
    public $timestamp = true;
    protected $fillable = ['slide_show_image'];
}

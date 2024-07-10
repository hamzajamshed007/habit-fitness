<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseAccordion extends Model
{
    use HasFactory;

    public $table = 'course_accordions';
    protected $fillable = [
        'course_id','title','description'
    ];

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id','title','description','image'
    ];

    public function category()
    {
        return $this->hasOne(CourseCategory::class, 'id','category_id');
    }

    public function accordions()
    {
        return $this->hasMany(CourseAccordion::class, 'course_id', 'id');
    }
}
